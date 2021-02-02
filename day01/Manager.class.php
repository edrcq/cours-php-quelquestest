<?php 

require_once "Account2.php";

class Manager {
    protected $db;

    function __construct($db) {
        $this->setDb($db);
    }

    function setDb($db) {
        $this->db = $db;
    }


}

class AccountManager extends Manager {

    function __construct($db) {
        parent::__construct($db);
    }

    function getById($id) {
        $query = $this->db->prepare("SELECT * FROM accounts WHERE id = :id");
        $query->bindValue(':id', $id);
        $query->execute();
        
        $data = $query->fetch(PDO::FETCH_ASSOC);
        $acc = new Account();
        $acc->hydrate($data);
        return $acc;
    }

    function getByUsername($username) {
        $query = $this->db->prepare("SELECT * FROM accounts WHERE username = :username");
        $query->bindValue(':username', $username);
        $query->execute();
        
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    function getByUsername_fetch($username) {
        $query = $this->db->prepare("SELECT * FROM accounts WHERE username = :username");
        $query->bindValue(':username', $username);
        $query->execute();
        
        $data = [];
        while($one_entry = $query->fetch()) {
            $tmp_acc = new Account();
            $tmp_acc->hydrate($one_entry);
            $data[] = $tmp_acc;
        }
        return $data;
    }

}



?>
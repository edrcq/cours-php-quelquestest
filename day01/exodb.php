<?php 

require_once "ladb.php";
require_once "Account2.php";
require_once "Manager.class.php";

$AccountManager = new AccountManager($bdd);

$accounts = $AccountManager->getByUsername_fetch('account-01');

echo '<pre>';
var_dump($accounts);
echo '</pre>';


// function insertInto() {
//     global $bdd; // pour utiliser des var globales dans les functions

//     $query = $bdd->prepare("INSERT INTO accounts (username, password, created) VALUES (?, ?, ?)");
//     // $query->bindValue(':username', $account->username);
//     // $query->bindValue(':password', $account->getPassword());
//     // $query->bindValue(':created', $account->created);

//     $query->execute([$account->username, $account->getPassword(), $account->created]);
//     echo $bdd->lastInsertId();

// }




?>
<?php 

class Account {
    private $_data = [
        "id" => "",
        "username" => "",
        "password" => "",
        "created" => ""
    ];

    function __construct() {

    }

    // function magique appelée a chaque `this->xx` | $name = xx
    function __get($name) {
        if (array_key_exists($name, $this->_data)) {
            return $this->_data[$name];
        }
    }

    // same que __get pour set
    function __set($name, $value) {
        $this->_data[$name] = $value;
    }

    public function __isset($name)
    {
        return isset($this->_data[$name]);
    }

    public function hydrate(array $datas)
    {
        foreach($datas as $key => $value) {
            if (isset($this->$key)) {
                $this->$key = $value;
            }
        }
    }
}




?>
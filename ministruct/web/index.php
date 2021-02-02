<?php 
require_once __DIR__ . "\\..\\php\\init.php";

// check auth

$page = 'home';
if (isset($_GET['p'])) {
    if (in_array($_GET['p'], $pages)) {
        $page = $_GET['p'];
    }
    else {
        $page = '404';
    }
}

require_once __DIR__ . '\\..\\php\\views\\' . $page . '.php';


?>
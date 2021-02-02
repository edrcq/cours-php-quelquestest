<?php
session_start();

require_once "ladb.php";
require_once "Account2.php";
require_once "Manager.class.php";

$AccountManager = new AccountManager($bdd);

?>
<?php 

require_once "init.php";
// $AccountManager

// $_POST['username'];

function handleError($message) {
    $_SESSION['error_message'] = $message;
    header('Location: signup.php');
    die();
}

if (!isset($_POST['username'])) {
    handleError("empty username");
}
if (!isset($_POST['password'])) {
    handleError("empty password");
}

$already = $AccountManager->getByUsername($_POST['username']);

if (count($already) > 0) {
    handleError("username already taken");
}







?>
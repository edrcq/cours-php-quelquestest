<?php 
require_once "init.php";


function handleError($message) {
    $_SESSION['error_message'] = $message;
    // header('Location: login.php');
    die();
}

if (!isset($_POST['username'])) {
    handleError("empty username");
}
if (!isset($_POST['password'])) {
    handleError("empty password");
}

$accounts = $AccountManager->getByUsername_fetch($_POST['username']);

if (count($accounts) == 0) {
    handleError("no account");
}

$account = $accounts[0];

if ($account->password != hash('sha256', $_POST['password'])) {
    handleError("bad password");
}

$_SESSION['account'] = $account->id;
header('Location: admin.php');
die();

?>
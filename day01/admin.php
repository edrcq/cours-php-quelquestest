<?php 
require_once "init.php";

if (isset($_SESSION['account'])) {
    $account = $AccountManager->getById($_SESSION['account']);
}
else {
    header('Location: login.php');
    die();
}

?>

Secret page <?php echo $account->username; ?>
<br />
<a href="logout.php">Logout</a>
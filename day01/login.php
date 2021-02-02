<?php 
require_once "init.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div>
        <?php 
        if (isset($_SESSION['error_message'])) {
        ?>
            <div><?php echo $_SESSION['error_message']; ?></div>
        <?php
            unset($_SESSION['error_message']);
        }
        ?>
        
        <form action="login_form.php" method="POST">
            Username:<br />
            <input type="text" name="username" /><br />
            Password:<br />
            <input type="password" name="password" /><br />
            <button type="submit">Se connecter</button>
        </form>
    </div>
    
</body>
</html>
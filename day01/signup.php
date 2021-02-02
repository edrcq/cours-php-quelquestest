<?php 
require_once "init.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <div>
        <?php 
        if (isset($_SESSION['error_message'])) {
        ?>
            <div><?php echo $_SESSION['error_message']; ?></div>
        <?php
        }
        ?>
        
        <form action="signup_form.php" method="POST">
            Username:<br />
            <input type="text" name="username" /><br />
            Password:<br />
            <input type="password" name="password" /><br />
            <button type="submit">Créer un compte</button>
        </form>
    </div>
    
</body>
</html>
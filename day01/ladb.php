<?php

try {
    $bdd = new PDO('mysql:host=localhost;port=3306;dbname=test_minishop;charset=utf8', "root", "");
}
catch (Exception $e)
{
    die('Erreur MySQL, veuillez patienter ou contactez un administrateur. <br /><br />' . $e->getMessage());
}



?>
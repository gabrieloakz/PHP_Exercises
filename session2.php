<?php

session_start();

if ($_SESSION["LOGIN"] == 1 && $_SESSION["browser"] == $_SERVER["HTTP_USER_AGENT"]) 
{
    echo "A sessãoo está ativa. <br /> " ;
}
else {
    echo "A sessão não está ativa. <br /> " ;
    echo '<a href= "login.php" > Página de login </a>';
}

session_unset();
session_destroy();
?>  
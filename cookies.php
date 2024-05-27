<?php 

    //Criar cookies

    setcookie("Minha_Cookie", "Primeira cookie em php", time() + (60 * 60 * 24 * 30), "/");

    if (isset($_COOKIE["Minha_Cookie"])) 
    {
        echo $_COOKIE["Minha_Cookie"]; 
    }
    else 
    {
        echo "Cookie não existe";
    }

    //Eliminar cookies

    // setcookie("Minha_Cookie", "", time() + (-3600), "/");

?>
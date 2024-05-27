<?php

session_start(); // start 

$con = new mysqli('localhost', 'root', 'mysql', 'gabriel_database'); // connect to database

if ($con -> errno>0) 
{
    echo "Ocorreu um eror no acesso a base de dados" . $con -> error;
    exit;
}

if($stm = $con -> prepare("SELECT * FROM utilizadores WHERE nome_utilizador = ? AND palavra_chave = ?"))
{
    $stm -> bind_param('ss', $_POST['utilizador'], md5($_POST['password']));
    $stm -> execute();

    $stm -> store_result();

    if($stm -> num_rows > 0)
    {
        $_SESSION['login'] = 1;
        $_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
        echo "Dados válidos. <br />Sessão criada com sucesso!<br />";
        echo "<a href='session2.php'>Página Seguinte</a>";
    }
    else
    {
        echo "Os dados não são válidos. Aguarde...<br />";
        header ("refresh:5; url=login.php");
    }
}
<?php

// Inicia uma sessão ou retoma uma sessão existente
session_start();

// Cria uma nova conexão com o banco de dados MySQL
$con = new mysqli('localhost', 'root', 'mysql', 'gabriel_database');

// Verifica se houve algum erro na conexão com o banco de dados
if ($con->errno > 0) {
    // Exibe uma mensagem de erro se a conexão falhar
    echo "Ocorreu um erro no acesso à base de dados: " . $con->error;
    exit; // Encerra a execução do script
}

// Prepara uma consulta SQL para selecionar usuários com base no nome de usuário e na senha fornecidos
if ($stm = $con->prepare("SELECT * FROM utilizadores WHERE nome_utilizador = ? AND palavra_chave = ?")) {
    // Associa os parâmetros da consulta com os valores fornecidos pelo usuário
    // 'ss' indica que ambos os parâmetros são strings
    $stm->bind_param('ss', $_POST['utilizador'], md5($_POST['password'])); // A senha é convertida para um hash MD5

    // Executa a consulta preparada
    $stm->execute();

    // Armazena o resultado da consulta
    $stm->store_result();

    // Verifica se a consulta retornou algum resultado (usuário encontrado)
    if ($stm->num_rows > 0) {
        // Define variáveis de sessão para indicar que o usuário está logado
        $_SESSION['login'] = 1;
        $_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT']; // Armazena o user agent do navegador

        // Exibe uma mensagem de sucesso e um link para a próxima página
        echo "Dados válidos. <br />Sessão criada com sucesso!<br />";
        echo "<a href='session2.php'>Página Seguinte</a>";
    } else {
        // Se os dados fornecidos não corresponderem a um usuário válido, exibe uma mensagem de erro
        echo "Os dados não são válidos. Aguarde...<br />";
        // Redireciona o usuário de volta para a página de login após 5 segundos
        header("refresh:5; url=login.php");
    }
}

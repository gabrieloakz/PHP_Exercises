<?php

// Inicia uma sessão ou retoma uma sessão existente
session_start();

// Verifica se a sessão está ativa e se o navegador que fez a requisição corresponde ao navegador armazenado na sessão
if ($_SESSION["LOGIN"] == 1 && $_SESSION["browser"] == $_SERVER["HTTP_USER_AGENT"]) {
    // Se a sessão estiver ativa e o navegador for o mesmo, exibe uma mensagem informando que a sessão está ativa
    echo "A sessão está ativa. <br />";
} else {
    // Se a sessão não estiver ativa ou o navegador for diferente, exibe uma mensagem informando que a sessão não está ativa
    echo "A sessão não está ativa. <br />";
    // Exibe um link para a página de login
    echo '<a href="login.php">Página de login</a>';
}

// Limpa todas as variáveis de sessão
session_unset();
// Destrói a sessão atual
session_destroy();
?>

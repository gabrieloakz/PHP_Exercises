<?php
// Dados da base de dados
$servername = "195.200.253.125";
$username ="root";
$password = "";
$dbname = "devsaebp_bd_devs";

// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("A conexão falhou: " . $conn->connect_error);
}

// Função para validar o login
function validarLogin($nome_utilizador, $palavra_passe) {
    global $conn;

    // Preparar a SQL statement para evitar SQL injection
    $stmt = $conn->prepare("SELECT palavra_passe FROM utilizadores WHERE nome_utilizador = ?");
    $stmt->bind_param("s", $nome_utilizador);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Obter a palavra passe do banco de dados
        $stmt->bind_result($hash_palavra_passe);
        $stmt->fetch();

        // Verificar se a palavra passe está correta
        if (password_verify($palavra_passe, $hash_palavra_passe)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }

    
}

// Receber os dados do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_utilizador = $_POST['nome_utilizador'];
    $palavra_passe = $_POST['palavra_passe'];

    if (validarLogin($nome_utilizador, $palavra_passe)) {
        echo "Login bem-sucedido!";
        // Redirecionar para a página inicial ou painel do usuário
        header("Location: dashboard.php");
    } else {
        echo "Nome de utilizador ou palavra-passe incorretos.";
    }
}

$conn->close();


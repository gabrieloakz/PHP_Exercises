<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Informações do Formulário</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cursos = $_POST['cursos'];
    $opcao = $_POST['opcao'];
    $observacoes = $_POST['observacoes'];

    echo "<h1>Informações do Formulário</h1>";
    echo "<p><b>Nome:</b> $nome</p>";
    echo "<p><b>Email:</b> $email</p>";
    echo "<p><b>Telefone:</b> $telefone</p>";
    echo "<p><b>Cursos de Informática:</b> $cursos</p>";
    echo "<p><b>Opção Selecionada:</b> $opcao</p>";
    echo "<p><b>Observações:</b> $observacoes</p>";
} else {
    echo "<p class='erro'>Erro: O formulário deve ser submetido via POST.</p>";
}
?>

</body>
</html>

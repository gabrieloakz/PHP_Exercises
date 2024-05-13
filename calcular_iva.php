<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $preco = isset($_POST["preco"]) ? $_POST["preco"] : 0;
    $taxaIVA = 0.23; 
    $iva = $preco * $taxaIVA;
    $total = $preco + $iva;
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Resultado do Cálculo do IVA</title>
</head>
<body>
    <h2>Resultado do Cálculo do IVA</h2>
    <div>O valor do IVA é: <?php echo number_format($iva, 2, ",", "."); ?>€</div>
    <div>O valor total é: <?php echo number_format($total, 2, ",", "."); ?>€</div>
    <button><a href="ex03.php">Voltar</a></button>
</body>
</html>
<?php
}
?>

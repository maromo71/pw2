<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Compras</title>
</head>
<body>
    <h1>Formulário de Compras</h1>
    <form action="calcula.php" method="post">
        <label for="textProduto">Nome do Produto:</label>
        <input type="text" name="textProduto" id="textProduto">
        <br>
        
        <label for="textValorCompra">Valor daa Compra: </label>
        <input type="text" name="textValorCompra" id="textValorCompra">
        <br>

        <label for="numParcelas">Quantidade de Parcelas:</label>
        <input type="number" name="numParcelas" id="numParcelas"></label>
        <br>

        <input type="submit" name="btnCalcular" value="Calcular">
    </form>
</body>
</html>
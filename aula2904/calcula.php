<?php
    function calcularVenda($valorCompra, $numParcelas)  {
        return $valorCompra / $numParcelas;
    }

    //Declarando as variáveis que virao do formulario
    $nomeProduto = $_POST['textProduto'];
    $valorCompra = $_POST['textValorCompra'];
    $numParcelas = $_POST['numParcelas'];

    //Declarar um variável que terá o resultado do cálculo
    $valorParcela = calcularVenda($valorCompra, $numParcelas);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento da Compra</title>
</head>
<body>
    <h1>Processamento da Compra</h1>
    <hr>
    <h2>Dados do Produto: <?=$nomeProduto?></h2>
    <p>Valor da compra em R$ <?=$valorCompra?></p>
    <p>Quantidade de parcelas: <?=$numParcelas?></p>
    <p>Valor da parcela: <?=$valorParcela?></p>
</body>
</html>

<?php
//calcular o imc
function calcularImc($peso, $altura){
    return $peso / ($altura * $altura);
}
//funcao que devolve o resultado do imc de acordo com a
//tabela
function statusImc($imc){
    if($imc < 18.5) return "Magreza - Peso muito baixo";
    if($imc < 24.9) return "Peso Normal";
    if($imc < 30.0) return "Sobrepeso";
    if($imc < 35.0) return "Obesidade Grau I";
    if($imc < 40.0) return "Obesidade Grau II - Alerta";
    return "Obesidade Mórbida";
}

$nome = $_POST["txtNome"];
$peso = $_POST["numPeso"];
$altura = $_POST["numAltura"];
//passando altura para metros
$altura = $altura / 100;
//chamar a funcao que retorna o imc
$imc = calcularImc($peso, $altura);
//resultado
$resultado = statusImc($imc);
?> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de Saúde</title>
</head>
<body>
    <h1>Resultado do Teste de Saúde</h1>
    <p><strong>Paciente: </strong> <?=$nome?> </p>
    <p><strong>Peso: </strong> <?=$peso?> </p>
    <p><strong>Altura: </strong> <?=$altura?></p>
    <p><strong>IMC Calculado: </strong><?=$imc?> </p>
    <p></p>
    <p><strong>Situação de Saúde: </strong> <?=$resultado?></p>
</body>
</html>

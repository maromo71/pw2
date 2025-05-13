<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo do IMC</title>
</head>
<body>
    <h1>Clínica Sem Obesidade</h1>
    <h2>Cálculo do IMC</h2>
    <form action="resolve.php" method="post">
        <label for="txtNome">Nome do Paciente: </label><br>
        <input type="text" name="txtNome" id="txtNome" required> <br><br>
        
        <label for="numPeso">Peso em Kg: </label><br>
        <input type="number" name="numPeso" id="numPeso" min="0" 
            step="0.5" max="200"><br><br>
        
        <label for="numAltura">Altura em cm: </label><br>
        <input type="number" name="numAltura" id="numAltura"
            min="0" max="250" step="0.1"><br><br>

        <input type="submit" value="Calcular">
        <input type="reset" value="Limpar">
    </form>
</body>
</html>
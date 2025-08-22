<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guilherme Lima</title>
</head>
<body>
    <h1>Calculo IMC</h1>
    <?php
    $nome = echo "Guilherme";
    $peso = 95;
    $altura = 1.8;
    
    $imc = $peso/$altura ** 2;
    echo "Nome: " . $nome "<br/>";
    echo "IMC: " . $imc;
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletim</title>
</head>
<body>
    <?php
        $aluno = "Guilherme ";
        $n1 = 8;
        $n2 = 7;
        $n3 = 4;
        $media = ($n1+$n2+$n3)/3;

        echo = "O aluno " . $aluno;
        if($media >= 7){
            echo "Está aprovado";
        }elseif($media <= 6.9 and >= 5.1){
            echo "Está de recuperação";
        }elseif($media <= 5 and >= 4.1){
            echo "Está de exame";
        }else{
            "Está reprovado";
        }
    ?>
</body>
</html>
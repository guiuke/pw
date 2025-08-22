<?php
    $nome = $_POST["cxnome"];
    $email = $_POST["cxemail"];
    $n1 = $_POST["cxn1"];
    $n2 = $_POST["cxn2"];
    $n3 = $_POST["cxn3"];
    $falta = $_POST["cxfalta"];
    $media = ($n1+$n2+$n3)/3;

    echo "Nome:" . $nome " Email:" . $email;
    echo " Sua média é " . $media;

    if($media < 4 && $falta >20){ echo "reprovado";
    }elseif($media <6 >20 ){
        echo "exame";
    }
    elseif($media >=7 && $falta <=20){
        echo "aprovado";
    }
    else echo "procurar coordenador";
?>
<?php
    if($_POST["cxnome"] != ""){
        include_once "../factory/conexao.php";
        $nome = $_POST["cxnome"];
        $idade = $_POST["cxidade"];
        $email = $_POST["cxemail"];
        $sql = "insert into tbcliente (nome,idade,email)
        values
        ('$nome','$idade','$email')";

        $query = mysqli_query($conn,$sql);
        echo "Cliente cadastrado com sucesso";

    }else{
        echo "Dados não cadastrados!";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestão</title>
</head>
<body>
<?php
        session_start();
        //isset() é uma função para saber se existe a var
        isset($email);
               
        if( isset($_SESSION['login'])==false            
        && 
        isset($_SESSION['senha'])==false);
        {
            echo "
                <script>
                    alert('Área restrita');
                    window.location.href='../index.php';
                </script>
            ";
        }
    
    ?>
    <h1>Sistema de Gestão</h1>
    <hr>
    <h2>Vendas</h2>
    <a href="menu.php">Home</a> | <a href="cadcliente.php">Cadastrar Cliente</a> | <a href="perfil.php">Perfil</a>
</body>
</html>
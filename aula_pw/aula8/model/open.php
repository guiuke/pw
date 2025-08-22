<?php

    session_start();

    $email = $_POST["cxemail"];
    $senha = $_POST["cxsenha"];
    if($email=="adm@uol.com" && $senha=="123"){
        //declaração de var do tipo sessão dentro da memória do navegador
        $_SESSION['login'] = $email;
        $_SESSION['senha'] = $senha;
        echo "
            <script>
                alert('Seja bem vindo');
                window.location.href='../view/menu.php';
            </script>
        ";

        //comando php: abrir janelas
        //header('Location:../view/menu.php');


    }else{
        unset($_SESSION['login']);
        unset($_SESSION['senha']);

        echo "
        <script>
            alert('Login e/ou senha inválido(s)');
            window.location.href='../index.php';
        </script>
        ";
    }  
?>
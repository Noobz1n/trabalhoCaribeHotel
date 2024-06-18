<?php
    session_start();
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //verifica se ta pegando os dados
        /*print_r('Email: ' . $email);
        print_r('Senha: ' . $senha);*/


        //envia para o banco 
        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);


        //print_r($sql);
        //print_r($result);
        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['email']);
            unset($_SESSION['email']);
            header('Location: login.php');
        }else{
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: semLogin.php');
        }
    }
    else {
        header('Location: login.php');
    }


?>
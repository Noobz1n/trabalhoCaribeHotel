<?php

    $dbhost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'trabalho';

    $conexao = new mysqli($dbhost, $dbUsername, $dbPassword, $dbName);


    //TESTE PARA VER SE TA FUNCIONANDO O BANCO DE DADOS
    /*if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else{
        echo "Conexao efetuada com sucesso";
    }
*/




?>
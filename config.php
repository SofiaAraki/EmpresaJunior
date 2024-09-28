<?php

    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'empresajunior';


    $conexao = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

    if ($conexao->connect_error ) {
        echo"Erro ao conectar ao banco de dados: " . $conexao->connect_error;
    }
    else{
        echo "Conexao realizada com sucesso";
    }


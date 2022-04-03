<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = 'LU89a7m2SsY.sBV]';
    $dbName = 'login-pap';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if($conexao->connect_errno) {
        echo "Erro";
    }
    else {
        echo "Conexão efetuada com sucesso!";
    }

?>
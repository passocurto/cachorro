<?php 
    // configurações para conexão com o banco de dados.
    $server   = "sql102.infinityfree.com";
    $user     = "if0_37692417";
    $password = "Farofa00";
    $database   = "if0_37692417_petcontrol";

    // Criar conexão
    $conn = new mysqli($server, $user, $password, $database);

    // Verificar conexão
    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }

?>

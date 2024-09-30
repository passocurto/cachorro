<?php 
    // configurações para conexão com o banco de dados.
    $server   = "localhost";
    $user     = "root";
    $password = "";
    $database   = "PetControl";

    // Criar conexão
    $conn = new mysqli($server, $user, $password, $database);

    // Verificar conexão
    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }

?>

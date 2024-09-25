<?php

// configurações para conexão com o banco de dados.
$server   = "localhost";
$user     = "root";
$password = "";
$database   = "loja_virtual";

// Criar conexão
$conn = new mysqli($server, $user, $password, $database);

// Verificar conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Verifica se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    if(!isset($_POST["deletar"])){
    $nome = $_POST["nome"];
    
    if(!$_POST["id"]){
      // Consulta SQL
      $sql = "INSERT INTO clientes (nome) VALUES (\"$nome\")";

      if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        header('Location: http://localhost/loja/clientes/index.php');

      }else{

        $id = $_POST["id"];

        $sql = "UPDATE clientes SET nome = '".$_POST["nome"]."' WHERE id_cliente = $id";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          header('Location: http://localhost/loja/clientes/index.php');

      }
    }else{

    
        $id = $_POST["id"];

        $sql = "DELETE FROM clientes WHERE id_cliente= $id";

        if ($conn->query($sql) === TRUE) {
            echo "Element deleted successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          header('Location: http://localhost/loja/clientes/index.php');
      }
    
}
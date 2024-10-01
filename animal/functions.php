<?php

include '../util/resources.php'; 

// Verifica se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    if(!isset($_POST["deletar"])){
    $nome = $_POST["nome"];
    $tipo = $_POST["tipo"];
    $dtNacimento = $_POST["dtNacimento"];
    

    if(!$_POST["id"]){
      // Consulta SQL
      $sql = "INSERT INTO animal (nome, tipo, dtNacimento) VALUES (\"$nome\", \"$tipo\", \"$dtNacimento\")";

      if ($conn->query($sql) === TRUE) {
          echo "New animal created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error; 
        }
        header('Location: http://localhost/ricardo/aula/cachorro/animal/');

      }else{

        $id = $_POST["id"];

        $sql = "UPDATE animal SET nome = '".$_POST["nome"]."', tipo = '".$_POST["tipo"]."', dtNacimento = '".$_POST["dtNacimento"]."' WHERE id_animal = $id";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          header('Location: http://localhost/ricardo/aula/cachorro/animal/');

      }
    }else{
  
        $id = $_POST["id"];

        $sql = "DELETE FROM animal WHERE id_animal = $id";

        if ($conn->query($sql) === TRUE) {
            echo "Element deleted successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          header('Location: http://localhost/ricardo/aula/cachorro/animal/');
      }
    
}
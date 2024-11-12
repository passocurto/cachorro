<?php

include '../util/resources.php'; 

// Verifica se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    if(!isset($_POST["deletar"])){
      $nome = $_POST["nome"];
      $cpf = $_POST["cpf"];
      $dtNascimento = $_POST["dtNascimento"];
      
    
    if(!$_POST["id"]){
      // Consulta SQL
      $sql = "INSERT INTO tutor (nome, cpf, dtNascimento) VALUES (\"$nome\", \"$cpf\", \"$dtNascimento\")";

      if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        header('Location: http://aula.kesug.com/tutor/index.php');

      }else{

        $id = $_POST["id"];

        $sql = "UPDATE tutor SET nome = '".$_POST["nome"]."', telefone = '".$_POST["telefone"]."' , email = '".$_POST["email"]."' , endereco = '".$_POST["endereco"]."'  WHERE id_tutor = $id";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          header('Location: http://localhost/tutor/index.php');

      }
      
    }else{

    
        $id = $_POST["id"];

        $sql = "DELETE FROM tutor WHERE id_tutor = $id";

        if ($conn->query($sql) === TRUE) {
            echo "Element deleted successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          header('Location: http://aula.kesug.com/tutor/index.php');
      }
    
}
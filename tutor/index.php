<?php

include '../util/resources.php'; 

// Consulta SQL
$sql = "SELECT * FROM tutor";

// Executar a consulta
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="col col-lg-2">
    <?php include '../sidebar.php'; ?>
  </div>
<div class="container">
    <div class="row">
    <div class="col col-6">
      <a href="create.php" class="btn btn-primary">Cadastrar</a>
      <table class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Nascimento</th>
            <th>Editar</th>
            <th>Excluir</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $table ='';
            while($tutor = $result->fetch_assoc()) {
              $table .= '<tr>';
                  $table .= "<td>{$tutor["id_tutor"]}</td>";
                  $table .= "<td>{$tutor["nome"]}</td>";
                  $table .= "<td>{$tutor["cpf"]}</td>";
                  $table .= "<td>{$tutor["dtNascimento"]}</td>";
                  $table .= "<td><a href=\"editar.php?id={$tutor["id_tutor"]}\" class=\"btn btn-warning\">Editar</a></td>
              <td><a href=\"deletar.php?id={$tutor["id_tutor"]}\" type=\"button\" class=\"btn btn-danger\">Excluir</button></td>";
              $table .= '</tr>';
            }
            echo $table;
        ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</body>
</html>

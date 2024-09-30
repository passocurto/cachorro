<?php

include '../util/resources.php'; 

// Consulta SQL
$sql = "SELECT * FROM animal";

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

<div class="row">
<a href="create.php" class="btn btn-primary">Cadastrar</a>        
<div class="container">
    
<div class="col col-6">

  <table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>nome</th>
        <th>tipo</th>
        <th>Editar</th>
        <th>Excluir</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $table ='';
        while($animais = $result->fetch_assoc()) {
          $table .= '<tr>';
              $table .= "<td>{$animais["id_animal"]}</td>";
              $table .= "<td>{$animais["nome"]}</td>";
              $table .= "<td>{$animais["tipo"]}</td>";
              $table .= "<td><a href=\"editar.php?id={$animais["id_animal"]}\" class=\"btn btn-warning\">Editar</a></td>
          <td><a href=\"deletar.php?id={$animais["id_animal"]}\" type=\"button\" class=\"btn btn-danger\">Excluir</button></td>";
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

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

// Consulta SQL
$sql = "SELECT * FROM clientes";

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
      <p>Crud Inicial:</p>            
      <a href="create.php" class="btn btn-primary">Cadastrar</a>
      <table class="table">
        <thead>
          <tr>
            <th>id</th>
            <th>nome</th>
            <th>telefone</th>
            <th>E-mail</th>
            <th>Endereço</th>
            <th>Editar</th>
            <th>Excluir</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $table ='';
            while($client = $result->fetch_assoc()) {
              $table .= '<tr>';
                  $table .= "<td>{$client["id_cliente"]}</td>";
                  $table .= "<td>{$client["nome"]}</td>";
                  $table .= "<td>{$client["telefone"]}</td>";
                  $table .= "<td>{$client["email"]}</td>";
                  $table .= "<td>{$client["endereco"]}</td>";
                  $table .= "<td><a href=\"editar.php?id={$client["id_cliente"]}\" class=\"btn btn-warning\">Editar</a></td>
              <td><a href=\"deletar.php?id={$client["id_cliente"]}\" type=\"button\" class=\"btn btn-danger\">Excluir</button></td>";
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
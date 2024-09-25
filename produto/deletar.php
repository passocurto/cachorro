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
$id = $_GET['id'];
// Consulta SQL
$sql = "SELECT * FROM produtos WHERE id_produto = $id";

// Executar a consulta
$result = $conn->query($sql);

$cidade = $result->fetch_assoc();
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

<div class="container">
<form action="functions.php" method="POST">
  <div class="form-group">
    <label for="Nome">Nome do produto</label>
    <input type="text" class="form-control" readonly value="<?php echo  $cidade['id_produto'] ?>" name="id" id="id" >
    <input type="text" class="form-control" readonly value="<?php echo  $cidade['nome'] ?>" name="nome" id="nome" >
    <input type="text" class="hide" name="deletar" id="deletar"  value="deletar">
  </div>
  
  <button type="submit" class="btn btn-primary">Deletar</button>
  <a href="index.php" class="btn btn-primary">Voltar</a>
</form>
</div>

</body>
</html>

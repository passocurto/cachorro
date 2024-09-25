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
$sql = "SELECT * FROM clientes WHERE id_cliente = $id";

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
    <label for="id">ID</label>
    <input type="text" class="form-control" readonly value="<?php echo  $cidade['id_cliente'] ?>" name="id" id="id" >
    <label for="nome">Nome</label>
    <input type="text" class="form-control" value="<?php echo  $cidade['nome'] ?>" name="nome" id="nome" >
    <label for="telefone">Telefone</label>
    <input type="text" class="form-control" value="<?php echo  $cidade['telefone'] ?>" name="telefone" id="telefone" >
    <label for="email">Email</label>
    <input type="email" class="form-control" value="<?php echo  $cidade['email'] ?>" name="email" id="email" >
    <label for="endereco">Endereço</label>
    <input type="text" class="form-control" value="<?php echo  $cidade['endereco'] ?>" name="endereco" id="endereco" >
    
  </div>
  
  <button type="submit" class="btn btn-primary">Cadastrar</button>
  <a href="index.php" class="btn btn-primary">Voltar</a>
</form>
</div>

</body>
</html>

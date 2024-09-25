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
$resultCliente = $conn->query($sql);


// Consulta SQL
$sql = "SELECT * FROM produtos";

// Executar a consulta
$resultProdutos = $conn->query($sql);

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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container">
<form action="functions.php" method="POST">
  <div class="form-group">
    <label for="Nome">Faça seu pedido</label>
    <select class="form-select" aria-label="Default select example">
      <?php  while($client = $resultCliente->fetch_assoc()) {?>
        <option value="<?php echo $client["id_cliente"] ?>"><?php echo $client["nome"] ?></option>
      <?php } ?>
    </select>
  </div>

  <div class="input-group mb-3">
  <select class="form-select" aria-label="Default select example">
    <?php  while($client = $resultProdutos->fetch_assoc()) {?>
        <option value="<?php echo $client["id_produto"] ?>"><?php echo $client["nome"] ?></option>
    <?php } ?>
    </select>
    <span style="margin:0 6px 0 6px"> Quantidade </span>
    <input type="number" class="form-control" placeholder="Quantidade" aria-label="Quantidade">
    <span style="margin:0 6px 0 6px"><button type="button" class="btn btn-dark">adicionar ao pedido</button></span>
  </div>

  <div> 

    </div>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Cliente</th>
      <th scope="col">Produtos</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Preço</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
      

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
      <th><button type="button" class="btn btn-primary">Editar</button><th>
      <th><button type="button" class="btn btn-danger">Excluir</button><th> 
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
      <th><button type="button" class="btn btn-primary">Editar</button><th>
      <th><button type="button" class="btn btn-danger">Excluir</button><th> 
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
      <th><button type="button" class="btn btn-primary">Editar</button><th>
      <th><button type="button" class="btn btn-danger">Excluir</button><th> 
    </tr>
    </table>
  <button type="submit" class="btn btn-primary">Registrar Pedido</button>
  <a href="index.php" class="btn btn-primary">Cancelar Pedido</a>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

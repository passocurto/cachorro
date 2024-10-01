<?php

include '../util/resources.php'; 


$id = $_GET['id'];
// Consulta SQL
$sql = "SELECT * FROM animal WHERE id_animal = $id";

// Executar a consulta
$result = $conn->query($sql);

$animal = $result->fetch_assoc();

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
    <label for="Nome">Nome da categoria</label>
    <input type="text" class="form-control" readonly value="<?php echo  $animal['id_animal'] ?>" name="id" id="id" >
    <input type="text" class="form-control" value="<?php echo  $animal['nome'] ?>" name="nome" id="nome" >
    <input type="text" class="form-control" value="<?php echo  $animal['tipo'] ?>" name="tipo" id="tipo" >
    <input type="date" class="form-control" value="<?php echo  $animal['dtNacimento'] ?>" name="dtNacimento" id="dtNacimento" >
    
  </div>
  
  <button type="submit" class="btn btn-primary">Cadastrar</button>
  <a href="index.php" class="btn btn-primary">Voltar</a>
</form>
</div>

</body>
</html>

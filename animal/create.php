<?php

  include '../util/resources.php'; 

  // Consulta SQL
  $sql = "SELECT * FROM animal";

  // Executar a consulta
  $resultanimal = $conn->query($sql);

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
    <label for="Nome">Nome do animal</label>
    <input type="text" class="form-control" value="" name="nome" id="nome" >
  </div>

  <div class="form-group">
    <label for="tipo">Tipo</label>
    <select class="form-control form-select" aria-label="Default select example" name="tipo" id="tipo">
      <option value="Cachorro">Cachorro</option>
      <option value="Gato">Gato</option>
    </select>
  </div>

  <div class="form-group">
    <label for="dtNacimento">Data de Nacimento</label>
    <input type="date" class="form-control" value="" name="dtNacimento" id="dtNacimento" >
  </div>
  
  <button type="submit" class="btn btn-primary">Cadastrar</button>
  <a href="index.php" class="btn btn-primary">Voltar</a>

</form>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

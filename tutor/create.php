

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
    <label for="Nome">Nome do Tutor</label>
    <input type="text" class="form-control" value="" name="nome" id="nome" >
  </div>
  <div class="form-group">
    <label for="Nome">CPF</label>
    <input type="text" class="form-control" value="" name="cpf" id="cpf" >
  </div>
  <div class="form-group">
    <label for="Nome">Data de Nascimento</label>
    <input type="date" class="form-control" value="" name="dtNascimento" id="dtNascimento" >
  </div>
  
  <button type="submit" class="btn btn-primary">Cadastrar</button>
  <a href="index.php" class="btn btn-primary">Voltar</a>
</form>
</div>

</body>
</html>

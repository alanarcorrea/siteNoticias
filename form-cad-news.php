<?php
require_once "conexao.php"; 
?>

<!DOCTYPE html>
<html>
	  <!-- <script src="ajax.js"></script>-->
<head>
<head>
  <title>Notícias</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
    <h3> Cadastro de Notícias </h3>
    
<form class="form-horizontal" method="post" enctype="multipart/form-data" action="cadastrar.php">
        <div class="form-group">
            <label class="control-label col-sm-1" for="title">Título: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title"
                name="title" required>
            </div>       
        </div>

        <div class="form-group">
            <label class="control-label col-sm-1"  for="description">Descrição: </label>
            <div class="col-sm-10">
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>               
        </div>

        <div class="form-group">
            <label class="control-label col-sm-1"  for="photo">Foto:</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="photo"
                   name="photo">
            </div>       
        </div>

        <div class="form-group">
            <div class="col-sm-offset-1 col-sm-10">
                <input type="submit" name="cad" value="Cadastrar">
                <a href="newsletter.php">Voltar</a>
            </div>
        </div>        
 </form>
</div>

</body>
</html>
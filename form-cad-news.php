<?php
require_once "conexao.php"; 
?>

<!DOCTYPE html>
<html>
	  <!-- <script src="ajax.js"></script>-->
<head>
	<title>Notícias</title>
</head>
<body>
<div class="container">
    <h3> Cadastro de Notícias </h3>
    
<form method="post" enctype="multipart/form-data" action="cadastrar.php">
        <div class="form-group">
            <label for="title">Título: </label>
            <input type="text" class="form-control" id="title"
                   name="title" required>
        </div>

        <div class="form-group">
            <label for="description">Descrição: </label>
            <textarea class="form-control" id="description" name="description" required></textarea>           
        </div>

        <div class="form-group">
            <label for="photo">Foto:</label>
            <input type="file" class="form-control" id="photo"
                   name="photo">
        </div>

        <input type="submit" name="cad" value="Cadastrar">
        <a href="newsletter.php">Voltar</a>
 </form>
</div>

</body>
</html>
	<?php
require_once "conexao.php"; 
?>

<!DOCTYPE html>
<html>
<head>
  <title>E-mails</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h1> Envio de E-mail </h1>
    
    <hr>
    
    <form class="form-horizontal" method="post" action="send-email.php" enctype="multipart/form-data">
        <h3> Clientes </h3>
        <?php  
            $sql = "SELECT * FROM clients";
            $records = mysqli_query($conn, $sql);
            $contador = 1;
            while($clients=mysqli_fetch_assoc($records)) {  ?>
                <div class="checkbox">
                    <p>
                        <input type="checkbox" class="email" name="emails[]" value="<?= $clients['email'] ?>">
                        <span><?= $clients['email'] ?></span>
                    </p>
                </div>

                <?php $contador += 1; ?> 
        <?php } ?>  

        <h3> Notícias</h3>

        <?php  
            $sql = "SELECT * FROM news";
            $records = mysqli_query($conn, $sql);
            while($news=mysqli_fetch_assoc($records)) {  ?>
                <div class="checkbox">
                    <p>
                        <input type="checkbox" class="new" name="news[]" value="<?= $news['title'] ?>">
                        <span><?= $news['title'] ?></span>
                    </p>
                </div> 
        <?php } ?>  

        	<h3>Dados para envio de email: </h3>

        	<div class="form-group">
            	<label class="control-label col-sm-1" for="emailSender">Email do Remetente: </label>
            	<div class="col-sm-10">
                	<input type="text" class="form-control" id="emailSender" name="emailSender" required>    
            	</div>       
        	</div>

        	<div class="form-group">
            	<label class="control-label col-sm-1" for="passSender">Senha Email Remetente: </label>
            	<div class="col-sm-10">
                	<input type="text" class="form-control" id="passSender" name="passSender" required>    
            	</div>       
        	</div>
        

        <button type="submit" name ='btn' id='btn' class="btn btn-default">Enviar</button>
        <a href="newsletter.php">Voltar</a>
 </form>
</div>


    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>



	<?php
require_once "conexao.php"; 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Emails</title>
</head>
<body>
<div class="container">
    <h1> Envio de E-mail </h1>
    
    <hr>
    
    <form method="post" action="send-email.php" enctype="multipart/form-data">
        <h3> Clientes </h3>
        <?php  
            $sql = "SELECT * FROM clients";
            $records = mysqli_query($conn, $sql);
            $contador = 1;
            while($clients=mysqli_fetch_assoc($records)) {  ?>
                <div class="form-group">
                    <p>
                        <input type="checkbox" class="email" name="<?= 'email' . $contador ?>" value="on">
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
                <div class="form-group">
                    <p>
                        <input type="checkbox" class="new" name="news[]" value="<?= $news['title'] ?>">
                        <span><?= $news['title'] ?></span>
                    </p>
                </div>
        <?php } ?>  

        

        <button type="submit" name ='btn' id='btn' class="btn btn-default">Enviar</button>
 </form>
</div>


    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>



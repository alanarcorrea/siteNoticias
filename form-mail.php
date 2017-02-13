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
    
    <form method="post" action="send-email.php">
        <h3> Clientes </h3>
        <?php  
            $sql = "SELECT * FROM clients";
            $records = mysqli_query($conn, $sql);
            while($clients=mysqli_fetch_assoc($records)) {  ?>
                <div class="form-group">
                    <p>
                        <input type="checkbox" name="email[]" value="on"><?= $clients['email'] ?>
                    </p>
                </div>
        <?php } ?>  

        <h3> Notícias</h3>

        <?php  
            $sql = "SELECT * FROM news";
            $records = mysqli_query($conn, $sql);
            while($news=mysqli_fetch_assoc($records)) {  ?>
                <div class="form-group">
                    <p>
                        <input type="checkbox" name="title[]" value="on"><?= $news['title'] ?>
                    </p>
                </div>
        <?php } ?>  

        

        <button type="submit" name ='btn' id='btn' class="btn btn-default">Enviar</button>
 </form>
</div>




</body>
</html>



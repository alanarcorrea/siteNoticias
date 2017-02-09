<?php

include_once ("conexao.php");

$title = $_POST['title'];
$description = $_POST['description'];
$photo = $_POST['photo'];

echo "$title  -  $description  - $photo";

$query1 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM NEWS WHERE TITLE = '$title'"));

if(empty($photo)){
	$photo = "NULL";
}
if($query1 == 1){
	echo "<script>alert('Título desta notícia já existe!); history.back();</script>";
}else{
	$query2 = "INSERT INTO news (title, photo, description) VALUES ('$title', '$photo', '$description')";
	mysqli_query($conn,$query2 );
	echo "<script>alert('Notícia cadastrada com sucesso!);</script>";
}

?>

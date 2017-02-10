<?php

include_once ("conexao.php");

$title = $_POST['title'];
$description = $_POST['description'];
$photo = $_POST['photo'];

echo "$title  -  $description  - $photo";

if(empty($photo)){
	$photo = "NULL";
}else{

	$folder = '/uploads';
	$name = 'name';
	$tmp = 'temp';

	$extensao = @end(explode('.', $name));
	$novoNome = rand().".$extensao";

	if(move_uploaded_file($tmp, $folder.'/'.$name)){
		echo "Upload realizado com sucesso";
	}else{
		echo "Upload fail";
	}
}




$query1 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM NEWS WHERE TITLE = '$title'"));

if($query1 == 1){
	echo "<script>alert('Título desta notícia já existe!); </script>";
}else{
	$query2 = "INSERT INTO news (title, photo, description) VALUES ('$title', '$photo', '$description')";
	mysqli_query($conn,$query2 );
	echo "<script>alert('Notícia cadastrada com sucesso!);</script>";
}

?>

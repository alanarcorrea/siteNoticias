
<?php

 include_once ("conexao.php");

$title = $_POST['title'];
$description = $_POST['description'];
$photo = $_FILES[ 'photo' ][ 'name' ];


if ( isset( $photo ) && $_FILES[ 'photo' ][ 'error' ] == 0 ) {
    $arquivo_tmp = $_FILES[ 'photo' ][ 'tmp_name' ];
    $extensao = pathinfo ( $photo, PATHINFO_EXTENSION );
    $extensao = strtolower ( $extensao );

    if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
        $novoNome = uniqid ( time () ) . ".$extensao";
        $destino = 'uploads/' . $novoNome;
 
        if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
            $query1 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM NEWS WHERE TITLE = '$title'"));

			if($query1 == 1){
				echo "<script>alert('Título desta notícia já existe!); </script>";
			}else{
				$query2 = "INSERT INTO news (title, photo, description) VALUES ('$title', '$novoNome', '$description')";
				mysqli_query($conn,$query2 );
				echo "<script>alert('Notícia cadastrada com sucesso!);</script>";
			}
        }
        else
            echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';
    }
    else
        echo 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png"<br />';
}
else{
	$photo = "NULL";
	$query1 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM NEWS WHERE TITLE = '$title'"));
	
		if($query1 == 1){
			echo "<script>alert('Título desta notícia já existe!); </script>";
		}else{
			$query2 = "INSERT INTO news (title, photo, description) VALUES ('$title', '$photo', '$description')";
			mysqli_query($conn,$query2 );
			echo "<script>alert('Notícia cadastrada com sucesso!);</script>";
		}
};

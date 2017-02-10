<?php

$host = "localhost";
$user = "root";
$password = "";
$bd = "newsletter";

$conn = mysqli_connect($host, $user, $password, $bd);

if(!$conn){
	die("Falha na conexão: " . mysqli_connect_error());
}else{
	echo "Conexao realizada com sucesso";
}

?>
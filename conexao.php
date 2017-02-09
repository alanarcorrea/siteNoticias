<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "newsletter";

$conn = mysqli_connect($host, $usuario, $senha, $bd);

if(!$conn){
	die("Falha na conexão: " . mysqli_connect_error());
}else{
	echo "Conexao realizada com sucesso";
}

?>
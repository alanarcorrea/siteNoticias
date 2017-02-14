<?php

require_once "conexao.php"; 
require 'phpmailer/PHPMailerAutoload.php';

$countNews = sizeof($_POST['news']);
$countEmails = sizeof($_POST['emails']);

$mail = new PHPMailer();
$mail -> setLanguage ('pt');

$host = 'smtp.gmail.com';
$username = $_POST['emailSender'];
$password = $_POST['passSender'];
$port = 587;
$secure = 'tls';

$from = $username;
$fromName = "Newsletter - Comparte";


$mail->isSMTP();
$mail->Host = $host;
$mail->SMTPAuth = true;
$mail->Username = $username;
$mail->Password = $password;
$mail->Post = $port;
$mail->SMTPSecure = $secure;

$mail->From = $from;
$mail->FromName = $fromName;
//$mail->addReplyTo($from, $fromName);

$mail->isHTML(true);
$mail->CharSet = 'utf-8';
$mail->WordWrap = 70;
$mail->Subject = 'Teste Programador - Alana';
$mail->AltBody = 'Newsletter';



$body = "<html><h1> Newsletter - Comparte </h1>";

for($j=0; $j < $countEmails; $j++){
	$email = $_POST['emails'][$j];
	$sql = "SELECT * FROM clients WHERE email='$email'";
	$records = mysqli_query($conn, $sql);
	$clients=mysqli_fetch_assoc($records);
	//$body .= '<h3> Caro Sr(a) ' . $clients['name'] . '</h3>'; 
	for($i=0; $i < $countNews; $i++){
		$title = $_POST['news'][$i] ;
		$sql = "SELECT * FROM news WHERE title='$title'";
		$records = mysqli_query($conn, $sql);
		$news=mysqli_fetch_assoc($records);
		$body .= '<h3>'.$news['title'].'</h3>';
		$body .= '<h3>'.$news['description'].'</h3>';
	}
	$mail ->addAddress($clients['email'], $clients['name']);
	$mail->Body = nl2br($body);
	$send = $mail->Send();
	$body = "<h1> Newsletter - Comparte </h1>";
	if(!$send){
		echo 'Erro: '.$mail->ErrorInfo;
	}
}

if($send){
	echo 'Emails enviados com sucesso !';
}
?>
<a href="newsletter.php">Voltar</a>
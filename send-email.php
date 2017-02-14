<?php


$teste = array($_POST['news[]']);
echo $teste;







/*require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer();
$mail -> setLanguage ('pt');

$host = 'smtp.gmail.com';
$username = 'alanarcorrea@gmail.com';
$password = 'qu3s4d1ll4s';
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
$mail->addReplyTo($from, $fromName);

foreach ($email as $ml) {
	$teste .= $ml['email'];
}

echo $teste;

$mail ->addAddress($teste, 'Alana');

$mail->isHTML(true);
$mail->CharSet = 'utf-8';
$mail->WordWrap = 70;

$body = "<h3> Newsletter - Comparte </h3>";
$body .= "<p>Nome do cliente:<strong>  </strong> </p>";
$body .= "<p>Email do cliente: <strong>  </strong></p>";
$body .= "<p>Mensagem do cliente: <strong>  </strong> </p>";

$mail->Subject = 'Newsletter - Comparte';
$mail->Body = nl2br($body);
$mail->AltBody = 'Teste';



$send = $mail->Send();
if($send)
	echo 'Email enviado com sucesso';
else
	echo 'Erro: '.$mail->ErrorInfo;
*/
?>

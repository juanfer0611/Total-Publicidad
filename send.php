<?php 

require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$to = "totalpublicidad@hotmail.com"; //mail de envio

//recolectar datos
$nombre = $_POST['nombre'];
$email = $_POST['mail'];
$asunto = $_POST['asunto'];
$mensaje = nl2br($_POST['mensaje']);

echo $nombre.'<br>'.$email.'<br>'.$asunto.'<br>'.$mensaje;


if($nombre == "" || $email == "" || $asunto == "" || $mensaje == ""):
	echo '<div class="alert alert-danger">Todos los campos son requeridos para el envio</div>';
else:

	$mail->From = $email;
	$mail->addAddress($to);
	$mail->Subject = $asunto;
	$mail->isHtml(true);
	$mail->Body = '<strong>'.$nombre.'</strong> le ha contactado desde su web, y le ha enviado el siguiente mensaje: <br><p>'.$mensaje.'</p>';

	$mail->CharSet = 'UTF-8';
	$mail->send();

endif;


 ?>

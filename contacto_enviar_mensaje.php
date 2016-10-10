<?php

// Preparamos la infomación
$nombre   = trim($_POST['nombre']);
$email    = trim($_POST['email']);
$telefono = trim($_POST['telefono']);
$mensaje  = trim($_POST['mensaje']);
$copia    = trim($_POST['copia']);

//$email_ecocreamos = "info@ecocreamos.com";
$email_ecocreamos = "manieto@gmail.com";
$email_from   = "info@ecocreamos.com";
$email_replay = ($email!=FALSE)?$email:$email_ecocreamos;

// Enviamos el correo
if ($nombre!=FALSE && $mensaje!=FALSE)
{
	
	$to      = $email_ecocreamos;
	$subject = "Web Ecocreamos - Nuevo mensaje";
	$message = "- Nombre: "   . $nombre . "\r\n" .
						 "- E-mail: "   . $email . "\r\n" .
						 "- Telefono: " . $telefono . "\r\n" . 
						 "- Mensaje: "  . "\r\n" . $mensaje . "\r\n";
	$headers = "From: "         . $email_from . "\r\n" .
			       "Reply-To: "     . $email_replay . "\r\n" .
			       "X-Mailer: PHP/" . \phpversion();

	$enviado = mail($to, $subject, $message, $headers);
	
	// Si lo solicita, le enviamos una copia
	if ($enviado && $copia=="si" && $email!=FALSE)	{
		$subject2 = "Web Ecocreamos - Mensaje enviado";
		$headers2 = "From: "         . $email_ecocreamos . "\r\n" .
			          "Reply-To: "     . $email_ecocreamos . "\r\n" .
			          "X-Mailer: PHP/" . \phpversion();
		$enviado2 = mail($email, $subject2, $message, $headers2);
	}
}
?>
$nombre: <?=$nombre ?>
$email: <?=$email ?>
$telefono: <?=$telefono ?>
$mensaje: <?=$mensaje ?>
$copia: <?=$copia ?>
$email_ecocreamos: <?=$email_ecocreamos ?>
$email_replay: <?=$email_replay ?>
Enviado: <?=$enviado ?>
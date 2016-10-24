<?php

// Preparamos la infomación
$nombre   = trim($_POST['nombre']);
$email    = trim($_POST['email']);
$telefono = trim($_POST['telefono']);
$mensaje  = trim($_POST['mensaje']);
$copia    = trim($_POST['copia']);

//$email_ecocreamos = "manieto@gmail.com"; // E-mail de prueba
$email_ecocreamos = "info@ecocreamos.com";
$email_from   = "info@ecocreamos.com";
$email_replay = ($email!=FALSE)?$email:$email_ecocreamos;

// Enviamos el correo
if ($nombre!=FALSE && $mensaje!=FALSE)
{
	
	$to      = $email_ecocreamos;
	$subject = "Web EcoCreamos - Nuevo mensaje";
	$message = "- Nombre: "   . $nombre . "\r\n" .
						 "- E-mail: "   . $email . "\r\n" .
						 "- Telefono: " . $telefono . "\r\n" . 
						 "- Mensaje: "  . "\r\n" . $mensaje . "\r\n";
	$headers = "From: "         . $email_from . "\r\n" .
			       "Reply-To: "     . $email_replay . "\r\n" .
			       "X-Mailer: PHP/" . \phpversion();

	$enviado1 = mail($to, $subject, $message, $headers);
	
	// Si lo solicita, le enviamos una copia
	$enviado = "";
	if ($enviado1 && $copia=="si" && $email!=FALSE)	{
		$subject2 = "Web EcoCreamos - Mensaje enviado";
		$headers2 = "From: "         . $email_ecocreamos . "\r\n" .
			          "Reply-To: "     . $email_ecocreamos . "\r\n" .
			          "X-Mailer: PHP/" . \phpversion();
		$enviado2 = mail($email, $subject2, $message, $headers2);
	}
}
?>
<html>
	<body>
		$nombre: <?=$nombre ?><br/>
		$email: <?=$email ?><br/>
		$telefono: <?=$telefono ?><br/>
		$mensaje: <?=$mensaje ?><br/>
		$copia: <?=$copia ?><br/>
		$email_ecocreamos: <?=$email_ecocreamos ?><br/>
		$email_replay: <?=$email_replay ?><br/>
		Enviado 1: <?=$enviado1 ?><br/>
		Enviado 2: <?=$enviado2 ?><br/>
		<script>
			parent.mailCallback("<?=$enviado1 ?>", "<?=$enviado2 ?>");
		</script>
	</body>
</html>
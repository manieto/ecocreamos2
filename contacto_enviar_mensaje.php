<html>
<body>
<?php

function console_log( $data ){
	echo '<script>';
	echo 'console.log(" json_encode( $data ) ")';
	echo '</script>';
}

// Validamos la petición con recaptcha v3
define("RECAPTCHA_V3_SECRET_KEY", '6LePGIkdAAAAAIXNNmVK893lF7GxnUewb8jzNW8Y');
$token    = trim($_POST['token']);
$action   = "submit";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_V3_SECRET_KEY, 'response' => $token)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$arrResponse = json_decode($response, true);
$peticionValida = $arrResponse["success"] == '1' && $arrResponse["action"] == $action && $arrResponse["score"] >= 0.5;

/*echo 'action: '. $action . '<br/>';
echo 'response: '. $response . '<br/>';
echo 'success: ' . $arrResponse["success"] . '<br/>';
echo 'action: ' . $arrResponse["action"] . '<br/>';
echo 'score: ' . $arrResponse["score"] . '<br/>';
echo 'peticionValida: ' . $peticionValida . '<br/>';*/

if ($peticionValida) {
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
<?php } else { ?>
	Spam submission
	<script>
		parent.mailCallback("9", "0");
	</script>
<?php } ?>

</body>
</html>
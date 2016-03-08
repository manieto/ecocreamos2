<?php
  /* Usage:
		$textid = "component/item";
	  $lang = "es"; -- or "en"
	  <?php include "text.php";?>
	 */
	 
	TODO: leer todo el json al principio de la página (en header.php), y crear función php para hacer un echo "al vuelo"

  $json = file_get_contents("text.json");
	echo $json[$textid][$lang];
?>
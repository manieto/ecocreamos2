
<!-- Se llama así
<!--?php
				$galid = 1234;
				include "gallery_notext.php";?>
-->

<?php
  echo "Galería número: " . $galid;
	$files = scandir(".");
	$fileslength = count($files);
	for($x = 0; $x < $fileslength; $x++) {
			echo $files[$x];
			echo "<br>";
	}
?>
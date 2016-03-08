<?php
  /* Usage:
		$galid = "component";
	  $lang = "es"; -- or "en"
	  <?php include "gallery.php";?>
	 */
  $json = file_get_contents("images.json");
	echo $json;
  echo "<br>";
  echo "<br>";
	$info = json_decode($json, true);
	foreach ($info["images"] as $image) {
		echo "<img src=\"" . $info["basedir"] . $image["src"] . "\" alt=\"". $image["alt"] . "\"/>";
		echo "<br>";
	}
?>

<?php
  echo "<br>";
  echo "<br>";
  echo "Galería número: " . $galid;
	$files = scandir(".");
	$fileslength = count($files);
	for ($x = 0; $x < $fileslength; $x++) {
			echo $files[$x];
			echo "<br>";
	}
?>
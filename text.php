<?php
  function text_readJson() {
		$json = file_get_contents("text.json");
		return json_decode($json, true);
	}
	$texts = text_readJson();
	//console_log($texts);
?>

<?php
	function text($id = "default") {
		global $texts;
		global $lang;
		return $texts[$id][$lang];
	}
?>
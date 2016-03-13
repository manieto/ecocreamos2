<?php
/** Log por consola del navegador web. */
function console_log($data) {
  echo '<script>';
  echo 'console.log('. json_encode($data) .')';
  echo '</script>';
}

function includePlugin($plugins, $id) {
	return (strpos($plugins, $id)!==false);
}
				
?>
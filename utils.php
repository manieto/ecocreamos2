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


<?php
  function datasheet_readJson() {
		$json = file_get_contents("datasheet.json");
		return json_decode($json, true);
	}
	$datasheets = datasheet_readJson();
?>

<?php
	function datasheet_displayCollection($id = "default") {
		global $datasheets;
		$collection = $datasheets[$id];
?>
		<!-- News v1 Gray -->
		<div class="container content" style="padding-top: 0px;">
			<div class="row news-v1">
<?php
		foreach ($collection as $datasheet) {
			$img_src = $datasheets["basedir"] . /* $id . "/" . */ $datasheet["src"];
			$img_alt = $datasheet["alt"];
			$title       = $datasheet["title"];
			$description = $datasheet["description"];
			$extra1 = $datasheet["extra1"];
			$extra2 = $datasheet["extra2"];
			$extra3 = $datasheet["extra3"];
?>
				<div class="col-sm-6 col-md-4 md-margin-bottom-40" style="padding-bottom: 20px;">
					<div class="news-v1-in">
						<img class="img-responsive" src="<?=$img_src ?>" alt="<?=$img_alt ?>" style="height: 250px;">
						<h3><a href="#"><?=$title ?></a></h3>
						<p><?=$description ?></p>
						<ul class="list-inline news-v1-info">
							<li><span><?=$extra1 ?></span></li>
							<?php if (isset($extra2)) { ?><li>|</li>
							<li><i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?=$extra2 ?></li><?php } ?>
							<?php if (isset($extra3)) { ?><li>|</li>
							<?=$extra3 ?></li><?php } ?>
						</ul>
					</div>
				</div>
<?php
		}
?>
			</div>
		</div>
		<!-- End News v1 Gray -->
<?php
	}
?>
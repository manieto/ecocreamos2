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
	function datasheet_displayCollection($id = "default", $class_container = "padding-bottom-20") {
		global $datasheets;
		$collection = $datasheets[$id];
?>
		<!-- News v1 Gray -->
		<div class="container content padding-top-5 <?=$class_container ?>">
			<div class="row sm-row-flex news-v1">
<?php
		foreach ($collection as $datasheet) {
			$img_src = $datasheets["basedir"] . /* $id . "/" . */ $datasheet["src"];
			$img_alt = $datasheet["alt"];
			$title   = $datasheet["title"];
			$link    = $datasheet["link"];
			$description  = $datasheet["description"];
			$description2 = $datasheet["description2"];
			$extra1 = $datasheet["extra1"];
			$extra2 = $datasheet["extra2"];
			$extra3 = $datasheet["extra3"];
?>
				<div class="col-sm-6 col-md-4 md-margin-bottom-20 padding-bottom-20">
					<div class="news-v1-in">
						<?php if (isset($link )) { ?><a href="<?=$link ?>" target="_blank"><?php } ?><img class="img-responsive" src="<?=$img_src ?>" alt="<?=$img_alt ?>"><?php if (isset($link )) { ?></a><?php } ?>
						<h3><?php if (isset($link )) { ?><a href="<?=$link ?>" target="_blank"><?php } ?><?=$title ?><?php if (isset($link )) { ?></a><?php } ?></h3>
						<?php if (isset($description )) { ?><p><?=$description ?></p><?php } ?>
						<?php if (isset($description2)) { ?><p class="text-align-left"><?=$description2 ?></p><?php } ?>
						<?php if (isset($extra1) or isset($extra2) or isset($extra3)) { ?>
						<ul class="list-inline news-v1-info">
							<li><span><?=$extra1 ?></span></li>
							<?php if (isset($extra2)) { ?><li>|</li>
							<li><i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?=$extra2 ?></li><?php } ?>
							<?php if (isset($extra3)) { ?><li>|</li>
							<li><?=$extra3 ?></li><?php } ?>
						</ul>
						<?php } else { ?>
						<div class="padding-top-5"></div>
						<?php } ?>
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
<?php
	function accordion_begin($parent, $id, $title, $expanded) {
?>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle<?=($expanded)?"":" collapsed" ?>" data-toggle="collapse" data-parent="#accordion-<?=$parent ?>" href="#collapse-<?=$id ?>"><?=$title ?></a>
								</h4>
							</div>
							<div id="collapse-<?=$id ?>" class="panel-collapse collapse<?=($expanded)?" in":"" ?> ">
								<div class="panel-body">
									<div class="row">
										<div class="col-md-12">
<?php
	}
?>
<?php
	function accordion_end() {
?>
										</div>
									</div>
								</div>
							</div>
						</div>
<?php
	}
?>
<?php
	function product_table_row($id, $col1, $col2, $col3, $description, $link) {
?>
									<tr>
										<?php if (isset($col1 )) { ?><td onclick="$('#desc<?=$id ?>').toggleClass('hidden');" class="hidden-xs"><?=$col1 ?></td><?php } ?>
										<?php if (isset($col2 )) { ?><td onclick="$('#desc<?=$id ?>').toggleClass('hidden');" class="text-align-center"><?=$col2 ?></td><?php } ?>
										<?php if (isset($col3 )) { ?><td onclick="$('#desc<?=$id ?>').toggleClass('hidden');"><?=$col3 ?></td><?php } ?>
										<?php if (isset($description) or isset($link )) { ?><td>
											<?php if (isset($description )) { ?><a onclick="$('#desc<?=$id ?>').toggleClass('hidden');" class="btn-u btn-u-xs hidden-xs">Descripción</a><?php } ?>
											<?php if (isset($link        )) { ?>&nbsp;<a href="<?=$link ?>" class="btn-u btn-u-xs" target="_blank">Ficha técnica</a><?php } ?>
										</td><?php } ?>
									</tr>
									<?php if (isset($description )) { ?><tr id="desc<?=$id ?>" class="hidden" onclick="$('#desc<?=$id ?>').toggleClass('hidden');">
										<td class="hidden-xs"></td>
										<td></td>
										<td colspan="2" class="text-justify">
											<p><?=$description ?></p>
										</td>
									</tr><?php } ?>
<?php
	}
?>
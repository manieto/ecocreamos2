<?php
  function image_readJson() {
		$json = file_get_contents("image.json");
		return json_decode($json, true);
	}
	$images = image_readJson();
?>


<?php
  /**
	 * Genera el HTML para todos los portafolios definidos en JSON.
	 * 
	 * @param $idDefault la galería seleccionada por defecto
	 */
	function image_displayAllPortfolios($idDefault = "") {
		global $images;
		$portfolio_list = $images["portfolio_list"];
?>
		<!--=== Cube-Portfdlio ===-->
		<div class="cube-portfolio container margin-bottom-60">
			<div class="content-xs">
				<div id="filters-container" class="cbp-l-filters-text content-xs">
<?php
		foreach ($portfolio_list as $portfolio) {
			$activo = ($idDefault===$portfolio["id"]);
			$clasePortfolio = ($activo)?"cbp-filter-item-active":"";
?>
					<div data-filter=".<?=$portfolio["id"] ?>" class="<?=$clasePortfolio ?> cbp-filter-item"> <?=$portfolio["nombre"] ?> </div> |
<?php
		}
?>
				</div><!--/end Filters Container-->
			</div>
			<div id="grid-container" class="cbp-l-grid-agency">
<?php
			foreach ($portfolio_list as $portfolio) {
				$activo = ($idDefault===$portfolio["id"]);
				image_displayPortfolio($portfolio["id"], $activo, FALSE);
			}
?>
			</div><!--/end Grid Container-->
		</div>
		<!--=== End Cube-Portfdlio ===-->
<?php
	}
?>

<?php
  /**
	 * Genera el HTML para un portafolio.
	 * 
	 * @param $id el código de la galería de imágenes
	 * @param $includeParentDiv debe ser false cuando se llama desde image_displayAllPortfolio()
	 */
	function image_displayPortfolio($id = "default", $display = TRUE, $includeParentDiv = TRUE) {
		global $images;
		$portfolio = $images["portfolios"][$id];
?>
<?php if ($includeParentDiv) { ?>
		<!--=== Cube-Portfdlio ===-->
		<div class="cube-portfolio container margin-bottom-60">
			<div id="grid-container" class="cbp-l-grid-agency">
<?php } ?>
<?php
		foreach ($portfolio as $image) {
			$src = $images["basedir"] . /* $id . "/" . */ $image["src"];
			$alt = $image["alt"];
			$desc = $image["desc"];
			$claseDisplay = ($display)?"":"cbp-item-off";
?>
				<div class="cbp-item <?=$id ?> <?=$claseDisplay ?>">
					<div class="cbp-caption margin-bottom-20">
						<div class="cbp-caption-defaultWrap">
							<a href="<?=$src ?>" class="cbp-lightbox" data-title="<?=$alt ?>">
							<img src="<?=$src ?>" alt="<?=$alt ?>">
							</a>
						</div>
					</div>
					<div class="cbp-title-dark">
						<div class="cbp-l-grid-agency-title"><?=$alt ?></div>
						<div class="cbp-l-grid-agency-desc"><?=$desc ?></div>
					</div>
				</div>
<?php
		}
?>
<?php
		if ($includeParentDiv) { ?>
			</div><!--/end Grid Container-->
		</div>
		<!--=== End Cube-Portfdlio ===-->
<?php
		}
	}
?>
<?php
  // Transiciones 2D y 3D en http://www.docs.purethemes.net/sukces/layerslider/examples/transitiongallery.html
	function image_displaySlider($id = "default") {
		global $images;
		$slider = $images["sliders"][$id];
?>
<!--=== Slider ===-->
<div id="layerslider" style="width: 100%; height: 400px;">
<?php
		foreach ($slider as $image) {
			$src = $images["basedir"] . /* $id . "/" . */ $image["src"];
			$alt = $image["alt"];
?>
	<div class="ls-slide" style="slidedelay: 5000; slidedirection: fade; transition2d: 5; ">
		<img src="<?=$src ?>" class="ls-bg" alt="<?=$alt ?>" />
	</div>
<?php
		}
?>
</div>
<!--=== End Slider ===-->
<?php
	}
?>

<?php
	function image_displayCarousel($id = "default") {
		global $images;
		$carousel = $images["carousels"][$id];
?>
					<!-- Carousel -->
					<div class="carousel slide carousel-v1" id="myCarousel">
						<div class="carousel-inner">

<?php
		$active = " active";
		foreach ($carousel as $image) {
			$src = $images["basedir"] . /* $id . "/" . */ $image["src"];
			$alt = $image["alt"];
?>
							<div class="item<?=$active ?>">
								<img alt="<?=$alt ?>" src="<?=$src ?>">
								<?php if ($alt) { ?><div class="carousel-caption"><p><?=$alt ?></p></div><?php } ?>
							</div>
<?php
			$active = "";
		}
?>
						</div>
						<div class="carousel-arrow">
							<a data-slide="prev" href="#myCarousel" class="left carousel-control">
								<i class="fa fa-angle-left"></i>
							</a>
							<a data-slide="next" href="#myCarousel" class="right carousel-control">
								<i class="fa fa-angle-right"></i>
							</a>
						</div>
					</div>
					<!-- End Carousel -->
<?php
	}
?>
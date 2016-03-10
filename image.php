<?php
  function image_readJson() {
		$json = file_get_contents("image.json");
		return json_decode($json, true);
	}
	$images = image_readJson();
?>

<?php
	function image_displayPortfolio($id = "default") {
		global $images;
		$portfolio = $images["portfolios"][$id];
?>
		<!--=== Cube-Portfdlio ===-->
		<div class="cube-portfolio container margin-bottom-60">
			<div id="grid-container" class="cbp-l-grid-agency">
<?php
		foreach ($portfolio as $image) {
			$src = $images["basedir"] . /* $id . "/" . */ $image["src"];
			$alt = $image["alt"];
			$desc = $image["desc"];
?>
				<div class="cbp-item xxxxxxxx">
					<div class="cbp-caption margin-bottom-20">
						<div class="cbp-caption-defaultWrap">
							<img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>">
						</div>
						<div class="cbp-caption-activeWrap">
							<div class="cbp-l-caption-alignCenter">
								<div class="cbp-l-caption-body">
									<ul class="link-captions no-bottom-space">
										<li><a href="portfolio_single_item.html"><i class="rounded-x fa fa-link"></i></a></li>
										<li><a href="assets/img/main/img3.jpg" class="cbp-lightbox" data-title="Design Object"><i class="rounded-x fa fa-search"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="cbp-title-dark">
						<div class="cbp-l-grid-agency-title"><?php echo $alt; ?></div>
						<div class="cbp-l-grid-agency-desc"><?php echo $desc; ?></div>
					</div>
				</div>
<?php
		}
?>
			</div><!--/end Grid Container-->
		</div>
		<!--=== End Cube-Portfdlio ===-->
<?php
	}
?>
<?php
	function image_displaySlider($id = "default") {
		global $images;
		$slider = $images["sliders"][$id];
?>
<!--=== Slider ===-->
<div class="tp-banner-container">
	<div class="tp-banner">
		<ul>
<?php
		foreach ($slider as $image) {
			$src = $images["basedir"] . /* $id . "/" . */ $image["src"];
			$alt = $image["alt"];
?>
			<li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="<?php echo $alt; ?>">
				<img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
			</li>
<?php
		}
?>
		</ul>
		<div class="tp-bannertimer tp-bottom"></div>
	</div>
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
				<div class="col-md-7">
					<div class="carousel slide carousel-v1" id="myCarousel">
						<div class="carousel-inner">

<?php
		$active = " active";
		foreach ($carousel as $image) {
			$src = $images["basedir"] . /* $id . "/" . */ $image["src"];
			$alt = $image["alt"];
?>
							<div class="item<?php echo $active ?>">
								<img alt="<?php echo $alt; ?>" src="<?php echo $src; ?>">
								<div class="carousel-caption">
									<p><?php echo $alt; ?></p>
								</div>
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
				</div>
				<!-- End Carousel -->
<?php
	}
?>

<?php
  /*echo "<br>";
  echo "<br>";
  echo "Galería número: " . $galid;
	$files = scandir(".");
	$fileslength = count($files);
	for ($x = 0; $x < $fileslength; $x++) {
			echo $files[$x];
			echo "<br>";
	}*/
?>
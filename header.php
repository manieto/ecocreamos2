<?php include "utils.php"; ?>
<?php include "config.php"; ?>
<?php include "image.php"; ?>
<?php include "text.php"; ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
	<head>
		<title><?=$title ?></title>

		<!-- Meta -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?=$description ?>">
		<meta name="author" content="Eduardo Ramos">

		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">

		<!-- Web Fonts -->
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext">

		<!-- CSS Global Compulsory -->
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/style.css">

		<!-- CSS Header and Footer -->
		<link rel="stylesheet" href="assets/css/header-default.css">
		<link rel="stylesheet" href="assets/css/footer-default.css">

		<!-- CSS Implementing Plugins -->
		<link rel="stylesheet" href="assets/plugins/animate.css">
		<link rel="stylesheet" href="assets/plugins/fancybox/source/jquery.fancybox.css">
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/plugins/image-hover/css/img-hover.css">
		<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
		
		<link rel="stylesheet" href="assets/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css">
		<link rel="stylesheet" href="assets/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css">

		<?php if (includePlugin($plugins, "slider")) { ?>
		<link rel="stylesheet" href="assets/plugins/layer-slider/layerslider/css/layerslider.css" type="text/css" media="screen">
		<?php } ?>
		<?php if (includePlugin($plugins, "carousel")) { ?><link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.carousel.css"><?php } ?>
		<?php if (includePlugin($plugins, "forms")) { ?>
		<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
		<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
		<!--[if lt IE 9]><link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms-ie8.css"><![endif]-->
		<?php } ?>

		<!-- CSS Pages Style -->
		<link rel="stylesheet" href="assets/css/pages/page_404_error6.css">

		<!-- CSS Theme -->
		<link rel="stylesheet" href="assets/css/ecocreamos.css" id="style_color">
		<link rel="stylesheet" href="assets/css/dark.css">

		<!-- CSS Customization -->
		<link rel="stylesheet" href="assets/css/custom.css">
	</head>

	<body>
		<div class="wrapper">
			<!--=== Header ===-->
			<div class="header">
				<div class="container">
					<!-- Logo -->
					<span class="logo">
						<a href="index.php" style="text-decoration: none;">
							<img src="assets/img/logos/ecocreamos_pequenyo.png" alt="Ecocreamos"/>
							<span class="ecocreamos-logo hide-xxs hide-md" style="font-size: 120%;">EcoCreamos</span>
							<span class="ecocreamos-logo hide-xs hide-sm hide-lg" style="font-size: 120%;">&nbsp;</span>
						</a>
					</span>
					<!-- End Logo -->

					<!-- Toggle get grouped for better mobile display -->
					<button type="button" class="navbar-toggle" style="margin-left: 20px;" data-toggle="collapse" data-target=".navbar-responsive-collapse">
						<span class="sr-only">Cambiar navegación</span>
						<span class="fa fa-bars"></span>
					</button>
					<!-- End Toggle -->

					<!-- Topbar -->
					<div class="topbar">
						<ul class="loginbar pull-right" style="text-align: left;">
							<!--<li class="hoverSelector">
								<i class="fa fa-globe"></i>
								<a>Idioma</a>
								<ul class="languages hoverSelectorBlock">
									<li class="active">
										<a href="#">Español <i class="fa fa-check"></i></a>
									</li>
									<li><a href="#">English</a></li>
								</ul>
							</li>
							<li class="topbar-devider"></li>-->
							<li><a href="quienes_somos.php">Quiénes somos</a></li>
							<li class="topbar-devider"></li>
							<li><a href="contacto.php">Contacto</a></li>
						</ul>
					</div>
					<!-- End Topbar -->
				</div><!--/end container-->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-responsive-collapse">
					<div class="container">
						<ul class="nav navbar-nav">
							<li class="dropdown-none <?php if ($menu=="promocion_ecologica") { echo "active"; } ?>"><a href="promocion_ecologica.php"><?= text("menu/promocion") ?></a></li>
							<li class="dropdown-none <?php if ($menu=="bioconstruccion"    ) { echo "active"; } ?>"><a href="bioconstruccion.php"><?= text("menu/bioconstruccion") ?></a></li>
							<li class="dropdown-none <?php if ($menu=="passivhaus_bio"     ) { echo "active"; } ?>"><a href="passivhaus_bio.php"><?= text("menu/passivhaus_bio") ?></a></li>
							<li class="dropdown-none <?php if ($menu=="servicios"          ) { echo "active"; } ?>"><a href="servicios.php"><?= text("menu/servicios") ?></a></li>
							<li class="dropdown      <?php if ($menu=="materiales"         ) { echo "active"; } ?>">
								<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><?= text("menu/materiales") ?></a>
								<ul class="dropdown-menu">
									<li <?php if ($submenu=="lana"        ) { echo "class=\"active\""; } ?>><a href="material_lana.php">Lana</a></li>
									<li <?php if ($submenu=="corcho_negro") { echo "class=\"active\""; } ?>><a href="material_corcho_negro.php">Corcho negro</a></li>
									<li <?php if ($submenu=="ecoclay"     ) { echo "class=\"active\""; } ?>><a href="material_ecoclay.php">ecoclay</a></li>
									<li <?php if ($submenu=="pro_clima"   ) { echo "class=\"active\""; } ?>><a href="material_pro_clima.php">pro clima</a></li>
									<li <?php if ($submenu=="gutex"       ) { echo "class=\"active\""; } ?>><a href="material_gutex.php">Gutex</a></li>
									<li <?php if ($submenu=="naturhaus"   ) { echo "class=\"active\""; } ?>><a href="material_naturhaus.php">Naturhaus</a></li>
								</ul>
							</li>
							<li class="dropdown      <?php if ($menu=="productos"          ) { echo "active"; } ?>">
								<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><?= text("menu/productos") ?></a>
								<ul class="dropdown-menu">
									<li <?php if ($submenu=="biomasa"  ) { echo "class=\"active\""; } ?>><a href="producto_biomasa.php">Biomasa</a></li>
									<li <?php if ($submenu=="agua_viva") { echo "class=\"active\""; } ?>><a href="producto_agua_viva.php">Agua Viva</a></li>
									<li <?php if ($submenu=="pranan"   ) { echo "class=\"active\""; } ?>><a href="producto_pranan.php">Pranan</a></li>
								</ul>
							</li>
							<li class="dropdown      <?php if ($menu=="noticias"           ) { echo "active"; } ?>">
								<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><?= text("menu/noticias") ?></a>
								<ul class="dropdown-menu">
									<li <?php if ($submenu=="noticias" ) { echo "class=\"active\""; } ?>><a href="noticias.php">Noticias y eventos</a></li>
									<li <?php if ($submenu=="articulos") { echo "class=\"active\""; } ?>><a href="articulos.php">Artículos en prensa</a></li>
								</ul>
							</li>
						</ul>
					</div><!--/end container-->
				</div><!--/navbar-collapse-->
			</div>
			<!--=== End Header ===-->
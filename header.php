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
		<!--<link rel="stylesheet" href="assets/plugins/bxslider/jquery.bxslider.css">-->
		<link rel="stylesheet" href="assets/plugins/fancybox/source/jquery.fancybox.css">
		<!--<link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">-->
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/plugins/image-hover/css/img-hover.css">
		<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
		<link rel="stylesheet" href="assets/plugins/revolution-slider/rs-plugin/css/settings.css" type="text/css" media="screen">
		
		<link rel="stylesheet" href="assets/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css">
		<link rel="stylesheet" href="assets/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css">

		<!--[if lt IE 9]><link rel="stylesheet" href="assets/plugins/revolution-slider/rs-plugin/css/settings-ie8.css" type="text/css" media="screen"><![endif]-->
		
		<link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
		<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
		<!--[if lt IE 9]><link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms-ie8.css"><![endif]-->

		<!-- CSS Pages Style -->
		<link rel="stylesheet" href="assets/css/pages/page_one.css">
		<link rel="stylesheet" href="assets/css/pages/page_contact.css">

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
					<a class="logo" href="index.php">
						<img src="assets/img/ecocreamos_logo.jpg" style="height:30px;" alt="Ecocreamos"/>
						<img src="assets/img/ecocreamos_nombre.gif" style="height:25px;" alt="Ecocreamos"/>
					</a>
					<!-- End Logo -->

					<!-- Topbar -->
					<div class="topbar">
						<ul class="loginbar pull-right">
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

					<!-- Toggle get grouped for better mobile display -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="fa fa-bars"></span>
					</button>
					<!-- End Toggle -->
				</div><!--/end container-->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
					<div class="container">
						<ul class="nav navbar-nav">
							<!-- Home -->
							<!--<li class="active">
								<a href="javascript:void(0);">
									Inicio
								</a>
							</li>-->
							<!-- End Home -->

							<!-- Proyectos -->
							<!--<li class="dropdown mega-menu-fullwidth">
								<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
									<?= text("menu/promociones") ?>
								</a>
								<ul class="dropdown-menu">
									<li>
										<div class="mega-menu-content disable-icons">
											<div class="container">
												<div class="row equal-height">
													<div class="col-md-4 equal-height-in">
														<ul class="list-unstyled equal-height-list">
															<li><h3>Proyecto Tierra</h3></li>
															<li><h3><img src="assets/img/proyecto_tierra.jpg" alt="Proyecto Tierra" height="200"/></h3></li>
														</ul>
													</div>
													<div class="col-md-4 equal-height-in">
														<ul class="list-unstyled equal-height-list">
															<li><h3>Proyecto Tierra</h3></li>
															<li><h3><img src="assets/img/proyecto_tierra.jpg" alt="Proyecto Tierra" height="200"/></h3></li>
														</ul>
													</div>
													<div class="col-md-4 equal-height-in">
														<ul class="list-unstyled equal-height-list">
															<li><h3>Otras obras</h3></li>
															<li><a href="shortcode_icon_general.html"><img src="assets/img/proyecto_tierra.jpg" height="50" /> Casa rural en Llucmajor</a></li>
															<li><a href="shortcode_icon_fa.html"><img src="assets/img/proyecto_tierra.jpg" height="50" /> Rehabilitación en Sineu</a></li>
															<li><a href="shortcode_icon_line.html"><img src="assets/img/proyecto_tierra.jpg" height="50" /> Chalet en Calvià</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</li>-->
							<!-- End Proyectos -->

							<!-- Servicios -->
							<!--<li class="dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
									Bioconstrucción
								</a>
								<ul class="dropdown-menu">
									<li class="dropdown-submenu">
										<a href="javascript:void(0);">Blog Large Image</a>
										<ul class="dropdown-menu">
											<li><a href="blog_large_right_sidebar1.html">Right Sidebar</a></li>
											<li><a href="blog_large_left_sidebar1.html">Left Sidebar</a></li>
											<li><a href="blog_large_full_width1.html">Full Width</a></li>
										</ul>
									</li>
									<li class="dropdown-submenu">
										<a href="javascript:void(0);">Blog Simple Pages</a>
										<ul class="dropdown-menu">
											<li><a href="blog_large_right_sidebar.html">Right Sidebar Large</a></li>
											<li><a href="blog_medium_right_sidebar.html">Right Sidebar Medium</a></li>
											<li><a href="blog_large_full_width.html">Full Width</a></li>
											<li><a href="blog_large_right_sidebar_item.html">Right Sidebar Item</a></li>
											<li><a href="blog_large_full_width_item.html">Full Width Item</a></li>
										</ul>
									</li>
									<li><a href="blog_masonry_3col.html">Masonry Grid Blog</a></li>
									<li><a href="blog_timeline.html">Blog Timeline</a></li>
								</ul>
							</li>-->
							<!-- End Blog -->

							<li class="dropdown-none <?php if ($menu=="promocion_ecologica") { echo "active"; } ?>"><a href="promocion_ecologica.php"><?= text("menu/promocion") ?></a></li>
							<li class="dropdown-none <?php if ($menu=="bioconstruccion"    ) { echo "active"; } ?>"><a href="bioconstruccion.php"><?= text("menu/bioconstruccion") ?></a></li>
							<li class="dropdown-none <?php if ($menu=="passivhaus_bio"     ) { echo "active"; } ?>"><a href="passivhaus_bio.php"><?= text("menu/passivhaus_bio") ?></a></li>
							<li class="dropdown-none <?php if ($menu=="servicios"          ) { echo "active"; } ?>"><a href="servicios.php"><?= text("menu/servicios") ?></a></li>
							<li class="dropdown-none <?php if ($menu=="materiales"         ) { echo "active"; } ?>"><a href="materiales.php"><?= text("menu/materiales") ?></a></li>
							<li class="dropdown-none <?php if ($menu=="productos"          ) { echo "active"; } ?>"><a href="productos.php"><?= text("menu/productos") ?></a></li>
							<li class="dropdown-none <?php if ($menu=="noticias"           ) { echo "active"; } ?>"><a href="noticias.php"><?= text("menu/noticias") ?></a></li>
						</ul>
					</div><!--/end container-->
				</div><!--/navbar-collapse-->
			</div>
			<!--=== End Header ===-->
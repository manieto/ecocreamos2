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
		<meta name="keywords" content="<?=keywords ?>">
		<meta name="author" content="Eduardo Ramos">
		<meta property="og:image" content="http://ecocreamos.com/assets/img/logos/ecocreamos_pequenyo.png"/>

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
		
		<?php   if (includePlugin($plugins, "slider")) { ?>
			<link rel="stylesheet" href="assets/plugins/layer-slider/layerslider/css/layerslider.css">
		<?php } if (includePlugin($plugins, "maps")) { ?>
		<?php } if (includePlugin($plugins, "carousel")) { ?>
			<link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
		<?php } if (includePlugin($plugins, "forms")) { ?>
			<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
			<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
			<!--[if lt IE 9]><link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms-ie8.css"><![endif]-->
		<?php } if (includePlugin($plugins, "portfolio")) { ?>
			<link rel="stylesheet" href="assets/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css">
			<link rel="stylesheet" href="assets/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css">
		<?php } ?>

		<!-- CSS Theme -->
		<link rel="stylesheet" href="assets/css/ecocreamos.css" id="style_color">
		<link rel="stylesheet" href="assets/css/dark.css">

		<!-- CSS Customization -->
		<link rel="stylesheet" href="assets/css/custom.css">

		<!-- CSS de aviso de cookies -->
		<link rel="stylesheet" href="assets/css/gdpr-cookie-notice.css">
		
		<!-- JS de Google Analytics y quizás Recaptcha -->
		<script>
			var grecaptcha = undefined;
			document.addEventListener('gdprCookiesEnabled', function (e) {
				if (e.detail.analytics) {
					console.log("Cookies aceptadas");
					(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
					(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
					m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
					})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

					ga('create', 'UA-73796847-1', 'auto');
					ga('send', 'pageview', document.location.pathname);

					<?php if (includePlugin($plugins, "recaptcha")) { ?>
						var script = document.createElement('script');
						script.src = "https://www.google.com/recaptcha/api.js?render=6LePGIkdAAAAAExzljz6sYowt61N8nV6edmj857I";
						script.async = true;
						document.head.appendChild(script);
					<?php } ?>
				}
			});
		</script>
	</head>

	<body>
		<div class="wrapper">
			<!--=== Header ===-->
			<div class="header">
				<div class="container">
					<!-- Logo -->
					<span class="logo">
						<a href="index.php" style="text-decoration: none;">
							<img src="assets/img/logos/ecocreamos_pequenyo.png" alt="EcoCreamos"/>
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
					<!--<div class="topbar">
						<ul class="loginbar pull-right" style="text-align: left;">-->
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
							<!--<li><a href="quienes_somos.php">Quiénes somos</a></li>
							<li class="topbar-devider"></li>
							<li><a href="contacto.php">Contacto</a></li>-->
						<!--</ul>
					</div>-->
					<!-- End Topbar -->
				</div><!--/end container-->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-responsive-collapse">
					<div class="container">
						<ul class="nav navbar-nav">
							<li class="dropdown-none <?php if ($menu=="bioconstruccion"    ) { echo "active"; } ?>"><a href="bioconstruccion.php" alt="<?= text("menu/bioconstruccion") ?>"><?= text("menu/bioconstruccion") ?></a></li>
							<li class="dropdown-none <?php if ($menu=="passivhaus_bio"     ) { echo "active"; } ?>"><a href="passivhaus_bio.php" alt="<?= text("menu/passivhaus_bio") ?>"><?= text("menu/passivhaus_bio") ?></a></li>
							<li class="dropdown-none <?php if ($menu=="servicios"          ) { echo "active"; } ?>"><a href="servicios.php" alt="<?= text("menu/servicios") ?>"><?= text("menu/servicios") ?></a></li>
							<li class="dropdown      <?php if ($menu=="materiales"         ) { echo "active"; } ?>">
								<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><?= text("menu/materiales") ?></a>
								<ul class="dropdown-menu">
									<!--<li <?php if ($submenu=="lana"        ) { echo "class=\"active\""; } ?>><a href="material_lana.php">Lana</a></li>-->
									<li class="seccion">> Aislamiento térmico</li>
									<li <?php if ($submenu=="gutex"       ) { echo "class=\"active\""; } ?>><a href="material_gutex.php">Fibra de madera Gutex</a></li>
									<li <?php if ($submenu=="corcho_negro") { echo "class=\"active\""; } ?>><a href="material_corcho_negro.php">Corcho Amorim</a></li>
									<li <?php if ($submenu=="isoltex"  ) { echo "class=\"active\""; } ?>><a href="material_Isoltex.php">Algodón reciclado</a></li>
									<li class="seccion">> Aislamiento acústico</li>
									<li <?php if ($submenu=="wolf_panel"  ) { echo "class=\"active\""; } ?>><a href="http://www.biohaus.es/productos/aislamiento-acustico/phonestar">Panel acústico Phonestar WOLF</a></li>
									<li <?php if ($submenu=="wolf_banda"  ) { echo "class=\"active\""; } ?>><a href="http://www.biohaus.es/productos/aislamiento-acustico/phonestrip/">Banda de desacoplamiento acústico Phonestar WOLF</a></li>
									<li class="seccion">> Hermeticidad</li>
									<li <?php if ($submenu=="pro_clima"   ) { echo "class=\"active\""; } ?>><a href="material_pro_clima.php">Pro clima</a></li>
									<li class="seccion">> Morteros</li>
									<li <?php if ($submenu=="seciltek"    ) { echo "class=\"active\""; } ?>><a href="material_seciltek.php">Secil Tek</a></li>
									<li <?php if ($submenu=="naturclay"    ) { echo "class=\"active\""; } ?>><a href="material_naturclay.php">Naturclay</a></li>
									<li class="seccion">> Tratamiento para la madera</li>
									<li <?php if ($submenu=="naturhaus"   ) { echo "class=\"active\""; } ?>><a href="material_naturhaus.php">Naturhaus</a></li>
								</ul>
							</li>
							<li class="dropdown      <?php if ($menu=="productos"          ) { echo "active"; } ?>">
								<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><?= text("menu/productos") ?></a>
								<ul class="dropdown-menu">
									<li <?php if ($submenu=="biomasa"  ) { echo "class=\"active\""; } ?>><a href="producto_biomasa.php">Biomasa</a></li>
									<li <?php if ($submenu=="agua_viva") { echo "class=\"active\""; } ?>><a href="producto_agua_viva.php">Agua Viva</a></li>
									<li <?php if ($submenu=="pranan"   ) { echo "class=\"active\""; } ?>><a href="producto_pranan.php">Pranan</a></li>
									<li <?php if ($submenu=="amorim_wise"   ) { echo "class=\"active\""; } ?>><a href="producto_amorim_wise.php">Amorim Wise</a></li>
									<li <?php if ($submenu=="wicanders"   ) { echo "class=\"active\""; } ?>><a href="producto_wicanders.php">Wicanders</a></li>
								</ul>
							</li>
							<li class="dropdown      <?php if ($menu=="noticias"           ) { echo "active"; } ?>">
								<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" alt="<?= text("menu/noticias") ?>"><?= text("menu/noticias") ?></a>
								<ul class="dropdown-menu">
									<li <?php if ($submenu=="noticias" ) { echo "class=\"active\""; } ?>><a href="noticias.php" alt="Noticias y eventos">Noticias y eventos</a></li>
									<li <?php if ($submenu=="articulos") { echo "class=\"active\""; } ?>><a href="articulos.php" alt="Artículos en prensa">Artículos en prensa</a></li>
								</ul>
							</li>
							<li class="dropdown-none <?php if ($menu=="contacto"           ) { echo "active"; } ?>"><a href="contacto.php" alt="<?= text("menu/contacto") ?>"><?= text("menu/contacto") ?></a></li>
						</ul>
					</div><!--/end container-->
				</div><!--/navbar-collapse-->
			</div>
			<!--=== End Header ===-->

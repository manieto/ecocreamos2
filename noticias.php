<?php $title       = "Ecocreamos - Noticias"; ?>
<?php $description = "Noticias de..."; ?>
<?php $menu        = "noticias"; ?>
<?php $submenu     = "noticias"; ?>
<?php include "header.php";?>

		<!--=== Breadcrumbs v1 ===-->
		<div class="breadcrumbs-v1"
				 style="background: rgba(0, 0, 0, 0) url('assets/img/cabeceras/noticias.jpg') no-repeat scroll center center / cover ;">
			<div class="container padding-left-30">
				<div class="row">
					<div>
						<h1>Noticias</h1>
					</div>
				</div>
			</div>
		</div>
		<!--=== End Breadcrumbs v1 ===-->

		<!-- News v3 Alternative -->
		<div class="container content">
			<div class="row">
				<div class="col-md-6 sm-margin-bottom-20">
					<img class="img-responsive" src="assets/img/noticias/proyecto_tierra2.jpg" alt="">
				</div>
				<div class="col-md-6 col-lg-5 news-v3">
					<div class="news-v3-in-sm no-padding">
						<ul class="list-inline posted-info">
							<li>Llucmajor</li>
							<li>Octubre de 2016</li>
						</ul>
						<h2><a href="#">Primera Certificación de edificio <em>Passivhaus Premium</em> construida en tierra a nivel nacional e internacional</a></h2>
						<p><span class="ecocreamos-logo-sm">EcoCreamos</span> se honra en comunicar que el <em>Proyecto Tierra</em> ha obtenido la primera Certificación de España <strong><em>Passivhaus Premium</em></strong>, siendo, a su vez, la primera vivienda unifamiliar aislada certificada a nivel internacional <strong><em>Passivhaus Premium</em></strong> construida con tierra, certificado emitido por el <a href="http://www.passivehouse.com/" target="_blank">Instituto Passivhaus alemán</a>.</p>
						<p>
							<a href="noticia_primer_passivhaus_premium_tierra_internacional.php" class="btn-u btn-u-large">Noticia completa</a>
							<a href="passivhaus_bio.php" class="btn-u btn-u-large">Ficha del proyecto</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- End News v3 Alternative -->

		<!-- News v3 Alternative -->
		<div class="container content">
			<div class="row">
				<div class="col-md-6 sm-margin-bottom-20">
					<img class="img-responsive" src="assets/img/noticias/proyecto_tierra1.jpg" alt="">
				</div>
				<div class="col-md-6 col-lg-5 news-v3">
					<div class="news-v3-in-sm no-padding">
						<ul class="list-inline posted-info">
							<li>Llucmajor</li>
							<li>Diciembre de 2015</li>
						</ul>
						<h2><a href="#">Primera Certificación de edificio <em>Passivhaus</em> de las Illes Balears</a></h2>
						<p><span class="ecocreamos-logo-sm">EcoCreamos</span> se honra en comunicar que el <em>Proyecto Tierra</em> ha obtenido la primera Certificación de edificio <strong><em>Passivhaus</em></strong> de las Illes Balears. Además de los más estrictos controles sobre eficiencia energética y aislamiento propios de los edificios de consumo casi nulo, <em>Proyecto Tierra</em> es un proyecto realizado con criterios de bioconstrucción, sostenible y cuidado del medio ambiente. Siendo así, que ha sido la primera vivienda Certificada, realizada con BTC (bloque de tierra compactada), con tierra del mismo solar que se ha construido en España.</p>
						<p>
							<a href="noticia_primer_passivhaus_illes_balears.php" class="btn-u btn-u-large">Noticia completa</a>
							<a href="passivhaus_bio.php" class="btn-u btn-u-large">Ficha del proyecto</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- End News v3 Alternative -->

	<?php datasheet_displayCollection("noticias", "padding-bottom-40"); ?>

<?php include "footer.php";?>
<?php $title       = "Ecocreamos - Noticias"; ?>
<?php $description = "Noticias de..."; ?>
<?php $menu        = "noticias"; ?>
<?php $submenu     = "noticias"; ?>
<?php include "header.php";?>

		<!--=== Breadcrumbs v1 ===-->
		<div class="breadcrumbs-v1">
			<div class="container">
				<h1>Eventos y noticias</h1>
			</div>
		</div>
		<!--=== End Breadcrumbs v1 ===-->

		<!-- News v3 Alternative -->
		<div class="container content">
			<div class="row">
				<div class="col-md-6 sm-margin-bottom-20">
					<img class="img-responsive" src="assets/img/proyecto_tierra.jpg" alt="">
				</div>
				<div class="col-md-6 col-lg-5 news-v3">
					<div class="news-v3-in-sm no-padding">
						<ul class="list-inline posted-info">
							<li>Llucmajor</li>
							<li>Diciembre de 2015</li>
						</ul>
						<h2><a href="#">Primera Certificación de edificio PASSIVHAUS de las Illes Balears</a></h2>
						<p><span class="ecocreamos-logo">EcoCreamos</span> se honra en comunicar que el <em>Proyecto Tierra</em> ha obtenido la primera Certificación de edificio PASSIVHAUS de las Illes Balears. Además de los más estrictos controles sobre eficiencia energética y aislamiento propios de los edificios de consumo casi nulo, <em>Proyecto Tierra</em> es un proyecto realizado con criterios de bioconstrucción, sostenible y cuidado del medio ambiente. Siendo así, que ha sido la primera vivienda Certificada, realizada con BTC (bloque de tierra compactada), con tierra del mismo solar que se ha construido en España.</p>
						<p>
							<a href="noticia_primer_passivhaus_illes_balears.php" class="btn-u btn-u-large">Leer noticia completa</a>
							<a href="proyecto_tierra.php" class="btn-u btn-u-large">Ver ficha del proyecto</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- End News v3 Alternative -->

	<?php datasheet_displayCollection("noticias", "padding-bottom-40"); ?>

<?php include "footer.php";?>
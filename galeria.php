<?php $title       = "Ecocreamos - Galería de imágenes"; ?>
<?php $description = "Galería de imágenes"; ?>
<?php $menu        = "fotos"; ?>
<?php $submenu     = "fotos"; ?>
<?php include "header.php";?>

		<!--=== Breadcrumbs v1 ===-->
		<div class="breadcrumbs-v1"
				 style="background: rgba(0, 0, 0, 0) url('assets/img/cabeceras/galeria.jpg') no-repeat scroll center center / cover ;">
			<div class="container padding-left-30">
				<div class="row">
					<div>
						<h1>Galería de imágenes</h1>
					</div>
				</div>
			</div>
		</div>
		<!--=== End Breadcrumbs v1 ===-->

		<?php image_displayAllPortfolios("proyecto_tierra"); ?>

<?php include "footer.php";?>
<?php $title       = "EcoCreamos - Galería de imágenes"; ?>
<?php $description = "Galería de imágenes de algunos proyectos de EcoCreamos"; ?>
<?php $menu        = "galeria"; ?>
<?php $submenu     = "galeria"; ?>
<?php $plugins     = "portfolio"; ?>
<?php $idGaleria   = $_GET["id"]; ?>
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

		<?php image_displayAllPortfolios($idGaleria); ?>

<?php include "footer.php";?>
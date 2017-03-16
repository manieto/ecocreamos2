<?php $title       = "EcoCreamos - Artículos en prensa"; ?>
<?php $description = "Artículos en prensa publicados por, o en relación a, EcoCreamos"; ?>
<?php $keywords    = "EcoCreamos, Casa sana, Casa sana pasiva, Artículos"; ?>
<?php $menu        = "noticias"; ?>
<?php $submenu     = "articulos"; ?>
<?php include "header.php";?>

		<!--=== Breadcrumbs v1 ===-->
		<div class="breadcrumbs-v1"
				 style="background: rgba(0, 0, 0, 0) url('assets/img/cabeceras/articulos.jpg') no-repeat scroll center center / cover ;">
			<div class="container padding-left-30">
				<div class="row">
					<div>
						<h1>Artículos</h1>
					</div>
				</div>
			</div>
		</div>
		<!--=== End Breadcrumbs v1 ===-->
	
		<div class="container content padding-bottom-20"></div>
		
		<?php datasheet_displayCollection("articulos", "padding-bottom-40"); ?>

<?php include "footer.php";?>
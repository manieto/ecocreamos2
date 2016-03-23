<?php $title       = "Ecocreamos - Artículos en prensa"; ?>
<?php $description = "Artículos de..."; ?>
<?php $menu        = "noticias"; ?>
<?php $submenu     = "articulos"; ?>
<?php include "header.php";?>

		<!--=== Breadcrumbs v1 ===-->
		<div class="breadcrumbs-v1">
			<div class="container">
				<h1>Artículos en prensa</h1>
			</div>
		</div>
		<!--=== End Breadcrumbs v1 ===-->
	
		<div class="container content padding-bottom-20"></div>
		
		<?php datasheet_displayCollection("articulos", "padding-bottom-40"); ?>

<?php include "footer.php";?>
<?php $title       = "EcoCreamos - Materiales - Gutex"; ?>
<?php $description = "Productos de Gutex"; ?>
<?php $keywords    = "EcoCreamos, Casa sana, Casa sana pasiva, Gutex"; ?>
<?php $menu        = "materiales"; ?>
<?php $submenu     = "gutex"; ?>
<?php include "header.php";?>

		<!--=== Breadcrumbs v1 ===-->
		<div class="breadcrumbs-v1"
				 style="background: rgba(0, 0, 0, 0) url('assets/img/cabeceras/material_gutex.jpg') no-repeat scroll center center / cover ;">
			<div class="container">
				<div class="row">
					<div class="col-xs-10 col-md-offset-1">
						<h1>Gutex</h1>
					</div>
				</div>
			</div>
		</div>
		<!--=== End Breadcrumbs v1 ===-->
		
		<div class="container content">
			<div class="row">
				<div class="col-md-7 padding-left-30 padding-right-30 padding-bottom-20">
					<p><span class="ecocreamos-logo-sm">EcoCreamos</span> es distribuidor exclusivo de los productos <a href="http://gutex-espana.eu/" target="_blank">Gutex</a> en las Illes Balears.</p>
					<p>Los tableros de fibra de madera alemanes <em>Gutex</em> responden a las mayores exigencias en materia de aislamiento: es ecológico y económico en todas sus aplicaciones. </p>
					<p>Sus ventajas en el campo de la física de la construcción dan como resultado un agradable clima interior: la estructura porosa de sus fibras, favorece la difusión de vapor; los tableros "respiran", evitan el efecto de pared fría y regulan la humedad. Gracias a su estructura de poros abiertos son capaces de absorber las ondas sonoras. Del mismo modo, también mejoran considerablemente la amortiguación del ruido de impacto.</p>
					<p>Su excelente protección frente al calor estival y el frío invernal distingue a los tableros de fibra de madera <em>Gutex</em> de los demás aislantes. Su inercia térmica (capacidad de absorción de calor) es la más alta de todos los aislantes. Los tableros de fibra de madera son totalmente reciclables y compostables, por lo que no producen residuos.</p>
					<a href="assets/pdf/material_gutex/que_es_gutex.pdf" class="btn-u btn-u-large" target="_blank">¿Qué es <em>Gutex</em>?</a>
					<a href="assets/pdf/material_gutex/GUTEX_ES_BR_Aplicacion_2015-06.pdf" class="btn-u btn-u-large" target="_blank">Catálogo y aplicaciones</a>
				</div>
				<div class="col-md-5 col-lg-offset-1 col-lg-4">
					<a href="http://gutex-espana.eu/" target="_blank"><img src="assets/img/logos/gutex.png" class="img-responsive padding-bottom-20" alt="Gutex" /></a>
					<img src="assets/img/materiales/gutex_interior.jpg" class="img-responsive padding-bottom-20" alt="Gutex" />
				</div>
			</div>
			<div class="row">
				<div class="padding-left-30 padding-right-30">
					<blockquote><p><em><span class="ecocreamos-logo-sm">EcoCreamos</span> ofrece servicios de formación y asesoramiento, incluidos con el suministro de nuestros materiales y productos.</em></p></blockquote>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-12 padding-left-30 padding-right-30 padding-bottom-20">
					<h2 class="title-v2 padding-top-20">Sistemas</h2>
				</div>
			</div>
		
			<?php datasheet_displayCollection("material_gutex_sistemas"); ?>
			
			<div class="row">
				<div class="col-xs-12 padding-left-30 padding-right-30 padding-bottom-20">
					<h2 class="title-v2 padding-top-20">Productos</h2>
				</div>
			</div>
		
			<?php datasheet_displayCollection("material_gutex_productos"); ?>
			
			<div class="row">
				<div class="col-xs-12 padding-left-30 padding-right-30 padding-bottom-20">
					<h2 class="title-v2 padding-top-20">Accesorios</h2>
					<ul class="list-unstyled who">
						<li><i class="fa fa-file-pdf-o"></i> <a href="http://gutex-espana.eu/gama-de-productos/accesorios/fijacion-tirafondos/" target="_blank">Fijación / Tirafondos (12 elementos)</a></li>
						<li><i class="fa fa-file-pdf-o"></i> <a href="http://gutex-espana.eu/gama-de-productos/accesorios/perfileria-listones/" target="_blank">Perfilería / Listones (19 elementos)</a></li>
						<li><i class="fa fa-file-pdf-o"></i> <a href="http://gutex-espana.eu/gama-de-productos/accesorios/sellado-adhesivo/"    target="_blank">Sellado / Adhesivo (8 elementos)</a></li>
						<li><i class="fa fa-file-pdf-o"></i> <a href="http://gutex-espana.eu/gama-de-productos/accesorios/revoque-pintura/"     target="_blank">Revoque / Pintura (8 elementos)</a></li>
						<li><i class="fa fa-file-pdf-o"></i> <a href="http://gutex-espana.eu/gama-de-productos/accesorios/herramienta/"         target="_blank">Herramienta (2 elementos)</a></li>
						<li><i class="fa fa-file-pdf-o"></i> <a href="http://gutex-espana.eu/gama-de-productos/accesorios/varios/"              target="_blank">Varios (6 elementos)</a></li>
					</ul>
				</div>
			</div>
		
			<!--?php datasheet_displayCollection("material_gutex_accesorios"); ?-->
			
		</div>

<?php include "footer.php";?>
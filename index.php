<?php $title       = "EcoCreamos"; ?>
<?php $description = "Empresa constructora y promotora fundada en 1997 y orientada al asesoramiento en bioconstrucción y materiales ecológicos"; ?>
<?php $keywords    = "EcoCreamos, Casa sana, Casa sana pasiva, Casa biopasiva, Proyecto Passivhaus ecológico, Gestor biopasivo, Gestor de proyectos biopasivo, Bioconstrucción"; ?>
<?php $menu        = "inicio"; ?>
<?php $plugins     = "slider"; ?>
<?php include "header.php"; ?>
<?php image_displaySlider("inicio"); ?>

<!-- Validation: https://developers.google.com/structured-data/testing-tool/?hl=es -->
<script type="application/ld+json">
{
	"@context": "http://schema.org",
	"@type": "Organization",
	"legalName": "EcoCreamos",
	"isicV4": "410", // Page 52 in http://www.bundesbank.de/Redaktion/EN/Downloads/Service/Meldewesen/Bankenstatistik/Kundensystematik/isic_rev_4.pdf?__blob=publicationFile
	"url": "http://www.ecocreamos.com",
	"description": "Empresa de asesoramiento, construcción y promoción de bioconstrucción y casa sana pasiva; con la primera certificación Passivhaus de las Islas Baleares y la primera a nivel nacional e internacional en obtener la calificación Premium construida en tierra.",
	"logo": "http://www.ecocreamos.com/assets/img/ecocreamos_logo.jpg",
	"member": [{
		"@type": "Person",
		"givenName": "Eduardo",
		"familyName": "Ramos"
	}],
	"address": [{
		"addressCountry" : "ES",
		"addressRegion" : "Illes Balears",
		"postalCode" : "07141",
		"streetAddress" : "Celleters, 30"
	}],
  "contactPoint": [{
    "@type" : "ContactPoint",
		"email" : "info@ecocreamos.com",
    "telephone" : "+34629118619",
    "contactType" : "customer service",
    "availableLanguage" : [
      "Spanish",
      "English"
    ]
  }],
  "sameAs": [
    "http://www.facebook.com/ecocreamos",
    "http://www.linkedin.com/in/ecocreamos"
  ]
}
</script>

<!--=== Call To Action ===-->
<!--<div class="call-action-v1" style="background-color:#ddffcc;">
	<div class="container">
		<div class="call-action-v1-box">
			<div class="call-action-v1-in">
				<p>En <span class="ecocreamos-logo-sm">EcoCreamos</span>, nos enorgullecemos de asesorar, promover, construir y rehabilitar viviendas y edificios de... aaa aaaa aaaaaaa aa aaaaa aaa aaaaaaa aaa aaa aaaaaa aaa aa a aaaaa.</p>
			</div>
			<div class="call-action-v1-in inner-btn page-scroll">
				<a href="#portfolio" class="btn-u btn-brd btn-brd-hover btn-u-dark btn-u-block">Consulta nuestra galería</a>
			</div>
		</div>
	</div>
</div>-->
<!--=== End Call To Action ===-->

	<div class="one-page-inner one-default">
		<div class="container content">
			<div class="row margin-bottom-40">
				<div class="col-md-6 col-md-offset-1 md-margin-bottom-40">
					<p><span class="ecocreamos-logo-sm">EcoCreamos</span> es una empresa constructora y promotora fundada en 1997, dedicada a la Bioconstrucción, especializada en la construcción Bio-pasiva y distribución de materiales ecológicos.</p>
					<p>Con la experiencia adquirida en estos 20 años, hemos decidido emprender una nueva etapa, centrándonos en el <strong><em>asesoramiento</em></strong> de los diferentes procesos constructivos de obra nueva y rehabilitación ecológica que impliquen y sigan nuestra filosofía.</p>
					<p>En el proceso de asesoramiento de los productos que distribuimos, contamos con una amplia y reconocida experiencia práctica que nos permite garantizar su correcta utilización en cualquier solución constructiva.</p>
				</div>

				<div class="col-md-3 col-md-offset-1 md-margin-bottom-40">
					<img src="assets/img/eduardo_ramos.gif" />
				</div>
			</div><!--/row-->
			
			<!--=== Job Partners ===-->
			<div class="container content job-partners">
				<div class="title-box-v2">
					<h2>Nuestras <span class="color-green">&nbsp;distribuciones</span></h2>
				</div>
				<ul class="list-inline our-clients" id="effect-2">
					<li><a href="http://gutex-espana.eu/"           alt="Gutex España"       target="_blank"><img src="assets/img/logos/gutex.png"              alt="Gutex"             ></a></li>
					<li><a href="https://proclima.com/"             alt="pro clima"          target="_blank"><img src="assets/img/logos/pro_clima.jpg"          alt="pro clima"         ></a></li>
					<li><a href="http://www.naturhaus.net/"         alt="Naturhaus"          target="_blank"><img src="assets/img/logos/naturhaus.jpg"          alt="Naturhaus"         ></a></li>
					<li><a href="http://www.biohaus.es/"            alt="Biohaus"            target="_blank"><img src="assets/img/logos/biohaus.gif"            alt="Biohaus"           ></a></li>
					<li><a href="http://www.amorimisolamentos.com/" alt="Amorim Isolamentos" target="_blank"><img src="assets/img/logos/amorim_isolamentos.png" alt="Amorim Isolamentos"></a></li>
					<li><a href="http://www.ecoclay.es/"            alt="Ecoclay"            target="_blank"><img src="assets/img/logos/ecoclay.gif"            alt="Ecoclay"           ></a></li>
					<li><a href="http://www.agua-viva.info/"        alt="Agua Viva"          target="_blank"><img src="assets/img/logos/agua_viva.jpg"          alt="Agua Viva"         ></a></li>
					<li><a href="http://www.lacunza.net/"           alt="Lacunza"            target="_blank"><img src="assets/img/logos/lacunza.png"            alt="Lacunza"           ></a></li>
					<li><a href="http://www.pranan.com/"            alt="Pranan"             target="_blank"><img src="assets/img/logos/pranan.jpg"             alt="Pranan"            ></a></li>
				</ul>
			</div><!--/container-->
			<!--=== End Job Partners ===-->
			
		</div>
	</div>
</div><!--/one-page-->
<!-- End Content Part -->

<?php include "footer.php";?>
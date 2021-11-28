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
		"postalCode" : "07320",
		"streetAddress" : "Guillem Bujosa Rosselló, 10"
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
					<p>Con la experiencia adquirida en estos <?php echo date('Y')-1997 ?> años, hemos decidido emprender una nueva etapa, centrándonos en el <strong><em>asesoramiento</em></strong> de los diferentes procesos constructivos de obra nueva y rehabilitación ecológica que impliquen y sigan nuestra filosofía.</p>
					<p>En el proceso de asesoramiento de los productos que distribuimos, contamos con una amplia y reconocida experiencia práctica que nos permite garantizar su correcta utilización en cualquier solución constructiva.</p>
				</div>

				<div class="col-md-3 col-md-offset-1 md-margin-bottom-40">
					<img src="assets/img/eduardo_ramos.jpg" />
				</div>
			</div><!--/row-->
			
			<!--=== Job Partners ===-->
			<div class="container content job-partners">
				<div class="title-box-v2">
					<h2>Nuestras <span class="color-green">&nbsp;distribuciones</span></h2>
				</div>
				<ul class="list-inline our-clients" id="effect-2">
					<li><a href="material_gutex.php"           alt="Gutex España"      ><img src="assets/img/logos/gutex.png"              alt="Gutex"             ></a></li>
					<li><a href="material_pro_clima.php"       alt="pro clima"         ><img src="assets/img/logos/pro_clima.jpg"          alt="pro clima"         ></a></li>
					<li><a href="material_naturhaus.php"       alt="Naturhaus"         ><img src="assets/img/logos/naturhaus.jpg"          alt="Naturhaus"         ></a></li>
					<li><a href="http://www.biohaus.es/productos/aislamiento-acustico/phonestar" alt="Phonestar"     target="_blank"><img src="assets/img/logos/wolf_bavaria.jpg"  alt="Phonestar"    ></a></li>
					<li><a href="http://www.grupoibercal.com/"                                   alt="Ibercal Grupo" target="_blank"><img src="assets/img/logos/ibercal_grupo.png" alt="Ibercal Grupo"></a></li>
					<li><a href="material_corcho_negro.php"    alt="Amorim Isolamentos"><img src="assets/img/logos/amorim_isolamentos.png" alt="Amorim Isolamentos"></a></li>
					<li><a href="material_ecoclay.php"         alt="Ecoclay"           ><img src="assets/img/logos/ecoclay.gif"            alt="Ecoclay"           ></a></li>
					<li><a href="producto_agua_viva.php"       alt="Agua Viva"         ><img src="assets/img/logos/agua_viva.jpg"          alt="Agua Viva"         ></a></li>
					<li><a href="producto_biomasa.php"         alt="Lacunza"           ><img src="assets/img/logos/lacunza.png"            alt="Lacunza"           ></a></li>
					<li><a href="producto_pranan.php"          alt="Pranan"            ><img src="assets/img/logos/pranan.jpg"             alt="Pranan"            ></a></li>
					<li><a href="https://www.wicanders.es/"    alt="WICANDERS"         ><img src="assets/img/logos/WICANDERS.png"          alt="WICANDERS"         ></a></li>
					<li><a href="https://www.amorimwise.es/"   alt="AMORIM WISE"       ><img src="assets/img/logos/AMORIM_WISE.png"        alt="AMORIM WISE"       ></a></li>
					<li><a href="material_seciltek.php"        alt="SECIL_TECK"        ><img src="assets/img/logos/SecilTek.jpg"           alt="SECIL_TECK"        ></a></li>
				</ul>
			</div><!--/container-->
			<!--=== End Job Partners ===-->
			
		</div>
	</div>
</div><!--/one-page-->
<!-- End Content Part -->

<?php include "footer.php";?>
<?php $title       = "Ecocreamos, vivienda bioecológica aaaaaa aaaa"; ?>
<?php $description = "Bioconstrucción, construcción ecológica, estudios biológicos, materiales ecológicos"; ?>
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
	"description": "Empresa de promoción, construcción bioecológica, asesoramiento,...",
	"logo": "http://www.ecocreamos.com/assets/img/ecocreamos_logo.jpg",
	"member": [{
		"@type": "Person",
		"givenName": "Eduardo",
		"familyName": "Ramos"
	}],
	"address": [{
		"addressCountry" : "ES",
		"addressRegion" : "Illes Balears",
		"postalCode" : "07009",
		"streetAddress" : "Gremi de Tintorers, 18"
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
			<div class="row">
				<div class="col-md-6">
					<p><span class="ecocreamos-logo-sm">EcoCreamos</span> nace a partir de una empresa constructora convencional que, desde que se fundó en el año 1997, no ha parado de modificarse y renovarse, para finalmente ser una simbiosis de diferentes tendencias y tipologías de construcción respetuosas con el ser humano y con el medio ambiente.</p>
					<ul class="list-unstyled">
						<li><i class="fa fa-check color-green"></i>&nbsp;&nbsp;Promoción ecológica y bioconstrucción</li>
						<li><i class="fa fa-check color-green"></i>&nbsp;&nbsp;Asesoramiento en aaaa</li>
						<li><i class="fa fa-check color-green"></i>&nbsp;&nbsp;Estudios aaaaaa</li>
						<li><i class="fa fa-check color-green"></i>&nbsp;&nbsp;Distribución de productos aaaaaa</li>
						<li><i class="fa fa-check color-green"></i>&nbsp;&nbsp;Distribución de materiales aaaaa</li>
					</ul><br />

					<!-- Blockquotes -->
					<blockquote class="hero-unify">
						<p>Nuestro propósito es aaa aaaa a aaaa aa aaaaa aaa aaaaaaaa aaa a aaaaa aaaa aa aaaaaaaaaa aaa aaa, aaaa aaaaaa aaaaa.</p>
						<small>Eduardo Ramos, Promotor Ecológico</small>
					</blockquote>
				</div>
				<div class="col-md-6">
					<img src="assets/img/proyecto_tierra.jpg" class="img-responsive margin-bottom-10" alt="">
				</div>
			</div>
			
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
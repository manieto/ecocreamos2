<?php $title       = "Ecocreamos, vivienda bioecológica aaaaaa aaaa"; ?>
<?php $description = "Bioconstrucción, construcción ecológica, estudios biológicos, materiales ecológicos"; ?>
<?php include "header.php"; ?> <!-- TODO: incluir el tipo de página (p. ej., home, contacto (por el mapa)...) -->
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
		"postalCode" : "07008",
		"streetAddress" : "Calle ABC, 123"
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
				<p>En <span class="ecocreamos-logo">EcoCreamos</span>, nos enorgullecemos de asesorar, promover, construir y rehabilitar viviendas y edificios de... aaa aaaa aaaaaaa aa aaaaa aaa aaaaaaa aaa aaa aaaaaa aaa aa a aaaaa.</p>
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
					<p><span class="ecocreamos-logo">EcoCreamos</span> nace a partir de una empresa constructora convencional que, desde que se fundó en el año 1997, no ha parado de modificarse y renovarse, para finalmente ser una simbiosis de diferentes tendencias y tipologías de construcción respetuosas con el ser humano y con el medio ambiente.</p>
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
					<h2>Nuestros <span class="color-green">&nbsp;amigos</span></h2>
				</div>
				<ul class="list-inline our-clients" id="effect-2">
					<li><img src="assets/img/logos/passivhaus.jpg" alt="Passivhaus"></li>
					<li><img src="assets/img/logos/amorim_isolamentos.png" alt="Amorim Isolamentos"></li>
					<li><img src="assets/img/logos/ecoclay.gif" alt="Ecoclay"></li>
					<li><img src="assets/img/logos/pro_clima.jpg" alt="pro clima"></li>
					<li><img src="assets/img/logos/lacunza.png" alt="Lacunza"></li>
					<li><img src="assets/img/logos/agua_viva.jpg" alt="Agua Viva"></li>
					<li><img src="assets/img/logos/pranan.jpg" alt="Pranan"></li>
					<li><img src="assets/img/logos/gutex.png" alt="Gutex"></li>
					<li><img src="assets/img/logos/naturhaus.jpg" alt="Naturhaus"></li>
					<li><img src="assets/img/logos/biohaus.gif" alt="Biohaus"></li>
				</ul>
			</div><!--/container-->
			<!--=== End Job Partners ===-->
			
		</div>
	</div>
</div><!--/one-page-->
<!-- End Content Part -->

<?php include "footer.php";?>
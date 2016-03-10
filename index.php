<?php $title       = "Ecocreamos, vivienda bioecológica aaaaaa aaaa"; ?>
<?php $description = "Bioconstrucción, construcción ecológica, estudios biológicos, materiales ecológicos"; ?>
<?php include "header.php"; ?> <!-- TODO: incluir el tipo de página (p. ej., home, contacto (por el mapa)...) -->
<?php image_displaySlider("tierra"); ?>

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
<div class="call-action-v1" style="background-color:#ddffcc;">
	<div class="container">
		<div class="call-action-v1-box">
			<div class="call-action-v1-in">
				<p>En Ecocreamos, nos enorgullecemos de asesorar, promover, construir y rehabilitar viviendas y edificios de... aaa aaaa aaaaaaa aa aaaaa aaa aaaaaaa aaa aaa aaaaaa aaa aa a aaaaa.</p>
			</div>
			<div class="call-action-v1-in inner-btn page-scroll">
				<a href="#portfolio" class="btn-u btn-brd btn-brd-hover btn-u-dark btn-u-block">Consulta nuestra galería</a>
			</div>
		</div>
	</div>
</div>
<!--=== End Call To Action ===-->

	<div class="one-page-inner one-red">
		<div class="container content">
			<div class="row">
				<div class="col-md-6">
					<h2>At vero eos et accusamus et iusto odio dignissimos</h2>
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus..</p>
					<p>Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
					<a class="btn-u btn-u-green one-page-btn"><i class="fa fa-comments-o"></i> libero adipiscing</a>
				</div>
				<div class="col-md-6">
					<img src="assets/img/main/img21.jpg" class="img-responsive margin-bottom-10" alt="">
				</div>
			</div>
		</div>
	</div>

	<div class="one-page-inner one-default">
		<div class="container content">
			<div class="row">
				<div class="col-md-6">
					<img src="assets/img/main/img6.jpg" class="img-responsive margin-bottom-10" alt="">
				</div>
				<div class="col-md-6">
					<h2>Praesentium voluptatum deleniti</h2>
					<p>Ducimus qui blanditiis praesentium voluptatum deleniti atque cupiditate non provident, similique sunt in culpa qui officia ipsum dolor sit amet, consectetur adipiscing elit.</p>
					<p>Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p><br>

					<div class="row margin-bottom-10">
						<div class="col-md-3">
							<a href="assets/img/main/img12.jpg" title="Project #1" data-rel="gallery" class="fancybox">
								<img class="img-responsive" src="assets/img/main/img12.jpg" alt="">
							</a>
						</div>
						<div class="col-md-3">
							<a href="assets/img/main/img13.jpg" title="Project #2" data-rel="gallery" class="fancybox">
								<img class="img-responsive" src="assets/img/main/img13.jpg" alt="">
							</a>
						</div>
						<div class="col-md-3">
							<a href="assets/img/main/img15.jpg" title="Project #3" data-rel="gallery" class="fancybox">
								<img class="img-responsive" src="assets/img/main/img15.jpg" alt="">
							</a>
						</div>
						<div class="col-md-3">
							<a href="assets/img/main/img16.jpg" title="Project #4" data-rel="gallery" class="fancybox">
								<img class="img-responsive" src="assets/img/main/img16.jpg" alt="">
							</a>
						</div>
					</div>

					<a class="btn-u btn-u btn-u-red"><i class="fa fa-thumbs-up"></i> Libero adipiscing</a>
					<a class="btn-u btn-u btn-u-blue"><i class="fa fa-dropbox"></i> Veahicula feugiat</a>
				</div>
			</div>

			<hr>
			
			<!--=== Job Partners ===-->
			<div class="container content job-partners">
				<div class="title-box-v2">
					<h2>Nuestros <span class="color-green">proveedores</span></h2>
				</div>
				<ul class="list-inline our-clients" id="effect-2">
					<li>
						<figure>
							<img src="assets/img/clients2/inspiring.png" alt="">
							<div class="img-hover">
								<h4>Inspiring</h4>
							</div>
						</figure>
					</li>
					<li>
						<figure>
							<img src="assets/img/clients2/ucweb.png" alt="">
							<div class="img-hover">
								<h4>UcWeb</h4>
							</div>
						</figure>
					</li>
					<li>
						<figure>
							<img src="assets/img/clients2/corepreserves.png" alt="">
							<div class="img-hover">
								<h4>Core Preserves</h4>
							</div>
						</figure>
					</li>
					<li>
						<figure>
							<img src="assets/img/clients2/getaround.png" alt="">
							<div class="img-hover">
								<h4>GetAround</h4>
							</div>
						</figure>
					</li>
					<li>
						<figure>
							<img src="assets/img/clients2/baderbrau.png" alt="">
							<div class="img-hover">
								<h4>Baderbrau</h4>
							</div>
						</figure>
					</li>
					<li>
						<figure>
							<img src="assets/img/clients2/fddw.png" alt="">
							<div class="img-hover">
								<h4>Field Days</h4>
							</div>
						</figure>
					</li>
					<li>
						<figure>
							<img src="assets/img/clients2/marianos.png" alt="">
							<div class="img-hover">
								<h4>Mariano's</h4>
							</div>
						</figure>
					</li>
					<li>
						<figure>
							<img src="assets/img/clients2/grifting-tree.png" alt="">
							<div class="img-hover">
								<h4>The Grifting Tree</h4>
							</div>
						</figure>
					</li>
				</ul>
			</div><!--/container-->
			<!--=== End Job Partners ===-->
			
		</div>
	</div>
</div><!--/one-page-->
<!-- End Content Part -->

<?php include "footer.php";?>
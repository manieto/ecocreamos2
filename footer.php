		<!--=== Footer ===-->
		<div id="footer-default" class="footer-default">
			<div class="footer">
				<div class="container">
					<div class="row">

						<div class="col-md-4 md-margin-bottom-40">
							<!-- Recent Blogs -->
							<div class="posts">
								<div class="headline"><h2>Noticias más relevantes</h2></div>
								<dl class="dl-horizontal">
									<dt><a href="noticia_primer_passivhaus_premium_tierra_internacional.php"><img src="assets/img/ultimas_actualizaciones/proyecto_tierra.jpg" alt="Proyecto Tierra" /></a></dt>
									<dd>
										<p><a href="noticia_primer_passivhaus_premium_tierra_internacional.php">Este octubre de 2016, <em>Proyecto Tierra</em> se ha convertido en la primera vivienda a nivel nacional e internacional certificada como <strong><em>Passivhaus Premium</em></strong> construida en tierra</a></p>
									</dd>
								</dl>
								<dl class="dl-horizontal">
									<dt><a href="servicios.php"><img src="assets/img/ultimas_actualizaciones/eduardo_ramos.gif" alt="" /></a></dt>
									<dd>
										<p><a href="servicios.php">EcoCreamos y su nueva etapa como gestor de proyectos ecológicos pasivos. Eduardo Ramos impulsa el concepto <em>Bio-Pasivo</em>.</a></p>
									</dd>
								</dl>
							</div>
							<!-- End Recent Blogs -->
						</div><!--/col-md-4-->

						<div class="col-md-4 md-margin-bottom-40">
							<div class="headline"><h2>Enlaces destacados</h2></div>
							<ul class="list-unstyled link-list">
								<li><a href="passivhaus_bio.php">Proyecto Tierra</a><i class="fa fa-angle-right"></i></li>
								<li><a href="passivhaus_bio.php">Passivhaus-Bio</a><i class="fa fa-angle-right"></i></li>
								<li><a href="assets/pdf/proyecto_tierra/certificacion_passivhaus_premium.pdf" target="_blank">Certificación Passivhaus Premium</a><i class="fa fa-angle-right"></i></li>
								<li><a href="servicios.php">Asesoramiento en bioconstrucción</a><i class="fa fa-angle-right"></i></li>
								<li><a href="noticias.php">Noticias y eventos</a><i class="fa fa-angle-right"></i></li>
								<li><a href="contacto.php">Contacto</a><i class="fa fa-angle-right"></i></li>
							</ul>
						</div><!--/col-md-4-->

						<div class="col-md-4">
							<!-- Contact Us -->
							<div class="headline"><h2>Contacte con nosotros</h2></div>
							<address class="md-margin-bottom-40">
								Guillem Bujosa Rosselló, 10 <a href="https://goo.gl/maps/fgeWJrpgbGzruKWd9" target="_blank" class="">(ver mapa)</a><br />
								Polígon de Son Llaüt, Santa Maria del Camí, Illes Balears<br />
								<i class="fa fa-clock-o"></i> De lunes a viernes, de 8:00 a 16:00, sin cita previa; o llámenos para concertar una cita para otro momento<br />
								Tel: <a href="tel:+34629118619">629 11 86 19</a><br />
								Email: <a href="mailto:info@ecocreamos.com" class="">info@ecocreamos.com</a>
							</address>
							<!-- End Contact Us -->

							<!-- Social Links -->
							<div class="headline"><h2>Siga conectado</h2></div>
							<ul class="social-icons">
								<li><a href="https://www.facebook.com/ecocreamos" data-original-title="Facebook" class="social_facebook"></a></li>
								<li><a href="https://es.linkedin.com/company/ecocreamos" data-original-title="Linkedin" class="social_linkedin"></a></li>
							</ul>
							<!-- End Social Links -->
						</div><!--/col-md-4-->
					</div>
				</div>
			</div><!--/footer-->

			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p>
								2016 &copy; EcoCreamos. Todos los derechos reservados.
								<!--<a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>-->
							</p>
						</div>
					</div>
				</div>
			</div><!--/copyright-->
		</div>
		<!--=== End Footer ===-->

	</div><!--/wrapper-->

	<!-- JS Global Compulsory -->
	<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
	<script type="text/javascript" src="assets/plugins/smoothScroll.js"></script>
	<script type="text/javascript" src="assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>

	<?php   if (includePlugin($plugins, "slider")) { ?>
		<script type="text/javascript" src="assets/plugins/layer-slider/layerslider/js/greensock.js"></script>
		<script type="text/javascript" src="assets/plugins/layer-slider/layerslider/js/layerslider.transitions.js"></script>
		<script type="text/javascript" src="assets/plugins/layer-slider/layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
	<?php } if (includePlugin($plugins, "maps")) { ?>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script type="text/javascript" src="assets/plugins/gmap/gmap.js"></script>
		<script type="text/javascript" src="assets/js/maps.js"></script>
	<?php } if (includePlugin($plugins, "carousel")) { ?>
		<script type="text/javascript" src="assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
	<?php } if (includePlugin($plugins, "portfolio")) { ?>
		<script type="text/javascript" src="assets/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<?php } ?>
	<!-- JS Customization -->
	<script type="text/javascript" src="assets/js/custom.js"></script>
	<!-- JS Page Level -->
	<script type="text/javascript" src="assets/js/app.js"></script>
	<script type="text/javascript" src="assets/js/plugins/fancy-box.js"></script>
	
	<?php if (includePlugin($plugins, "slider"   )) { ?><script type="text/javascript" src="assets/js/plugins/layer-slider.js"></script><?php } ?>
	<?php if (includePlugin($plugins, "carousel" )) { ?><script type="text/javascript" src="assets/js/plugins/owl-carousel.js"></script><?php } ?>
	<?php if (includePlugin($plugins, "portfolio")) { ?><script type="text/javascript" src="assets/js/plugins/cube-portfolio/cube-portfolio-3.js"></script><?php } ?>

	<script type="text/javascript">
		jQuery(document).ready(function () {
			App.init();
			FancyBox.initFancybox();
			<?php if (includePlugin($plugins, "slider"   )) { ?>LayerSlider.initLayerSlider();<?php } ?>
			<?php if (includePlugin($plugins, "maps"     )) { ?>ContactPage.initMap        ();<?php } ?>
			<?php if (includePlugin($plugins, "carousel" )) { ?>OwlCarousel.initOwlCarousel();<?php } ?>
			<?php if (includePlugin($plugins, "portfolio")) { ?>Portfolio  .initPortfolio  ('<?=$idGaleria ?>');<?php } ?>
		});
	</script>
	<!--[if lt IE 9]>
		<script src="assets/plugins/respond.js"></script>
		<script src="assets/plugins/html5shiv.js"></script>
		<script src="assets/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-73796847-1', 'auto');
		ga('send', 'pageview', document.location.pathname);
	</script>

</body>
</html>

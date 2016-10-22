		<!--=== Footer ===-->
		<div id="footer-default" class="footer-default">
			<div class="footer">
				<div class="container">
					<div class="row">

						<div class="col-md-4 md-margin-bottom-40">
							<!-- Recent Blogs -->
							<div class="posts">
								<div class="headline"><h2>Últimas actualizaciones</h2></div>
								<dl class="dl-horizontal">
									<dt><a href="noticia_primer_passivhaus_illes_balears.php"><img src="assets/img/proyecto_tierra.jpg" alt="" /></a></dt>
									<dd>
										<p><a href="noticia_primer_passivhaus_illes_balears.php">Este diciembre de 2015, <em>Proyecto Tierra</em> ha conseguido la Primera Certificación de edificio <em>Passivaus</em> de las Illes Balears</a></p>
									</dd>
								</dl>
								<dl class="dl-horizontal">
									<dt><a href="servicios.php"><img src="assets/img/proyecto_tierra.jpg" alt="" /></a></dt>
									<dd>
										<p><a href="servicios.php">Eduardo Ramos inicia su camino como asesor en bioconstrucción y promoción de proyectos de construcción ecológica y <em>Passivhaus</em></a></p>
									</dd>
								</dl>
							</div>
							<!-- End Recent Blogs -->
						</div><!--/col-md-4-->

						<div class="col-md-4 md-margin-bottom-40">
							<div class="headline"><h2>Enlaces destacados</h2></div>
							<ul class="list-unstyled link-list">
								<li><a href="proyecto_tierra.php">Proyecto Tierra</a><i class="fa fa-angle-right"></i></li>
								<li><a href="passivhaus_bio.php">Passivhaus</a><i class="fa fa-angle-right"></i></li>
								<li><a href="servicios.php">Asesoramiento en bioconstrucción</a><i class="fa fa-angle-right"></i></li>
								<li><a href="material_corcho_negro.php">Materiales - Corcho negro</a><i class="fa fa-angle-right"></i></li>
								<li><a href="material_gutex.php">Materiales - Gutex</a><i class="fa fa-angle-right"></i></li>
								<li><a href="contacto.php">Contacto</a><i class="fa fa-angle-right"></i></li>
							</ul>
						</div><!--/col-md-4-->

						<div class="col-md-4">
							<!-- Contact Us -->
							<div class="headline"><h2>Contacte con nosotros</h2></div>
							<address class="md-margin-bottom-40">
								Gremi de Tintorers, 18 <a href="https://www.google.es/maps/place/Carrer+Gremi+de+Tintorers,+18,+07009+Palma,+Illes+Balears" target="_blank" class="">(ver mapa)</a><br />
								Palma, Illes Balears<br />
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
								2016 &copy; Ecocreamos. Todos los derechos reservados.
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

</body>
</html>

<?php $title       = "Ecocreamos - Contacto"; ?>
<?php $description = "Información de contacto con Ecocreamos: teléfono: 629 11 86 19 , e-mail: info@ecocreamos.com , dirección: aaaaa , formulario de contacto."; ?>
<?php $menu        = "contacto"; ?>
<?php $plugins     = "maps,forms"; ?>
<?php include "header.php";?>

		<!--=== Breadcrumbs v1 ===-->
		<div class="breadcrumbs-v1">
			<div class="container">
				<h1>Contacte con nosotros</h1>
			</div>
		</div>
		<!--=== End Breadcrumbs v1 ===-->

		<!--=== Content Part ===-->
		<div class="container content">
			<div class="row margin-bottom-30">
				<div class="col-md-9">
					<!-- Google Map -->
					<div id="map" class="map map-box map-box-space margin-bottom-20"></div>
					<!-- End Google Map -->
				</div><!--/col-md-9-->

				<div class="col-md-3">
						<!-- Contacts -->
						<div class="headline"><h2>Datos de contacto</h2></div>
						<div class="row">
							<div class="col-sm-6 col-md-12">
								<ul class="list-unstyled who">
									<li><a href="https://www.google.es/maps/place/Carrer+Gremi+de+Tintorers,+18,+07009+Palma,+Illes+Balears" target="_blank"><i class="fa fa-home"></i>Gremi de Tintorers, 18<br><span style="padding-left: 24px;">Palma, Illes Balears</span></a></li>
									<li><a href="mailto:info@ecocreamos.com"><i class="fa fa-envelope"></i>info@ecocreamos.com</a></li>
									<li><a href="tel:+34629118619"><i class="fa fa-phone"></i>629 11 86 19</a></li>
								</ul>
							</div>
							<div class="col-sm-6 col-md-12">
								<ul class="list-unstyled who">
									<li><a href="http://www.ecocreamos.com/"><i class="fa fa-globe"></i>www.ecocreamos.com</a></li>
									<li><a href="https://www.facebook.com/ecocreamos"><i class="fa fa-facebook-official"></i>facebook/ecocreamos</a></li>
									<li><a href="https://es.linkedin.com/company/ecocreamos"><i class="fa fa-linkedin"></i>linkedin/ecocreamos</a></li>
								</ul>
							</div>
						</div>
				</div><!--/col-md-3-->
			</div><!--/row-->
			<div class="row margin-bottom-30">
				<div class="col-md-9">
					<p>Si lo prefiere, puede contactar con nosotros enviando un mensaje con el siguiente formulario y nos pondremos en contacto con usted con la mayor brevedad posible.</p><br />
					<form action="contacto_enviar_mensaje.php" method="post" id="enviar-mensaje" class="sky-form contact-style">
						<fieldset class="no-padding">
							<label>Nombre <span class="color-red">*</span></label>
							<div class="row sky-space-20">
								<div class="col-md-7 col-md-offset-0">
									<div>
										<input type="text" name="name" id="name" class="form-control">
									</div>
								</div>
							</div>

							<label>E-mail o teléfono <span class="color-red">*</span></label>
							<div class="row sky-space-20">
								<div class="col-md-7 col-md-offset-0">
									<div>
										<input type="text" name="email" id="email" class="form-control">
									</div>
								</div>
							</div>

							<label>Mensaje <span class="color-red">*</span></label>
							<div class="row sky-space-20">
								<div class="col-md-11 col-md-offset-0">
									<div>
										<textarea rows="8" name="message" id="message" class="form-control"></textarea>
									</div>
								</div>
							</div>

							<p><button type="submit" class="btn-u">Enviar mensaje</button></p>
						</fieldset>

						<div class="message">
							<i class="rounded-x fa fa-check"></i>
							<p>Mensaje enviado correctamente</p>
						</div>
					</form>
				</div>
			</div><!--/row-->
		</div><!--/container-->
		<!--=== End Content Part ===-->

<?php include "footer.php"; ?>
<?php $title = "Ecocreamos - Contacto"; ?>
<?php include "header.php";?> <!-- TODO: incluir el tipo de página (p. ej., home, contacto (por el mapa)...) -->

		<!--=== Breadcrumbs v2 ===-->
		<div class="breadcrumbs-v1">
			<div class="container">
				<h1>Contacte con nosotros</h1>
				<!--<ul class="breadcrumb-v2 list-inline">
					<li><a href="index.html"><i class="rounded-x fa fa-angle-right"></i>Home</a></li>
					<li><a href=""><i class="rounded-x fa fa-angle-right"></i>Page</a></li>
					<li class="active"><i class="rounded-x fa fa-angle-right"></i>F.A.Q</li>
				</ul>-->
			</div>
		</div>
		<!--=== End Breadcrumbs v2 ===-->

		<!--=== Content Part ===-->
		<div class="container content">
			<div class="row margin-bottom-30">
				<div class="col-md-9 mb-margin-bottom-30">
					<!-- Google Map -->
					<div id="map" class="map map-box map-box-space margin-bottom-40"></div>
					<!-- End Google Map -->

					<p>Si lo prefiere, puede contactar con nosotros enviando un mensaje con el siguiente formulario y nos pondremos en contacto con usted con la mayor brevedad posible.</p><br />

					<form action="assets/php/sky-forms-pro/demo-contacts-process.php" method="post" id="sky-form3" class="sky-form contact-style">
						<fieldset class="no-padding">
							<label>Name <span class="color-red">*</span></label>
							<div class="row sky-space-20">
								<div class="col-md-7 col-md-offset-0">
									<div>
										<input type="text" name="name" id="name" class="form-control">
									</div>
								</div>
							</div>

							<label>Email <span class="color-red">*</span></label>
							<div class="row sky-space-20">
								<div class="col-md-7 col-md-offset-0">
									<div>
										<input type="text" name="email" id="email" class="form-control">
									</div>
								</div>
							</div>

							<label>Message <span class="color-red">*</span></label>
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
				</div><!--/col-md-9-->

				<div class="col-md-3">
					<!-- Contacts -->
					<div class="headline"><h2>Datos de contacto</h2></div>
					<ul class="list-unstyled who margin-bottom-30">
						<li><a href="https://maps.google.com/..."><i class="fa fa-home"></i>Carrer AAA, 123, Palma</a></li>
						<li><a href="mailto:info@ecocreamos.com"><i class="fa fa-envelope"></i>info@ecocreamos.com</a></li>
						<li><a href="tel:+34629118619"><i class="fa fa-phone"></i>629 11 86 19</a></li>
						<li><a href="http://www.ecocreamos.com/"><i class="fa fa-globe"></i>www.ecocreamos.com</a></li>
					</ul>

					<!-- Business Hours -->
					<div class="headline"><h2>Horario</h2></div>
					<ul class="list-unstyled margin-bottom-30">
						<li><strong>Lunes-Viernes:</strong> de 9 h a 19 h</li>
						<li><strong>Sábado:</strong> de 10 h a 14 h</li>
						<li><strong>Domingo:</strong> Cerrado</li>
					</ul>

					<!-- Why we are? -->
					<!--<div class="headline"><h2>Why we are?</h2></div>
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
					<ul class="list-unstyled">
						<li><i class="fa fa-check color-green"></i> Odio dignissimos ducimus</li>
						<li><i class="fa fa-check color-green"></i> Blanditiis praesentium volup</li>
						<li><i class="fa fa-check color-green"></i> Eos et accusamus</li>
					</ul>-->
				</div><!--/col-md-3-->
			</div><!--/row-->

			<!-- Owl Clients v1 -->
			<!--<div class="headline"><h2>Nuestros proveedores</h2></div>
			<div class="owl-clients-v1">
				<div class="item">
					<img src="assets/img/clients4/1.png" alt="">
				</div>
				<div class="item">
					<img src="assets/img/clients4/2.png" alt="">
				</div>
				<div class="item">
					<img src="assets/img/clients4/3.png" alt="">
				</div>
				<div class="item">
					<img src="assets/img/clients4/4.png" alt="">
				</div>
				<div class="item">
					<img src="assets/img/clients4/5.png" alt="">
				</div>
				<div class="item">
					<img src="assets/img/clients4/6.png" alt="">
				</div>
				<div class="item">
					<img src="assets/img/clients4/7.png" alt="">
				</div>
				<div class="item">
					<img src="assets/img/clients4/8.png" alt="">
				</div>
				<div class="item">
					<img src="assets/img/clients4/9.png" alt="">
				</div>
			</div>
			<!-- End Owl Clients v1 -->
		</div><!--/container-->
		<!--=== End Content Part ===-->

<?php include "footer.php";?>
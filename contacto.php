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
		
		<script>
			function validateEmail(email) {
				var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
				return re.test(email);
			}
			function enviarMensaje() {
				var nombre   = document.getElementById("nombre");
				var email    = document.getElementById("email");
				var telefono = document.getElementById("telefono");
				var mensaje  = document.getElementById("mensaje");
				var copia    = document.getElementById("copia");
				
				var nombreValido = nombre.value.length>0;
				var mensajeValido = mensaje.value.length>0;
				var emailRequerido = copia.checked;
				var emailRellenado = email.value.length>0;
				var emailValido = !emailRellenado || validateEmail(email.value);
				var formValido = nombreValido && mensajeValido && (!emailRequerido || (emailRellenado && emailValido));
				
				if (!formValido) {
					var message = "El mensaje no puede enviarse debido a que:";
					if (!nombreValido ) { message += "\n- Debe indicar su nombre"; }
					if (!emailValido  ) { message += "\n- La dirección de correo no es válida"; }
					if (!mensajeValido) { message += "\n- Debe indicar un mensaje"; }
					if (emailRequerido && !emailRellenado) { message += "\n- Debe indicar una dirección de correo si desea recibir una copia"; }
					alert(message);
					return false;
				}
				else {
					document.forms["enviar_mensaje"].submit();
					return true;
				}
			}
			function mensaje1OK  () { alert("Mensaje enviado correctamente."); }
			function mensaje2OK  () { alert("Copia enviada correctamente."); }
			function mensaje1FAIL() { alert("Mensaje no enviado debido a un error en el servidor."); }
			function mensaje2FAIL() { alert("Copia no enviado debido a un error en el servidor."); }
		</script>

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
					<form action="contacto_enviar_mensaje.php" method="post" id="enviar_mensaje" name="enviar_mensaje" class="sky-form contact-style" target="ifrm_enviar_mensaje">
						<fieldset class="no-padding">
							<div class="row sky-space-20">
								<div class="col-md-7 col-md-offset-0">
									<div>
										<label style="width: 60px;">Nombre <span class="color-red">*</span></label> <input type="text" name="nombre" id="nombre" class="form-control" style="display: inline; width: 250px;">
									</div>
								</div>
							</div>

							<div class="row sky-space-20">
								<div class="col-md-7 col-md-offset-0">
									<div>
										<label style="width: 60px;">E-mail</label> <input type="text" name="email" id="email" class="form-control" style="display: inline; width: 250px;">
									</div>
								</div>
							</div>

							<div class="row sky-space-20">
								<div class="col-md-7 col-md-offset-0">
									<div>
										<label style="width: 60px;">Teléfono</label> <input type="text" name="telefono" id="telefono" class="form-control" style="display: inline; width: 150px;">
									</div>
								</div>
							</div>

							<label>Mensaje <span class="color-red">*</span></label>
							<div class="row sky-space-20">
								<div class="col-md-11 col-md-offset-0">
									<div>
										<textarea rows="5" name="mensaje" id="mensaje" class="form-control"></textarea>
									</div>
								</div>
							</div>

							<p><label>Deseo recibir una copia</label> <input type="checkbox" name="copia" id="copia" value="si" /></p>
							<p><button onclick="enviarMensaje();" class="btn-u">Enviar mensaje</button>
								<span id="message_ok" class="alert alert-success fade in">
									<i class="rounded-x fa fa-check"></i> Mensaje enviado correctamente
								</span>
								<span id="message_fail" class="alert alert-danger">
									<i class="rounded-x fa fa-times"></i> Mensaje no enviado por problemas en el servidor
								</span>
							</p>
						</fieldset>

						<div id="message_fail" class="message">
							<i class="rounded-x fa fa-thumbs-o-down"></i>
							<p>Mensaje no enviado por problemas en el servidor</p>
						</div>
					</form>
					<iframe id="ifrm_enviar_mensaje" name="ifrm_enviar_mensaje" style="display:;" />
				</div>
			</div><!--/row-->
		</div><!--/container-->
		<!--=== End Content Part ===-->

<?php include "footer.php"; ?>
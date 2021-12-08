<?php $title       = "EcoCreamos - Contacto"; ?>
<?php $description = "Información de contacto con EcoCreamos: teléfono: 629 11 86 19 , e-mail: info@ecocreamos.com , dirección: Guillem Bujosa Rosselló, 10, polígono de Son Llaüt, 07320, Santa Maria del Camí , formulario de contacto."; ?>
<?php $keywords    = "EcoCreamos, Casa sana, Casa sana pasiva, Contacto"; ?>
<?php $menu        = "contacto"; ?>
<?php $plugins     = "maps,recaptcha"; ?>
<?php include "header.php";?>

		<!--=== Breadcrumbs v1 ===-->
		<div class="breadcrumbs-v1"
				 style="background: rgba(0, 0, 0, 0) url('assets/img/cabeceras/noticias.jpg') no-repeat scroll center center / cover ;">
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
			function enviarMensaje(event) {
				event.preventDefault();
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
					clearMessage("message_ok");
					clearMessage("message_fail");
					grecaptcha.ready(function() {
            			grecaptcha.execute("6LePGIkdAAAAAExzljz6sYowt61N8nV6edmj857I", { action: "submit" }).then(function(token) {
							document.getElementById("token").value = token;
							document.forms["enviar_mensaje"].submit();
            			});
        			});
					return true;
				}
			}
			function clearMessage(div) {
				document.getElementById(div).style.display = "none";
				document.getElementById(div+"_message").innerHTML = "";
			}
			function showMessage(div, message) {
				var div2 = document.getElementById(div+"_message");
				div2.innerHTML = message;
				document.getElementById(div).style.display = "";
			}
			function mailCallback(return1, return2) {
				if      (return1==="1" && return2==="1")	{ showMessage("message_ok"  , "Mensajes enviados correctamente."); }
				else if (return1==="0" && return2==="0")	{ showMessage("message_fail", "ERROR: Los mensajes no han podido ser enviados. Por favor, vuelva a intentarlo más tarde."); }
				else if (return1==="1")						{ showMessage("message_ok"  , "Mensaje enviado correctamente. Gracias."); }
				else if (return1==="0")						{ showMessage("message_fail", "ERROR: El mensaje no ha podido ser enviado. Por favor, vuelva a intentarlo más tarde."); }
				if      (return1==="1" && return2==="0")	{ showMessage("message_fail", "ERROR: La copia del mensaje no ha podido ser enviada."); }
				if      (return1==="9")                     { showMessage("message_fail", "ERROR: El filtro de spam ha bloqueado el mensaje. Envíenos un e-mail a <a href='mailto:info@ecocreamos.com'>info@ecocreamos.com</a> ."); }
			}
		</script>

		<!--=== Content Part ===-->
		<div class="container content">
			<div class="row margin-bottom-30">
				<div class="col-md-9">
					<!-- Google Map -->
					<!--<div id="map" class="map map-box map-box-space margin-bottom-20"></div>-->
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3071.766885462771!2d2.78934515137505!3d39.65496057936032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1297c033b9c98dfb%3A0x462cf4949aa6b773!2sAv.%20Central%2C%2010%2C%2007320%20Santa%20Mar%C3%ADa%20del%20Camino%2C%20Islas%20Baleares!5e0!3m2!1ses!2ses!4v1605653979527!5m2!1ses!2ses"
							width="100%" height="350" frameborder="0" style="border:0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					<!-- End Google Map -->
				</div><!--/col-md-9-->

				<div class="col-md-3">
						<!-- Contacts -->
						<div class="headline"><h2>Datos de contacto</h2></div>
						<div class="row">
							<div class="col-xs-6 col-md-12">
								<ul class="list-unstyled who">
									<li><a href="https://goo.gl/maps/fgeWJrpgbGzruKWd9" target="_blank"><i class="fa fa-home"></i>Guillem Bujosa Rosselló, 10<br/>
										<span style="padding-left: 24px;">Polígon de Son Llaüt</span><br/>
										<span style="padding-left: 24px;">Santa Maria del Camí</span><br/>
										<span style="padding-left: 24px;">Illes Balears</span>
									</a></li>
									<li><i class="fa fa-clock-o"></i> De lunes a viernes, de 9:30 a 13:30, sin cita previa; o llámenos para concertar una cita para otro momento</li>
									<li><a href="mailto:info@ecocreamos.com"><i class="fa fa-envelope"></i>info@ecocreamos.com</a></li>
									<li><a href="tel:+34629118619"><i class="fa fa-phone"></i>629 11 86 19</a></li>
								</ul>
							</div>
							<div class="col-xs-6 col-md-12">
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
										<label style="width: 70px;">Nombre <span class="color-red">*</span></label> <input type="text" name="nombre" id="nombre" class="form-control" style="display: inline; width: 250px;">
									</div>
								</div>
							</div>
							<div class="row sky-space-20">
								<div class="col-md-7 col-md-offset-0">
									<div>
										<label style="width: 70px;">E-mail</label> <input type="text" name="email" id="email" class="form-control" style="display: inline; width: 250px;">
									</div>
								</div>
							</div>
							<div class="row sky-space-20">
								<div class="col-md-7 col-md-offset-0">
									<div>
										<label style="width: 70px;">Teléfono</label> <input type="text" name="telefono" id="telefono" class="form-control" style="display: inline; width: 150px;">
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
							<input type="hidden" id="token" name="token" />
							<p><label>Deseo recibir una copia</label>&nbsp;&nbsp;<input type="checkbox" name="copia" id="copia" value="si" /></p>
							<p><button onclick="enviarMensaje(event);" class="btn-u">Enviar mensaje</button>
								<span id="message_ok" class="alert alert-success fade in" style="display:none;">
									<i class="rounded-x fa fa-check"></i> <span id="message_ok_message"></span>
								</span>
								<span id="message_fail" class="alert alert-danger" style="display:none;">
									<i class="rounded-x fa fa-times"></i> <span id="message_fail_message"></span>
								</span>
							</p>
						</fieldset>
					</form>
					<iframe id="ifrm_enviar_mensaje" name="ifrm_enviar_mensaje" style="display:none;"></iframe>
				</div>
			</div><!--/row-->
		</div><!--/container-->
		<!--=== End Content Part ===-->

<?php include "footer.php"; ?>
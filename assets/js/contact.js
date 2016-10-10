var ContactForm = function () {

    return {
        initContactForm: function () {
	        $("#enviar_mensaje").validate({
	            rules:
	            {
	                nombre:   { required: true },
	                email:    { required: false, email: true },
	                telefono: { required: false },
	                message:  { required: true, minlength: 10 }
	            },
	            messages:
	            {
	                name:    { required: 'Por favor, introduzca su nombre' },
	                email:   { email   : 'Por favor, introduzca una dirección de correo válida' },
	                message: { required: 'Por favor, introduzca un mensaje con al menos diez caracteres' }
	            },
	            
	            // Do not change code below
	            errorPlacement: function(error, element) {
	                error.insertAfter(element.parent());
	            }
	        });
        }
    };
}();
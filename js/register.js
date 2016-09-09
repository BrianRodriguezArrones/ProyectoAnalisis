$(document).ready(function(){
	$("#register-form").validate({
		submitHandler : function(form) {
		    $('#submit_btn').attr('disabled','disabled');
			$('#submit_btn').button('loading');
			form.submit();
		},
		rules : {
			name : {
				required : true
			},
			email : {
				required : true,
				email: true,
				remote: {
					url: "check-email.php",
					type: "post",
					data: {
						email: function() {
							return $( "#email" ).val();
						}
					}
				}
			},
			password : {
				required : true
			},
			confirm_password : {
				required : true,
				equalTo: "#password"
			},
		},
		messages : {
			name : {
				required : "Ingrese el nombre"
			},
			email : {
				required : "Ingrese el correo",
				remote : "El correo ya existe"
			},
			password : {
				required : "Ingrese su contraseña"
			},
			confirm_password : {
				required : "Confirme su contraseña",
				equalTo: "Confirmación de contraseña no coincide"
			},
			
		},
		errorPlacement : function(error, element) {
			$(element).closest('div').find('.help-block').html(error.html());
		},
		highlight : function(element) {
			$(element).closest('div').removeClass('has-success').addClass('has-error');
		},
		unhighlight: function(element, errorClass, validClass) {
			 $(element).closest('div').removeClass('has-error').addClass('has-success');
			 $(element).closest('div').find('.help-block').html('');
		}
	});
	
	
	$("#registrar-cliente").validate({
		submitHandler : function(form) {
		    $('#submit_btn').attr('disabled','disabled');
			$('#submit_btn').button('loading');
			form.submit();
		},
		rules : {
			nombre : {
				required : true
			},
			apellido : {
				required : true
			},
			celular : {
				required : true
			},
			reparacion : {
				required : true
			},
			entrega : {
				required : true
			},
			hora : {
				required : true
			},
			precio : {
				required : true
			},
			abono : {
				required : true
			},
		},
		messages : {
			nombre : {
				required : "Ingrese el nombre"
			},
			apellido : {
				required : "Ingrese el apellido"
			},
			celular : {
				required : "Ingrese el celular"
			},
			reparacion : {
				required : "Ingrese la reparación"
			},
			entrega : {
				required : "Ingrese la fecha de entrega"
			},
			hora : {
				required : "Ingrese la hora de entrega"
			},
			precio : {
				required : "Ingrese el precio"
			},
			abono : {
				required : "Ingrese el precio"
			},
			
		},
		errorPlacement : function(error, element) {
			$(element).closest('div').find('.help-block').html(error.html());
		},
		highlight : function(element) {
			$(element).closest('div').removeClass('has-success').addClass('has-error');
		},
		unhighlight: function(element, errorClass, validClass) {
			 $(element).closest('div').removeClass('has-error').addClass('has-success');
			 $(element).closest('div').find('.help-block').html('');
		}
	});
	
});
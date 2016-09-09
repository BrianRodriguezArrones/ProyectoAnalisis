$(document).ready(function(){
	
	$("#account-form").validate({
		submitHandler : function(form) {
		    $('#submit_btn').attr('disabled','disabled');
			$('#submit_btn').button('loading');
			form.submit();
		},
		rules : {
			old_password : {
				required : true,
				remote   : {
						url: "check-email.php",
						type: "post",
						data: {
							password: function() {
								return $( "#old_password" ).val();
							},
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
			}
		},
		messages : {
			old_password : {
				required : "Por favor, introduzca la contraseña actual",
				remote : "Por favor, introduzca la contraseña actual correcta"
			},
			password : {
				required : "Por favor, ingrese contraseña"
			},
			confirm_password : {
				required : "Por favor, introduzca la contraseña de confirmación",
				equalTo: "Contraseña y confirmación de contraseña no coincide"
			}
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
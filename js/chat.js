// JavaScript Document

			$(document).on("ready", function(){				
				registerMessages();
				$.ajaxSetup({"cache":false});
				setInterval("loadOldMessages(), 5000");
			});
			var registerMessages = function(){
				$("#send").on("click", function(e){
					e.preventDefault();
					var frm = $("#formChat").serialize();
					$.ajax({
						type: "POST",
						url: "chat/register.php",
						data: frm
						}).done(function(info){
							$("#message").val("");
							var altura = $("#conversation").prop("scrollHeight");
					        $("#conversation").scrollTop(altura);
							console.log ( info );
						})
				});
			}
			var loadOldMessages = function(){
				$.ajax({
					type: "POST",
					url: "chat/conversation.php"
				}).done(function( info ){
					$("#conversation").html( info );
					$("#conversation p:last-child").css({"background-color": "LightBlue", "padding-botton": "20px"})
					var altura = $("#conversation").prop("scrollHeight");
					$("#conversation").scrollTop(altura);
				});
			}
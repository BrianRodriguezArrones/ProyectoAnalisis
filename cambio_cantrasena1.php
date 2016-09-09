<?php 
	if( !empty( $_POST )){
		try {
			$user_obj = new Cl_User();
			$data = $user_obj->account( $_POST );
			if($data)$success = PASSOWRD_CHANAGE_SUCCESS;
		} catch (Exception $e) {
			$error = $e->getMessage();
		} 
	}
?>

		<?php require_once 'templates/ads.php';?>
			<?php require_once 'templates/message.php';?>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="account-form" method="post" class="form-register2" role="form">
						<span for="inputEmail3" class="col-sm-4 control-span">Nombre</span>
						<div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $_SESSION['name']; ?>" disabled>
						</div>
						<span for="inputPassword3" class="col-sm-4 control-span">Correo</span>
						<div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $_SESSION['email']; ?>" disabled>
						</div>
						<span for="inputPassword3" class="col-sm-4 control-span">Contraseña actual</span>
						<div class="col-sm-8">
							<input name="old_password" id="old_password" type="text" class="form-control" placeholder="Contraseña actual">
							<span class="help-block"></span>
						</div>
						<span for="inputPassword3" class="col-sm-4 control-span">Nueva contraseña</span>
						<div class="col-sm-8">
							<input name="password" id="password" type="text" class="form-control" placeholder="Nueva contraseña">
							<span class="help-block"></span>
						</div>
						<span for="inputPassword3" class="col-sm-4 control-span">Confirmar contraseña</span>
						<div class="col-sm-8">
							<input name="confirm_password" id="confirm_password" type="text" class="form-control" placeholder="Confirmar contraseña">
							<span class="help-block"></span>
						</div>
                        <br></br>
					<input type="hidden" id="user_id" name="user_id" value="<?php echo $_SESSION['user_id']; ?>"/>
					<input type="hidden" id="email" value="<?php echo $_SESSION['email']; ?>" />
					<button type="submit" class="btn btn-block bt-login" id="submit_btn" data-loading-text="Cambiando Contraseña....">Cambiar Contraseña</button>
				</form>
     		<?php require_once 'templates/sidebar.php';?>
<script src="js/jquery.validate.min.js"></script>
<script src="js/register.js"></script>
<script src="js/account.js"></script>    
<?php 
ob_start();
session_start();
if (empty($_POST['slider'])) { 
	   $slider="";
	   } else { 
	   $slider = $_POST["slider"];}
require_once 'config.php';  
	if( !empty( $_POST )){
		try {
			$user_obj = new Cl_User();
			$data = $user_obj->login( $_POST );
			if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
				header('Location: inicio.php?slider='.$slider);
			}
		} catch (Exception $e) {
			$error = $e->getMessage();
		}
	}
	//print_r($_SESSION);
	if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
		header('Location: inicio.php?slider='.$slider);
	}
?>
<!doctype html>
<head>
<link rel="shortcut icon" href="imagenes/icono.ico">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Trajes Eventuales</title>
<link href="Cuadricula Fluida/boilerplate.css" rel="stylesheet" type="text/css">
<link href="Cuadricula Fluida/cuadricula fluida.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="menu/css/default.css" />
<link rel="stylesheet" type="text/css" href="menu/css/component.css" />
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/login.css" rel="stylesheet">
<style type="text/css">
body,td,th {
	font-family: Lato, Calibri, Arial, sans-serif;
}
a:hover {
	color: #38499E;
}
</style>
<script src="Cuadricula Fluida/respond.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div style="text-align:center" class="gridContainer clearfix">
   <header class="fluid encabezado">
    <div align="center"><img src="imagenes/logo.jpg" alt="Logo" width="600"/></div>
  </header>
		<div id="div1" class="fluid">
        <?php require_once 'templates/ads.php';?>
		<div class="login-form">
			<?php require_once 'templates/message.php';?>
			<div class="form-header" style="margin-top:20px">
				<i class="fa fa-lock"></i>
			</div>
            <div class="form-signin">
			<form id="registrar-cliente" method="post" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            SISTEMA
            <div style="margin-bottom:10px">
                <select id="slider" name="slider" class="form-control">
                <option value="reparacion"> Reparaciones</option>
                <option value="oscar"> Oscar Fernandez</option>
                <option value="feoli"> Feoli Hermanos</option>
                <option value="confeccion"> Confección</option>
                </select>
             </div><div style="margin-bottom:10px">
             CORREO
				<input name="email" id="email" type="email" class="form-control" placeholder="Correo electronico" autofocus> 
             </div><div style="margin-bottom:10px">
             CONTRASEÑA
				<input name="password" id="password" type="password" class="form-control" placeholder="Contraseña"> 
            </div>
				<button class="btn btn-block bt-login" type="submit" id="submit_btn" data-loading-text="Ingresando..."/>INGRESAR</button>
			</form>
             </div>
			<div class="form-footer">
				<div class="row">
						<div align="center"><i class="fa fa-lock"></i>
						  <a href="contrasena_olvidada.php" title="Recuperar contraseña"> Olvido su contraseña? </a>
		
        
        </div>
		</div>
        </div>
	</div>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/login.js"></script>
<div>
  <p>Compatible con</p>
  <p><img src='imagenes/multiplataforma.png' alt='img'; width='80' height='41' /></p>
  <p><img src='imagenes/navegadores.png' alt='img'; width='135' height='41' /></p>
</div>
</body>
</html>
<?php ob_end_flush(); ?>

<?php 
include("conexion.php");
ob_start();
session_start();
require_once 'config.php'; 
if(!isset($_SESSION['logged_in'])){
	header('Location: index.php');
}
?>
<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!-- InstanceBegin template="/Templates/plantilla.dwt" codeOutsideHTMLIsLocked="false" -->
<!--<![endif]-->
<head>
<link rel="shortcut icon" href="imagenes/icono.ico">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Trajes Eventuales</title>
<!-- InstanceEndEditable -->
<link href="Cuadricula%20Fluida/boilerplate.css" rel="stylesheet" type="text/css">
<link href="Cuadricula%20Fluida/cuadricula%20fluida.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="jquery/jquery-2.1.3.min.js"></script>
<script type="text/javascript">
$(window).load(function () {
  // Una vez se cargue al completo la página desaparecerá el div "cargando"
  $('#cargando').hide();
});
</script>
<style>
#cargando {
	position: absolute;
	width: 100%;
	height: 100%;
	background: #fff url(imagenes/load.gif) no-repeat center;
}
</style>
<style type="text/css">
.imagen {
	margin-bottom: 5px;
}
h1 {
	color: #38499E;
	margin-top: 5px;
	text-align: center;
	font-size: xx-large;
}
h2 {
	color: #38499E;
	font-size: xx-large;
}
body, td, th {
	color: #000000;
	font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-size: 16px;
}
a:active {
	color: #38499E;
}
body {
	background-image: url(imagenes/fondo.png);
	background-repeat: repeat;
}
a:hover {
	color: #38499E;
}
</style>
<!-- 
To learn more about the conditional comments around the html tags at the top of the file:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Do the following if you're using your customized build of modernizr (http://www.modernizr.com/):
* insert the link to your js here
* remove the link below to the html5shiv
* add the "no-js" class to the html tags at the top
* you can also remove the link to respond.min.js if you included the MQ Polyfill in your modernizr build 
-->
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script src="Cuadricula%20Fluida/respond.min.js"></script>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>
<body>
<div id="cargando"></div>
<div class="gridContainer clearfix">
  <header class="fluid encabezado">
    <div id="LayoutDiv1"><img class="imagen" src="imagenes/logo.jpg" alt=""/></div>
    <div id="LayoutDiv2">
      <?php
      if (empty($_GET['slider'])) { 
	        $slider="reparacion";
	     } 
      else { 
	        $slider = $_GET["slider"];
         }
       
       if($slider=="reparacion"){
?>
      <img class="imagen" src="imagenes/reparacion.jpg"/>
      <?php
      }
      if($slider=="oscar"){
?>
      <img class="imagen" src="imagenes/oscar.jpg"/>
      <?php
      }
      if($slider=="feoli"){
?>
      <img class="imagen" src="imagenes/feoli.jpg"/>
      <?php
      }
      if($slider=="confeccion"){
?>
      <img class="imagen" src="imagenes/confeccion.jpg"/>
      <?php
      }
      if($slider=="alquiler"){
?>
      <img class="imagen" src="imagenes/alquiler.jpg"/>
      <?php
      }
?>
    </div>
    <link rel="stylesheet" href="cssslider_files/csss_engine1/style.css">
    <div class='csslider1 autoplay '>
      <?php
	   if($slider=="reparacion"){
	   echo"
	   <input name='cs_anchor1' id='cs_slide1_0' type='radio' class='cs_anchor slide' checked>
		<input name='cs_anchor1' id='cs_slide1_1' type='radio' class='cs_anchor slide' >
		<input name='cs_anchor1' id='cs_slide1_2' type='radio' class='cs_anchor slide' >
		<input name='cs_anchor1' id='cs_slide1_3' type='radio' class='cs_anchor slide' >
		<input name='cs_anchor1' id='cs_slide1_4' type='radio' class='cs_anchor slide' >
	   ";}
	   if($slider=="oscar"){
	   echo"
	   <input name='cs_anchor1' id='cs_slide1_0' type='radio' class='cs_anchor slide' >
		<input name='cs_anchor1' id='cs_slide1_1' type='radio' class='cs_anchor slide' checked>
		<input name='cs_anchor1' id='cs_slide1_2' type='radio' class='cs_anchor slide' >
		<input name='cs_anchor1' id='cs_slide1_3' type='radio' class='cs_anchor slide' >
		<input name='cs_anchor1' id='cs_slide1_4' type='radio' class='cs_anchor slide' >
	   ";}
	   if($slider=="feoli"){
	   echo"
	   <input name='cs_anchor1' id='cs_slide1_0' type='radio' class='cs_anchor slide' >
		<input name='cs_anchor1' id='cs_slide1_1' type='radio' class='cs_anchor slide' >
		<input name='cs_anchor1' id='cs_slide1_2' type='radio' class='cs_anchor slide' checked>
		<input name='cs_anchor1' id='cs_slide1_3' type='radio' class='cs_anchor slide' >
		<input name='cs_anchor1' id='cs_slide1_4' type='radio' class='cs_anchor slide' >
	   ";}
	   if($slider=="confeccion"){
	   echo"
	   <input name='cs_anchor1' id='cs_slide1_0' type='radio' class='cs_anchor slide' >
		<input name='cs_anchor1' id='cs_slide1_1' type='radio' class='cs_anchor slide' >
		<input name='cs_anchor1' id='cs_slide1_2' type='radio' class='cs_anchor slide' >
		<input name='cs_anchor1' id='cs_slide1_3' type='radio' class='cs_anchor slide' checked>
		<input name='cs_anchor1' id='cs_slide1_4' type='radio' class='cs_anchor slide' >
	   ";}
       if($slider=="alquiler"){
	   echo"
	   <input name='cs_anchor1' id='cs_slide1_0' type='radio' class='cs_anchor slide' >
		<input name='cs_anchor1' id='cs_slide1_1' type='radio' class='cs_anchor slide' >
		<input name='cs_anchor1' id='cs_slide1_2' type='radio' class='cs_anchor slide' >
		<input name='cs_anchor1' id='cs_slide1_3' type='radio' class='cs_anchor slide' >
		<input name='cs_anchor1' id='cs_slide1_4' type='radio' class='cs_anchor slide' checked>
	   ";}
	   ?>
      <ul>
        <li class="cs_skeleton"><img src="cssslider_files/csss_images1/reparacion.jpg" style="width: 100%;"></li>
        <li class='num0 img slide'> <a href="inicio.php?slider=reparacion" target=""><img src='cssslider_files/csss_images1/reparacion.jpg' alt='REPARACIONES' title='REPARACIONES' /> </a> </li>
        <li class='num1 img slide'> <a href="inicio.php?slider=oscar" target=""><img src='cssslider_files/csss_images1/oscar.jpg' alt='OSCAR FERNANDEZ' title='OSCAR FERNANDEZ' /> </a> </li>
        <li class='num2 img slide'> <a href="inicio.php?slider=feoli" target=""><img src='cssslider_files/csss_images1/feoli.jpg' alt='FEOLI HERMANOS' title='FEOLI HERMANOS' /> </a> </li>
        <li class='num3 img slide'> <a href="inicio.php?slider=confeccion" target=""><img src='cssslider_files/csss_images1/confeccion.jpg' alt='CONFECCIÓN' title='CONFECCIÓN' /> </a> </li>
        <li class='num4 img slide'> <a href="inicio.php?slider=alquiler" target=""><img src='cssslider_files/csss_images1/alquiler.jpg' alt='ALQUILER' title='ALQUILER' /> </a> </li>
      </ul>
      <div class="cs_engine"><a href="http://cssslider.com">jquery gallery</a> by cssSlider.com v1.9</div>
      <div class='cs_description'>
        <label class='num0'><span class="cs_title"><span class="cs_wrapper">REPARACIONES</span></span></label>
        <label class='num1'><span class="cs_title"><span class="cs_wrapper">OSCAR FERNANDEZ</span></span></label>
        <label class='num2'><span class="cs_title"><span class="cs_wrapper">FEOLI HERMANOS</span></span></label>
        <label class='num3'><span class="cs_title"><span class="cs_wrapper">CONFECCIÓN</span></span></label>
        <label class='num4'><span class="cs_title"><span class="cs_wrapper">ALQUILER</span></span></label>
      </div>
      <div class='cs_arrowprev'>
        <label class='num0' for='cs_slide1_0'><span><i></i><b></b></span></label>
        <label class='num1' for='cs_slide1_1'><span><i></i><b></b></span></label>
        <label class='num2' for='cs_slide1_2'><span><i></i><b></b></span></label>
        <label class='num3' for='cs_slide1_3'><span><i></i><b></b></span></label>
        <label class='num4' for='cs_slide1_4'><span><i></i><b></b></span></label>
      </div>
      <div class='cs_arrownext'>
        <label class='num0' for='cs_slide1_0'><span><i></i><b></b></span></label>
        <label class='num1' for='cs_slide1_1'><span><i></i><b></b></span></label>
        <label class='num2' for='cs_slide1_2'><span><i></i><b></b></span></label>
        <label class='num3' for='cs_slide1_3'><span><i></i><b></b></span></label>
        <label class='num4' for='cs_slide1_4'><span><i></i><b></b></span></label>
      </div>
    </div>
  </header>
  <div class="fluid cajamenu">
    <div>
      <link rel="stylesheet" type="text/css" href="menu/css/default.css" />
      <link rel="stylesheet" type="text/css" href="menu/css/component.css" />
      <script src="menu/js/modernizr.custom.js"></script>
      <nav id="menu" class="nav">
        <ul>
          <li> <a href="inicio.php?slider=<?php echo $slider; ?>"> <span class="icon"> <i aria-hidden="true" class="icon-home"></i> </span> <span>Inicio</span> </a> </li>
          <li> <a href="agenda.php?slider=<?php echo $slider; ?>"> <span class="icon"> <i aria-hidden="true" class="icon-blog"></i> </span> <span>Agenda</span> </a> </li>
          <li> <a href="agregar.php?slider=<?php echo $slider; ?>"> <span class="icon"> <i aria-hidden="true" class="icon-team"></i> </span> <span>Agregar</span> </a> </li>
          <li> <a href="buscar.php?slider=<?php echo $slider; ?>"> <span class="icon"> <i aria-hidden="true" class="icon-services"></i> </span> <span>Buscar</span> </a> </li>
          <li> <a href="recibo.php?slider=<?php echo $slider; ?>"> <span class="icon"> <i aria-hidden="true" class="icon-portfolio"></i> </span> <span>Recibo</span> </a> </li>
          <li> <a href="usuario.php?slider=<?php echo $slider; ?>"> <span class="icon"> <i aria-hidden="true" class="icon-contact"></i> </span> <span><?php echo $_SESSION['name']; ?></span> </a> </li>
        </ul>
      </nav>
      <script>
			var changeClass = function (r,className1,className2) {
				var regex = new RegExp("(?:^|\\s+)" + className1 + "(?:\\s+|$)");
				if( regex.test(r.className) ) {
					r.className = r.className.replace(regex,' '+className2+' ');
			    }
			    else{
					r.className = r.className.replace(new RegExp("(?:^|\\s+)" + className2 + "(?:\\s+|$)"),' '+className1+' ');
			    }
			    return r.className;
			};	
			var menuElements = document.getElementById('menu');
			menuElements.insertAdjacentHTML('afterBegin','<button type="button" id="menutoggle" class="navtoogle" aria-hidden="true"><i aria-hidden="true" class="icon-menu"> </i> Menu</button>');
			document.getElementById('menutoggle').onclick = function() {
				changeClass(this, 'navtoogle active', 'navtoogle');
			}
			document.onclick = function(e) {
				var mobileButton = document.getElementById('menutoggle'),
					buttonStyle =  mobileButton.currentStyle ? mobileButton.currentStyle.display : getComputedStyle(mobileButton, null).display;
				if(buttonStyle === 'block' && e.target !== mobileButton && new RegExp(' ' + 'active' + ' ').test(' ' + mobileButton.className + ' ')) {
					changeClass(mobileButton, 'navtoogle active', 'navtoogle');
				}
			}
		</script> 
    </div>
  </div>
  <div class="fluid subtitulo" class="subtitulo">
  <!-- InstanceBeginEditable name="subtitulo" -->
  <?php
if ($slider=="reparacion"){
	echo "<h1 align='center'>Reparaciones / Recibo</h1>";
	};
if ($slider=="oscar"){
	echo "<h1 align='center'>Oscar / Recibo</h1>";
	};
if ($slider=="feoli"){
	echo "<h1 align='center'>Feoli / Recibo</h1>";
	};
if ($slider=="confeccion"){
	echo "<h1 align='center'>Confección / Recibo</h1>";
	};
if ($slider=="alquiler"){
	echo "<h1 align='center'>Alquiler / Recibo</h1>";
	};
?>
  <!-- InstanceEndEditable --> </div>
<div class="fluid informacion " align="center"><!-- InstanceBeginEditable name="informacion0" -->
  <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/login.css" rel="stylesheet">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
  <script src="jquery/jquery-2.1.3.min.js"></script> 
  <script src="js/bootstrap.min.js"></script> 
  <script src="js/chat.js"></script>
  <div class="login-form">
    <div class="form-header"> <i class="fa fa-wechat"></i> </div>
    <div class="form-register">
      <button class="btn btn-block bt-login" data-loading-text="Procesando...." data-toggle="modal" data-target="#myModal">Abrir chat</button>
    </div>
  </div>
  <div class="container">
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <i class="fa fa-wechat" style="font-size:60px"></i> </div>
          <div class="modal-body">
            <div  class="container-fluid">
              <section>
                <div class="row">
                  <form id="formChat" role="form">
                    <div class="form-group">
                      <label for="user">
                      <h3>Usuario</h3>
                      </label>
                      <input type="text" class="form-control" id="user" name="user" value="<?php echo $_SESSION['name']; ?>">
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-12" >
                          <div id="conversation" style="height:200px; border: 1px solid #CCCCCC; padding: 12px;  border-radius: 5px; overflow-x: hidden; text-align:left; color:#000000"> </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="message">
                      <h3>Mensaje</h3>
                      </label>
                      <textarea id="message" name="message" placeholder="Ingresar mensaje"  class="form-control" rows="3"></textarea>
                    </div>
                    <button id="send" class="btn btn-block bt-login" >Enviar</button>
                  </form>
                </div>
              </section>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- InstanceEndEditable --></div>
<div class="fluid informacion1 zeroMargin_desktop" align="center"><!-- InstanceBeginEditable name="informacion1" --><!-- InstanceEndEditable --></div>
<div class="fluid informacion2 "><!-- InstanceBeginEditable name="informacion2" --><!-- InstanceEndEditable --></div>
<div class="fluid informacion3 zeroMargin_desktop"><!-- InstanceBeginEditable name="informacion3" --><!-- InstanceEndEditable --></div>
<div class="fluid informacion4 "><!-- InstanceBeginEditable name="informacion4" --><!-- InstanceEndEditable --></div>
<div class="fluid informacion5 zeroMargin_desktop"><!-- InstanceBeginEditable name="informacion5" --><!-- InstanceEndEditable --></div>
<div class="fluid informacion6 "><!-- InstanceBeginEditable name="informacion6" --><!-- InstanceEndEditable --></div>
<footer class="fluid piepagina">
  <div align="center">
    <p>Compatible con</p>
    <p><img src='imagenes/multiplataforma.png' alt='img'; width='80' height='41' /></p>
    <p><img src='imagenes/navegadores.png' alt='img'; width='135' height='41' /></p>
  </div>
</footer>
</div>
</body>
<!-- InstanceEnd -->
</html>
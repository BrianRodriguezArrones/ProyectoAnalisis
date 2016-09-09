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
<html><!-- InstanceBegin template="/Templates/plantilla.dwt" codeOutsideHTMLIsLocked="false" -->
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
			<li class='num0 img slide'>  <a href="inicio.php?slider=reparacion" target=""><img src='cssslider_files/csss_images1/reparacion.jpg' alt='REPARACIONES' title='REPARACIONES' /> </a> </li>
			<li class='num1 img slide'>  <a href="inicio.php?slider=oscar" target=""><img src='cssslider_files/csss_images1/oscar.jpg' alt='OSCAR FERNANDEZ' title='OSCAR FERNANDEZ' /> </a> </li>
			<li class='num2 img slide'>  <a href="inicio.php?slider=feoli" target=""><img src='cssslider_files/csss_images1/feoli.jpg' alt='FEOLI HERMANOS' title='FEOLI HERMANOS' /> </a> </li>
			<li class='num3 img slide'>  <a href="inicio.php?slider=confeccion" target=""><img src='cssslider_files/csss_images1/confeccion.jpg' alt='CONFECCIÓN' title='CONFECCIÓN' /> </a> </li>
			<li class='num4 img slide'>  <a href="inicio.php?slider=alquiler" target=""><img src='cssslider_files/csss_images1/alquiler.jpg' alt='ALQUILER' title='ALQUILER' /> </a> </li>
		</ul><div class="cs_engine"><a href="http://cssslider.com">jquery gallery</a> by cssSlider.com v1.9</div>
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
  <div class="fluid subtitulo" class="subtitulo"> <!-- InstanceBeginEditable name="subtitulo" -->
    <h2 align="center">Editar / Reparación</h2>
    <!-- InstanceEndEditable --> </div>
  <div class="fluid informacion " align="center"><!-- InstanceBeginEditable name="informacion0" -->
   <?php
setlocale (LC_ALL, "es_CR.UTF-8","es_CR","esp");
	date_default_timezone_set('America/Costa_Rica'); 
$id_reparacion=$_GET["id"];
$pagina = $_GET['pagina'];
$sql="select * from reparacion INNER JOIN clientes ON reparacion.id_cliente=clientes.id_cliente where id_reparacion='$id_reparacion'";
		$cs=mysqli_query($cn,$sql);
		while($fila=mysqli_fetch_array($cs)){
			$id_reparacion=$fila["id_reparacion"];
			$cod_reparacion=$fila["cod_reparacion"];
			$cod_cliente=$fila["cod_cliente"];
			$nombre=$fila["nombre"];
			$apellido=$fila["apellido"];
			$celular=$fila["celular"];
			$telefono=$fila["telefono"];
			$reparacion=$fila["reparacion"];
			$entrega=$fila["entrega"];
			$hora=$fila["hora"];
			$foto=$fila["foto"];
			$precio=$fila["precio"];
			$abono=$fila["abono"];
			$saldo=$fila["saldo"];
			$estado=$fila["estado"];
			}
if(isset($_POST["btn1"])){
	$btn=$_POST["btn1"];
	    $id_reparacion=$_POST["id_reparacion"];
		$cod_reparacion=$_POST["cod_reparacion"];
		$nombre=$_POST["nombre"];
		$apellido=$_POST["apellido"];
		$celular=$_POST["celular"];
		$telefono=$_POST["telefono"];
		$reparacion=$_POST["reparacion"];
        $entrega=$_POST["entrega"];
		$hora=$_POST["hora"];
		$precio=$_POST["precio"];
		$abono=$_POST["abono"];
		$saldo=$precio-$abono;
		$estado=$_POST["estado"];
		$sql="UPDATE reparacion SET cod_reparacion='$cod_reparacion',reparacion='$reparacion',entrega='$entrega',hora='$hora',precio='$precio',abono='$abono',saldo='$saldo',estado='$estado' WHERE cod_reparacion='$cod_reparacion'";
	    $cs=mysqli_query($cn,$sql);
		
		$sql1="UPDATE clientes SET nombre='$nombre',apellido='$apellido',celular='$celular',telefono='$telefono' WHERE cod_cliente='$cod_cliente'";
	    $cs1=mysqli_query($cn,$sql1);
		
	 if(!empty($_FILES['file']['tmp_name']))
  {
	  $tmpimagen = $_FILES['file']['tmp_name'];
	  $urlnueva = "fotos/temp.jpg";
	  $urlfoto = "./fotos/".$cod_reparacion.".jpg";
	  move_uploaded_file($tmpimagen,$urlnueva);
	  $sql="update reparacion set foto='$urlfoto' where cod_reparacion='$cod_reparacion'";
	  $cs=mysqli_query($cn,$sql); 
	  $type = $_FILES['file']['name'];
      $ext = explode('.', $type);
      $extension = end($ext);
	if ($extension == "gif")
    {
        $img_original = imagecreatefromgif($urlnueva);
    }
	elseif ($extension == "jpg")
    {
        $img_original = imagecreatefromjpeg($urlnueva);
    }
    elseif ($extension == "jpeg")
    {
        $img_original = imagecreatefromjpeg($urlnueva);
    }
    elseif ($extension == "png")
    {
        $img_original = imagecreatefrompng($urlnueva);
    }
    else
    {
        $img_original = imagecreatefromwbmp($urlnueva);
    }
	
	$max_ancho = 800;
	$max_alto = 600;
	list($ancho,$alto)=getimagesize($urlnueva);
	$x_ratio = $max_ancho / $ancho;
	$y_ratio = $max_alto / $alto;
	if( ($ancho <= $max_ancho) && ($alto <= $max_alto) ){
		$ancho_final = $ancho;
		$alto_final = $alto;
	}
	elseif (($x_ratio * $alto) < $max_alto){
		$alto_final = ceil($x_ratio * $alto);
		$ancho_final = $max_ancho;
	}
	else{
		$ancho_final = ceil($y_ratio * $ancho);
		$alto_final = $max_alto;
	}
	$tmp=imagecreatetruecolor($ancho_final,$alto_final);	
	imagecopyresampled($tmp,$img_original,0,0,0,0,$ancho_final, $alto_final,$ancho,$alto);
	imagedestroy($img_original);
	$calidad=95;
	imagejpeg($tmp,"./fotos/".$cod_reparacion.".jpg",$calidad);
  } 
		echo "<script>
        var r = confirm('Se actualizo correctamente. Desea IMPRIMIR la etiqueta?');
		var cod_reparacion = '$cod_reparacion';
		var slider = '$slider';
        if (r == true) {
			var url = 'dymo.php?cod_reparacion=' + cod_reparacion + '&slider=' + slider;
             window.open(url, '_blank');
        }
        </script>";
		$sec = "1";
	    header("Refresh: $sec; url=".$pagina.".php?slider=".$slider."");
	}
?>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <div class="login-form">
      <div class="form-header"> <i class="fa fa-pencil"></i> </div>
      <form method="post" class="form-register" enctype="multipart/form-data">
        <div> <img src="<?php echo $foto?>" alt="" /> <br>
          </br>
        </div>
        <div>
          <input type="hidden" id="id_reparacion" name="id_reparacion" value="<?php echo $id_reparacion?>">
        <div align="center">CODIGO REPARACIÓN
          <input class="form-control" name="cod_reparacion" type="text" id="cod_reparacion" value="<?php echo $cod_reparacion?>" readonly/>
        </div>
        <div align="center">CODIGO CLIENTE
          <input class="form-control" name="cod_cliente" type="text" id="cod_cliente" value="<?php echo $cod_cliente?>" readonly/>
        </div>
        <div align="center">ESTADO
          <datalist id="listas">
            <option value=" Reparar">
            <option value=" Reparando">
            <option value=" Listo">
            <option value=" Entregado"> 
          </datalist>
          <input class="form-control" name="estado" list="listas" value="<?php echo $estado?>">
        </div>
        <div align="center">NOMBRE
          <input class="form-control" name="nombre" type="text" id="nombre" value="<?php echo $nombre?>"/>
        </div>
        <div align="center">APELLIDOS
          <input class="form-control" name="apellido" type="text" id="apellido" value="<?php echo $apellido?>"/>
        </div>
        <div align="center">CELULAR
          <input class="form-control" name="celular" type="tel" id="celular" pattern="[0-9]{8}" value="<?php echo $celular?>"/>
        </div>
        <div align="center">TELEFONO
          <input class="form-control" name="telefono" type="tel" id="telefono" pattern="[0-9]{8}" value="<?php echo $telefono?>"/>
        </div>
        <div align="center">REPARACIÓN
          <input class="form-control" name="reparacion" type="text" id="reparacion" value="<?php echo $reparacion?>"/>
        </div>
        <div align="center">ENTREGA
          <input class="form-control" name="entrega" type="date" id="entrega" value="<?php echo $entrega?>"/>
        </div>
        <div align="center">HORA
          <input class="form-control" name="hora" type="time" id="hora" value="<?php echo $hora?>"/>
        </div>
        <div align="center">PRECIO
          <input class="form-control" name="precio" type="text" id="precio" value="<?php echo $precio?>"/>
        </div>
        <div align="center">ABONO
          <input class="form-control" name="abono" type="text" id="abono" value="<?php echo $abono?>"/>
        </div>
        <div align="center">SALDO
          <input class="form-control" name="saldo" type="text" id="saldo" value="<?php echo $saldo?>" readonly/>
        </div>
        <div align="center">FOTO
          <div class="image"> <img src="" id="image"> </div>
          <div>
            <input type="file" id="files" name="file" class="form-control" onchange="handleFiles()" />
            <span class="help-block"></span>
            <div id="progress_bar">
              <div class="percent">0%</div>
            </div>
          </div>
        </div>
        <div>
          <button class="btn btn-block bt-login" type="submit" name="btn1" data-loading-text="Actualizando...." >Actualizar</button>
          <form onsubmit="setTimeout('document.forms[0].reset()', 2000)">
        </div>
        <div align="center"></div>
      </form>
    </div>
    </div>
    <script>
function handleFiles() //Cambiar margen tamaño imagenes
{
    var filesToUpload = document.getElementById('files').files;
    var file = filesToUpload[0];
    var img = document.createElement("img");
    var reader = new FileReader();
    reader.onload = function(e)
    {
        img.src = e.target.result;
        var canvas = document.createElement("canvas");
        var ctx = canvas.getContext("2d");
        ctx.drawImage(img, 0, 0);
        var MAX_WIDTH = 400;
        var MAX_HEIGHT = 300;
        var width = img.width;
        var height = img.height;
        if (width > height) {
          if (width > MAX_WIDTH) {
            height *= MAX_WIDTH / width;
            width = MAX_WIDTH;
          }
        } else {
          if (height > MAX_HEIGHT) {
            width *= MAX_HEIGHT / height;
            height = MAX_HEIGHT;
          }
        }
        canvas.width = width;
        canvas.height = height;
        var ctx = canvas.getContext("2d");
        ctx.drawImage(img, 0, 0, width, height);
        var dataurl = canvas.toDataURL("image/jpg");
        document.getElementById('image').src = dataurl;     
    }
    reader.readAsDataURL(file);
    var fd = new FormData();
    fd.append("name", "some_filename.jpg");
    fd.append("image", dataurl);
    fd.append("info", "lah_de_dah");
}</script>
    <style>
  #progress_bar {
    margin: 10px 0;
    padding: 3px;
    border: 1px solid #000;
    font-size: 14px;
    clear: both;
    opacity: 0;
    -moz-transition: opacity 1s linear;
    -o-transition: opacity 1s linear;
    -webkit-transition: opacity 1s linear;
  }
  #progress_bar.loading {
    opacity: 1.0;
  }
  #progress_bar .percent {
    background-color: #99ccff;
    height: auto;
    width: 0;
  }
</style>
    <script>
  var reader;
  var progress = document.querySelector('.percent');

  function abortRead() {
    reader.abort();
  }

  function errorHandler(evt) {
    switch(evt.target.error.code) {
      case evt.target.error.NOT_FOUND_ERR:
        alert('Archivo no encontrado!');
        break;
      case evt.target.error.NOT_READABLE_ERR:
        alert('El archivo no es legible');
        break;
      case evt.target.error.ABORT_ERR:
        break; // noop
      default:
        alert('Se produjo un error al leer este archivo.');
    };
  }

  function updateProgress(evt) {
    // evt is an ProgressEvent.
    if (evt.lengthComputable) {
      var percentLoaded = Math.round((evt.loaded / evt.total) * 100);
      // Increase the progress bar length.
      if (percentLoaded < 100) {
        progress.style.width = percentLoaded + '%';
        progress.textContent = percentLoaded + '%';
      }
    }
  }

  function handleFileSelect(evt) {
    // Reset progress indicator on new file selection.
    progress.style.width = '0%';
    progress.textContent = '0%';

    reader = new FileReader();
    reader.onerror = errorHandler;
    reader.onprogress = updateProgress;
    reader.onabort = function(e) {
      alert('File read cancelled');
    };
    reader.onloadstart = function(e) {
      document.getElementById('progress_bar').className = 'loading';
    };
    reader.onload = function(e) {
      // Ensure that the progress bar displays 100% at the end.
      progress.style.width = '100%';
      progress.textContent = '100%';
      setTimeout("document.getElementById('progress_bar').className='';", 2000);
    }

    // Read in the image file as a binary string.
    reader.readAsBinaryString(evt.target.files[0]);
  }

  document.getElementById('files').addEventListener('change', handleFileSelect, false);
</script> 
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
<!-- InstanceEnd --></html>
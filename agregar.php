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
    echo "<h1 align='center'>Reparaciones / Agregar</h1>";
};
if ($slider=="oscar"){
    echo "<h1 align='center'>Oscar / Agregar</h1>";
};
if ($slider=="feoli"){
    echo "<h1 align='center'>Feoli / Agregar</h1>";
};
if ($slider=="confeccion"){
    echo "<h1 align='center'>Confección / Agregar</h1>";
};
if ($slider=="alquiler"){
    echo "<h1 align='center'>Alquiler / Agregar</h1>";
};
?>
  <!-- InstanceEndEditable --> </div>
<div class="fluid informacion " align="center">
<!-- InstanceBeginEditable name="informacion0" -->
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/login.css" rel="stylesheet">
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.validate.min.js"></script> 
<script src="js/register.js"></script>
<?php
setlocale (LC_ALL, "es_CR.UTF-8","es_CR","esp");
date_default_timezone_set('America/Costa_Rica');
$nameimagen="sin_imagen.png";
$atendido=$_SESSION['name'];
$entrega="";
$hora="";
$temp="";
$nom="";
$ape="";
$cod_reparacion="";
$id_cliente="";
$cod_cliente="";
$nombre="";
$apellido="";
$celular="";
$telefono="";
$estado=" Reparar";
$entro=date("Y-m-d H:i:s");
$salio="No ha Salido";
$nomas="";
$reparacion="";
$precio="";
$abono="";
$validar=""; //Para saber si el cliente fue seleccionado
$alert=0; // Para no registrar si el cliente tiene mismo nombre y apellido

if(isset($_POST["btn1"])){
    $btn=$_POST["btn1"];
    if($btn=="reparacion"){
        $cod_reparacion=$_POST["cod_reparacion"];
        $id_cliente=$_POST["id_cliente"];
        $cod_cliente=$_POST["cod_cliente"];
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
        $nomas=$_POST["nomas"];
		$validar=$_POST["validar"];
		
		$sql="SELECT * FROM clientes WHERE nombre = '$nombre' AND apellido = '$apellido'";
        $cs=mysqli_query($cn,$sql);
        while($fila=mysqli_fetch_array($cs)){
            $nom=$fila["nombre"];
            $ape=$fila["apellido"];
        } 
		    //Verifica que no exista un cliente con el mismo nombre y apellido
            if($nombre.$apellido == $nom.$ape)
            {
				//Valida si el cliente ya existe o fue seleccionado
		        if (empty($validar))
		        {
				   echo "<script>alert('¡El nombre de este cliente ya se encuentra en el sistema!');</script>";
				    $nombre="";
				    $apellido="";
					$alert = 1;
		        }
				else
				{
					//Actualiza cliente
					$sql="UPDATE clientes SET cod_cliente='$cod_cliente',nombre='$nombre',apellido='$apellido',celular='$celular',telefono='$telefono' WHERE cod_cliente='$cod_cliente'";
                    mysqli_query($cn,$sql);
				}
            }
            else
            {
		//Guarda cliente
		$sql="INSERT INTO clientes(cod_cliente, nombre,apellido,celular,telefono)values('$cod_cliente','$nombre','$apellido','$celular','$telefono')";
            mysqli_query($cn,$sql);
			$validar = "validar";
			if(empty($telefono)){
                $telefono="00000000";
                $sql="UPDATE clientes SET telefono='$telefono' WHERE cod_cliente='$cod_cliente'";
                mysqli_query($cn,$sql);
            }
			}
			if ($alert == 0)
			{
	     //Guarda reparacion
        $sql="INSERT INTO reparacion(cod_reparacion,reparacion,entrega,hora,precio,abono,saldo,estado,entro,salio,atendido,id_cliente) VALUES    ('$cod_reparacion','$reparacion','$entrega','$hora','$precio','$abono','$saldo','$estado','$entro','$salio','$atendido','$id_cliente')";
        mysqli_query($cn,$sql);
		//Limpiamos variables
		$reparacion="";
		$precio="";
		$abono="";
        //Guarda imagen
        if(!empty($_FILES['file']['tmp_name']))
        {
            $tmpimagen = $_FILES['file']['tmp_name'];
            $urlnueva = "fotos/temp.jpg";
            $urlfoto = "./fotos/".$cod_reparacion.".jpg";
            copy($tmpimagen,$urlnueva);
            $sql="UPDATE reparacion SET foto='$urlfoto' WHERE cod_reparacion='$cod_reparacion'";
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
            $calidad=80;
            imagejpeg($tmp,"./fotos/".$cod_reparacion.".jpg",$calidad);
            } else {
            $urlnueva = "fotos/sin_imagen.png";
            $sql="UPDATE reparacion SET foto='$urlnueva' WHERE cod_reparacion='$cod_reparacion'";
            $cs=mysqli_query($cn,$sql);
        }
        if ($_POST['telefono']=='')
        {
            $telefono="00000000";
            $sql="UPDATE reparacion SET telefono = '$telefono' WHERE cod_reparacion='$cod_reparacion'";
            $cs=mysqli_query($cn,$sql);
        }
        echo "<script>
        var r = confirm('Se guardo correctamente. Desea IMPRIMIR la etiqueta?');
        var cod_reparacion = '$cod_reparacion';
        var slider = '$slider';
        if (r == true) {
            var url = 'dymo.php?cod_reparacion=' + cod_reparacion + '&slider=' + slider;
             window.open(url, '_blank');
        }
        else {
        }
        </script>";
}
	}

if($btn=="feoli"){
		$cod_feoli=$_POST["cod_feoli"];
        $id_cliente=$_POST["id_cliente"];
        $cod_cliente=$_POST["cod_cliente"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $celular=$_POST["celular"];
        $telefono=$_POST["telefono"];
        $reparacion=$_POST["reparacion"];
        $entrega=$_POST["entrega"];
        $hora=$_POST["hora"];
        $precio=$_POST["precio"];
        $nomas=$_POST["nomas"];
        $sql1="INSERT INTO feoli(cod_feoli,reparacion,entrega,hora,precio,estado,entro,salio,recibio,id_cliente) values    ('$cod_feoli','$reparacion','$entrega','$hora','$precio','$estado','$entro','$salio','$atendido','$id_cliente')";
        $cs=mysqli_query($cn,$sql1);
        $sql2="SELECT * FROM clientes WHERE cod_cliente = '$cod_cliente'";
        $cs2=mysqli_query($cn,$sql2);
        while($fila=mysqli_fetch_array($cs2)){
            $temp=$fila["cod_cliente"];
			$nom=$fila["nombre"];
			$ape=$fila["apellido"];
        }
		//Verifica que no exista un cliente con el mismo nombre y apellido
			if($nombre.$apellido == $nom.$ape)
			{
				$sec = "1";
	            header("Refresh: $sec; url=agregar.php?slider=".$slider."");
				echo "<script>alert('¡El nombre de este cliente ya se encuentra en el sistema!');</script>";
			}
			else
			{
        if($cod_cliente!==$temp){
            $sql2="INSERT INTO clientes(cod_cliente, nombre,apellido,celular,telefono)values('$cod_cliente','$nombre','$apellido','$celular','$telefono')";
            $cs=mysqli_query($cn,$sql2);
            if(empty($telefono)){
                $telefono="00000000";
                $sql3="UPDATE clientes SET telefono='$telefono' WHERE cod_cliente='$cod_cliente'";
                $cs=mysqli_query($cn,$sql3);
            }
        }
        else{
            $sql="UPDATE clientes SET cod_cliente='$cod_cliente',nombre='$nombre',apellido='$apellido',celular='$celular',telefono='$telefono' WHERE cod_cliente='$cod_cliente'";
            $cs=mysqli_query($cn,$sql);
        }
        if(!empty($_FILES['file']['tmp_name']))
        {
            $tmpimagen = $_FILES['file']['tmp_name'];
            $urlnueva = "fotos/temp.jpg";
            $urlfoto = "./fotos/".$cod_feoli.".jpg";
            copy($tmpimagen,$urlnueva);
            $sql="UPDATE feoli SET foto='$urlfoto' WHERE cod_feoli='$cod_feoli'";
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
            $calidad=80;
            imagejpeg($tmp,"./fotos/".$cod_feoli.".jpg",$calidad);
            } else {
            $urlnueva = "fotos/sin_imagen.png";
            $sql="UPDATE feoli set foto='$urlnueva' WHERE cod_feoli='$cod_feoli'";
            $cs=mysqli_query($cn,$sql);
        }
        if ($_POST['telefono']=='')
        {
            $telefono="00000000";

            $sql="UPDATE feoli set telefono = '$telefono' WHERE cod_feoli='$cod_feoli'";
            $cs=mysqli_query($cn,$sql);
        }
        echo "<script>
        var r = confirm('Se guardo correctamente. Desea IMPRIMIR la etiqueta?');
		var cod_feoli = '$cod_feoli';
		var slider = '$slider';
        if (r == true) {
			var url = 'dymo.php?cod_feoli=' + cod_feoli + '&slider=' + slider;
             window.open(url, '_blank');
        }
        else {
        }
        </script>";
	}
	}
}

if ($slider=="reparacion"){
    $sql="SELECT count(cod_reparacion),Max(cod_reparacion) FROM reparacion";
    $cs=mysqli_query($cn,$sql); 
    while($fila=mysqli_fetch_array($cs)){
	  $count=$fila[0];$max=$fila[1];}if($count==0){$cod_reparacion="R-0001";}else{$cod_reparacion='R-'.substr((substr($max,2)+10001),1);
	}
};
if ($slider=="feoli"){
    $sql="SELECT count(cod_feoli),Max(cod_feoli) FROM feoli";
    $cs=mysqli_query($cn,$sql); 
    while($fila=mysqli_fetch_array($cs)){
	  $count=$fila[0];$max=$fila[1];}if($count==0){$cod_feoli="F-0001";}else{$cod_feoli='F-'.substr((substr($max,2)+10001),1);
	}
};

if($nomas==""){
    $sql="SELECT count(cod_cliente),Max(cod_cliente) FROM clientes";
    $cs=mysqli_query($cn,$sql); while($fila=mysqli_fetch_array($cs)){$count=$fila[0];$max=$fila[1]; }if($count==0){$cod_cliente="C-0001";}else{ $cod_cliente='C-'.substr((substr($max,2)+10001),1);}
    
    $sql="SELECT max(id_cliente) AS maximo FROM clientes";
    $cs=mysqli_query($cn,$sql);
    $fila=mysqli_fetch_array($cs);
    $id_cliente=$fila["maximo"]+1;
}
?>
<script>
var xmlhttp;
function loadDoc(string,url,cfunc)
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=cfunc;
xmlhttp.open("POST",url,true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send(string);
}

function myFunction5(){
var n=document.getElementById('nombre').value;
if(n==''){
 document.getElementById("myDiv").innerHTML="";
 document.getElementById("myDiv").style.border="0px";
 document.getElementById("pers").innerHTML="";
 document.getElementById("registrar-cliente").reset();
 return;
}
loadDoc("q="+n,"buscador_ajax_1.php",function(){
  if (xmlhttp.readyState==4 && xmlhttp.status==200){
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    document.getElementById("myDiv").style.border="1px solid #A5ACB2";
    }else{ document.getElementById("myDiv").innerHTML='<img src="imagenes/load.gif" width="50" height="50" />'; }
  });
}
function myFunction2(id_cliente,cod_cliente, nombre, apellido, celular, telefono){
document.getElementById("myDiv").innerHTML="";
document.getElementById("myDiv").style.border="0px";
loadDoc("vcod="+id_cliente,"buscador_ajax_2.php",function(){
	document.getElementById('id_cliente').value=id_cliente;
	document.getElementById('cod_cliente').value=cod_cliente;
	document.getElementById('nombre').value=nombre;
	document.getElementById('apellido').value=apellido;
	document.getElementById('celular').value=celular;
	document.getElementById('telefono').value=telefono;
	document.getElementById('validar').value=nombre;
  if (xmlhttp.readyState==4 && xmlhttp.status==200){
    document.getElementById("pers").innerHTML=xmlhttp.responseText;
    }else{ document.getElementById("pers").innerHTML='<img src="imagenes/load.gif" width="50" height="50" />'; }
  });
}

function limpiar(){
	document.getElementById("submit_btn").disabled = false;  
	document.getElementById("registrar-reparacion").reset();
}
</script>
<style>
.sugerencias:hover{
 background-color:#D3D3D3;
 cursor:pointer;
}
</style>
<?php

if ($slider=="reparacion"){
echo "
      <div class='login-form'>
        <div class='form-header'> 
        <i class='fa fa-user'></i> 
        </div>
        <div class='form-register'>
		
		<br></br>
        <form method='post' role='form' id='registrar-cliente' enctype='multipart/form-data' name='fe'>
          <div align='center'>CODIGO CLIENTE
            <input name='cod_cliente' type='text' id='cod_cliente' value='$cod_cliente' class='form-control' readonly></input>
            <input name='id_cliente' type='hidden' id='id_cliente' value='$id_cliente' class='form-control' readonly></input>
            <span class='help-block'></span> 
            </div>
          <div align='center'>NOMBRE
            <input type='text' id='nombre' name='nombre' value='$nombre' onkeyup='myFunction5()' size='30' placeholder='Nombre' autocomplete='off' class='form-control'></input>
            <span class='help-block'></span> 
            </div>
            <div id='myDiv' align='left'></div>
            <div id='pers'></div>
          <div align='center'>APELLIDO
            <input name='apellido' type='text' id='apellido' class='form-control' placeholder='Apellidos' autocomplete='on' value='$apellido'></input>
            <span class='help-block'></span> 
            </div>
          <div align='center'>CELULAR
            <input name='celular' id='celular' type='tel' class='form-control' placeholder='Celular' pattern='[0-9]{8}' value='$celular' autocomplete='on'></input>
            <span class='help-block'></span> 
            </div>
          <div align='center'>TELEFONO
            <input name='telefono' id='telefono' type='tel' class='form-control' placeholder='Telefono' pattern='[0-9]{8}' value='$telefono' autocomplete='on'></input>
            <span class='help-block'></span> 
            </div>
            <input type='hidden' name='validar' id='validar'class='form-control' value='$validar'></input>
		<footer class='fluid piepagina'></footer>
		<br></br>
        <i class='fa fa-scissors' style='font-size:60px'></i> 
		<br></br>
		
					<table width='200' border='0' align='left'>
  <tbody>
    <tr>
      <td align='center'><img src='imagenes/add.png' alt='img'; width='40' height='40'></td>
	  <td align='center'><img src='imagenes/ver1.png' alt='img'; width='40' height='40'></td>
    </tr>
  </tbody>
</table>
		<br></br><br></br>
            <div align='center'>CODIGO REPARACIÓN
            <input name='cod_reparacion' type='text' id='cod_reparacion' value='$cod_reparacion' class='form-control' readonly></input>
            <span class='help-block'></span> 
            </div>
          <div align='center'>REPARACIÓN
            <textarea name='reparacion' id='reparacion' type='text' class='form-control' placeholder='Reparación' autocomplete='on'>$reparacion</textarea>
            <span class='help-block'></span> 
            </div>
            <div align='center'>PRECIO
            <input name='precio' id='precio' type='number' class='form-control' placeholder='Precio' autocomplete='on' value='$precio'></input>
            <span class='help-block'></span> 
            </div>
			
			<table width='200' border='1'>
  <tbody>
    <tr>
      <td>CODIGO</td>
      <td>REPARACIÓN</td>
      <td>PRECIO</td>
	  <td>Eliminar</td>
    </tr>
	<tr>
      <td>R-0010</td>
      <td>Largo 100cm</td>
      <td>¢3000</td>
	  <td align='center'><img src='imagenes/menos.png' alt='img'; width='30' height='30'></td>
    </tr>
  </tbody>
</table>
			
            <div align='center'>ABONO
            <input name='abono' id='abono' type='number' class='form-control' placeholder='Abono' autocomplete='on' value='$abono'></input>
            <span class='help-block'></span> 
            </div>
          <div align='center'>FECHA DE ENTREGA
            <input name='entrega' id='entrega' type='date' class='form-control' placeholder='Fecha de entrega' autocomplete='on' value='$entrega'></input>
            <span class='help-block'></span> 
            </div>
          <div align='center'>HORA DE ENTREGA
            <input name='hora' id='hora' type='time' class='form-control' placeholder='Hora de entrega' autocomplete='on' value='$hora'></input>
            <span class='help-block'></span> 
            </div>
          <div class='image'> <img src='' id='image'> </div>
          <div align='center'>FOTO
            <input type='file' id='files' name='file' class='form-control' onchange='handleFiles()' placeholder='Foto'></input>
            <span class='help-block'></span>
            <div id='progress_bar'>
              <div class='percent'>0%</div>
            </div>
          </div>
		  <footer class='fluid piepagina'></footer>
           <i class='fa fa-save' style='font-size:60px'></i> 
          <input type='hidden' name='nomas' value='nomas'></input>
          <input type='hidden' name='btn1'  value='reparacion'></input>
          <button class='btn btn-block bt-login' type='submit' id='submit_btn' data-loading-text='Registrando....'>Registrar</button>
          <div class='boton_limpiar'>
            <button class='btn btn-block bt-login1' id='submit_btn' data-loading-text='Limpiando....' type='reset'>Limpiar</button>
          </div>
        </form>
      </div>
      </div>
      ";
}



if ($slider=="oscar"){
echo "
      <div class='login-form'>
        <div class='form-header'> 
        <i class='fa fa-user'></i> 
        </div>
        <div class='form-register'>
        <form method='post' role='form' id='registrar-cliente' enctype='multipart/form-data' name='fe'>
          <div align='center'>CODIGO CLIENTE
            <input name='cod_cliente' type='text' id='cod_cliente' value='$cod_cliente' class='form-control' readonly>
            <input name='id_cliente' type='hidden' id='id_cliente' value='$id_cliente' class='form-control' readonly>
            <span class='help-block'></span> 
            </div>
          <div align='center'>NOMBRE
            <input type='text' id='nombre' name='nombre' value='$nombre' onkeyup='myFunction5()' size='30' placeholder='Nombre' autocomplete='off' class='form-control'/>
            <span class='help-block'></span> 
            </div>
            <div id='myDiv' align='left'></div>
            <div id='pers'></div>
          <div align='center'>APELLIDO
            <input name='apellido' type='text' id='apellido' class='form-control' placeholder='Apellidos' autocomplete='on' value='$apellido'>
            <span class='help-block'></span> 
            </div>
          <div align='center'>CELULAR
            <input name='celular' id='celular' type='tel' class='form-control' placeholder='Celular' pattern='[0-9]{8}' value='$celular' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
          <div align='center'>TELEFONO
            <input name='telefono' id='telefono' type='tel' class='form-control' placeholder='Telefono' pattern='[0-9]{8}' value='$telefono' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
            </div>
			
            <div class='form-header' style='margin-top:20px'> 
            <i class='fa fa-scissors'></i> 
            </div>
            <div class='form-register'>
            <div align='center'>CODIGO
            <input name='cod_oscar' type='text' id='cod_oscar' value='$cod_oscar' class='form-control' readonly>
            <span class='help-block'></span> 
            </div>
          <div align='center'>REPARACIÓN
            <input name='reparacion' id='reparacion' type='text' class='form-control' placeholder='Reparación' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
            <div align='center'>PRECIO
            <input name='precio' id='precio' type='number' class='form-control' placeholder='Precio' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
            <div align='center'>ABONO
            <input name='abono' id='abono' type='number' class='form-control' placeholder='Abono' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
          </div>
		  
		  <div class='form-header' style='margin-top:20px'> 
            <img id='saco' style='cursor:pointer;' src='imagenes/saco.png'/>
            </div>
			<div class='saco' style='display:none;'>
            <div class='form-register'>
            <div align='center'>TALLE
            <input name='talle' id='talle' type='text' class='form-control' placeholder='Talle' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
			<div align='center'>LARGO
            <input name='slargo' id='slargo' type='text' class='form-control' placeholder='Largo' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
			<div align='center'>PECHO
            <input name='pecho' id='pecho' type='text' class='form-control' placeholder='Pecho' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
			<div align='center'>CINTURA
            <input name='scintura' id='scintura' type='text' class='form-control' placeholder='Cintura' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
			<div align='center'>CADERA
            <input name='scadera' id='scadera' type='text' class='form-control' placeholder='Cadera' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
			<div align='center'>HOMBRO
            <input name='hombro' id='hombro' type='text' class='form-control' placeholder='Hombro' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
			<div align='center'>ESPALDA
            <input name='espalda' id='espalda' type='text' class='form-control' placeholder='Espalda' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
			<div align='center'>MANGA
            <input name='manga' id='manga' type='text' class='form-control' placeholder='Manga' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
			<div align='center'>ANCHO TORAX
            <input name='anchotorax' id='anchotorax' type='text' class='form-control' placeholder='Ancho torax' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
			<div align='center'>DETALLES
            <input name='sdetalle' id='sdetalle' type='text' class='form-control' placeholder='Detalle' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
			</div>
          </div>
		  
		  <div class='form-header' style='margin-top:20px'> 
            <img id='pantalon' style='cursor:pointer;' src='imagenes/pant.png'/>
            </div>
			<div class='pantalon' style='display:none;'>
            <div class='form-register'>
            <div align='center'>LARGO
            <input name='largo' id='largo' type='text' class='form-control' placeholder='Largo' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
			<div align='center'>TIRO
            <input name='tiro' id='tiro' type='text' class='form-control' placeholder='Tiro' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
			<div align='center'>CINTURA
            <input name='cintura' id='cintura' type='text' class='form-control' placeholder='Cintura' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
			<div align='center'>CADERA
            <input name='cadera' id='cadera' type='text' class='form-control' placeholder='Cadera' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
			<div align='center'>RODILLA
            <input name='rodilla' id='rodilla' type='text' class='form-control' placeholder='Rodilla' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
			<div align='center'>RUEDO
            <input name='ruedo' id='ruedo' type='text' class='form-control' placeholder='Ruedo' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
			<div align='center'>ALTURA ATRAS
            <input name='alturaatras' id='alturaatras' type='text' class='form-control' placeholder='Diferencia / Altura atras' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
			<div align='center'>MUSLO
            <input name='muslo' id='muslo' type='text' class='form-control' placeholder='Muslo' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
			<div align='center'>DETALLES
            <input name='detalle' id='detalle' type='text' class='form-control' placeholder='Detalle' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
			</div>
          </div>
		  
		  <div class='form-header' style='margin-top:20px'> 
            <img id='chaleco' style='cursor:pointer;' src='imagenes/chaleco.png'/>
            </div>
			<div class='chaleco' style='display:none;'>
            <div class='form-register'>
            <div align='center'>TALLE + LARGO
            <input name='talle+largo' id='talle+largo' type='text' class='form-control' placeholder='Talle + Largo' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
			<div align='center'>PECHO
            <input name='cpecho' id='cpecho' type='text' class='form-control' placeholder='Pecho' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
			<div align='center'>CINTURA
            <input name='ccintura' id='ccintura' type='text' class='form-control' placeholder='Cintura' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
			<div align='center'>CADERA
            <input name='ccadera' id='ccadera' type='text' class='form-control' placeholder='Cadera' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
			<div align='center'>ESPALDA
            <input name='cespalda' id='ccespalda' type='text' class='form-control' placeholder='Espalda' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
			<div align='center'>HOMBRO
            <input name='chombro' id='chombro' type='text' class='form-control' placeholder='Hombro' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
			<div align='center'>ABERTURA
            <input name='abertura' id='abertura' type='text' class='form-control' placeholder='Abertura' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
			<div align='center'>LARGO ADELANTE
            <input name='largoadelante' id='largoadelante' type='text' class='form-control' placeholder='Largo adelante' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
			<div align='center'>DETALLES
            <input name='detalle' id='detalle' type='text' class='form-control' placeholder='Detalle' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
			</div>
          </div>
		  
          <div class='form-header' style='margin-top:20px'> 
           <i class='fa fa-save'></i> 
           </div>
           <div class='form-register'>
          <input type='hidden' name='nomas' value='nomas'>
          <input type='hidden' name='btn1'  value='oscar'>
          <button class='btn btn-block bt-login' type='submit' id='submit_btn' data-loading-text='Registrando....'>Registrar</button>
          <div class='boton_limpiar'>
            <button class='btn btn-block bt-login1' id='submit_btn' data-loading-text='Limpiando....' type='reset'>Limpiar</button>
          </div>
        </form>
      </div>
      </div>
      ";
}
if ($slider=="feoli"){
	echo "
      <div class='login-form'>
        <div class='form-header'> 
        <i class='fa fa-user'></i> 
        </div>
        <div class='form-register'>
        <form method='post' role='form' id='registrar-cliente' enctype='multipart/form-data' name='fe'>
          <div align='center'>CODIGO CLIENTE
            <input name='cod_cliente' type='text' id='cod_cliente' value='$cod_cliente' class='form-control' readonly>
            <input name='id_cliente' type='hidden' id='id_cliente' value='$id_cliente' class='form-control' readonly>
            <span class='help-block'></span> 
            </div>
          <div align='center'>NOMBRE
            <input type='text' id='nombre' name='nombre' value='$nombre' onkeyup='myFunction5()' size='30' placeholder='Nombre' autocomplete='off' class='form-control'/>
            <span class='help-block'></span> 
            </div>
            <div id='myDiv' align='left'></div>
            <div id='pers'></div>
          <div align='center'>APELLIDO
            <input name='apellido' type='text' id='apellido' class='form-control' placeholder='Apellidos' autocomplete='on' value='$apellido'>
            <span class='help-block'></span> 
            </div>
          <div align='center'>CELULAR
            <input name='celular' id='celular' type='tel' class='form-control' placeholder='Celular' pattern='[0-9]{8}' value='$celular' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
          <div align='center'>TELEFONO
            <input name='telefono' id='telefono' type='tel' class='form-control' placeholder='Telefono' pattern='[0-9]{8}' value='$telefono' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
		</div>
        </div>
			<div class='login-form'>
        <div class='form-header'> 
        <i class='fa fa-scissors'></i> 
        </div>
        <div class='form-register'>
			<div align='center'>CODIGO REPARACIÓN
            <input name='cod_oscar' type='text' id='cod_oscar' value='$cod_oscar' class='form-control' readonly>
            <span class='help-block'></span> 
            </div>
          <div align='center'>REPARACIÓN
            <input name='reparacion' id='reparacion' type='text' class='form-control' placeholder='Reparación' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
            <div align='center'>PRECIO
            <input name='precio' id='precio' type='number' class='form-control' placeholder='Precio' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
          <div align='center'>FECHA DE ENTREGA
            <input name='entrega' id='entrega' type='date' class='form-control' placeholder='Fecha de entrega' autocomplete='on' value='$entrega'>
            <span class='help-block'></span> 
            </div>
          <div align='center'>HORA DE ENTREGA
            <input name='hora' id='hora' type='time' class='form-control' placeholder='Hora de entrega' autocomplete='on' value='$hora'>
            <span class='help-block'></span> 
            </div>
          <div class='image'> <img src='' id='image'> 
          </div>
          <div align='center'>FOTO
            <input type='file' id='files' name='file' class='form-control' onchange='handleFiles()' placeholder='Foto'>
            <span class='help-block'></span>
            <div id='progress_bar'>
              <div class='percent'>0%</div>
            </div>
          </div>
          </div>
		  <div class='form-header' style='margin-top:20px'> 
           <i class='fa fa-save'></i> 
           </div>
           <div class='form-register'>
          <input type='hidden' name='nomas' value='nomas'>
          <input type='hidden' name='btn1'  value='feoli'>
          <button class='btn btn-block bt-login' type='submit' id='submit_btn' data-loading-text='Registrando....'>Registrar</button>
          <div class='boton_limpiar'>
            <button class='btn btn-block bt-login1' id='submit_btn' data-loading-text='Limpiando....' type='reset'>Limpiar</button>
          </div>
        </form>
      </div>
      </div>
      ";
	}
if ($slider=="confeccion"){
	echo "
	<img style='margin-top:20px' class='imagen' src='imagenes/construccion3.png'/>
	";
	}
if ($slider=="alquiler"){
	echo "
	<img style='margin-top:20px' class='imagen' src='imagenes/construccion3.png'/>
	";
	}
	  ?>
<div class="fluid subtitulo" class="subtitulo" style="margin-top:20px">
<h1>Herramientas</h1>
</div>
<script>
$(document).ready(function(){
		$("#saco").on( "click", function() {
			$('#saco').show(); //muestro mediante id
			$('.saco').show(); //muestro mediante clase
		 });
		 $("#pantalon").on( "click", function() {
			$('#pantalon').show(); //muestro mediante id
			$('.pantalon').show(); //muestro mediante clase
		 });
		 $("#chaleco").on( "click", function() {
			$('#chaleco').show(); //muestro mediante id
			$('.chaleco').show(); //muestro mediante clase
		 });
		$("#ocultar").on( "click", function() {
			$('#pantalon').hide(); //oculto mediante id
			$('.pantalon').hide(); //muestro mediante clase
		});
	});
</script> 
<script>
$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><input type="time" name="mytext[]"/><input type="name" name="mytext[]"/><input type="text" name="mytext[]"/><input type="date" name="mytext[]"/><a href="#" class="remove_field">Eliminar</a></div>'); //add input box
        }
    });
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script> 
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
    }
</script>
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
<!-- InstanceEndEditable -->
</div>
<div class="fluid informacion1 zeroMargin_desktop" align="center"><!-- InstanceBeginEditable name="informacion1" -->
  <div class="login-form">
    <div class="form-header"> <i class="fa fa-camera-retro"></i> </div>
    <div class="form-register">
      <button class="btn btn-block bt-login" onclick="myFunction()">Webcam</button>
      <script>
           function myFunction() {
             window.open("camara.php");
           }
       </script> 
    </div>
  </div>
  <!-- InstanceEndEditable --></div>
<div class="fluid informacion2 "><!-- InstanceBeginEditable name="informacion2" -->
  <div class="login-form">
    <div class="form-header"> <i class="fa fa-calendar"></i> </div>
    <div class="form-register">
      <?php 
	  echo "
	    <form name='form1' method='post'>
        <button class='btn btn-block bt-login' type='submit' onclick='this.form.action=\"ver_agenda.php?slider=".$slider."\"' formtarget='_blank' title='Ver agenda'>Ver Agenda</button>
		</form>
		   ";
       ?>
    </div>
  </div>
  <!-- InstanceEndEditable --></div>
<div class="fluid informacion3 zeroMargin_desktop"><!-- InstanceBeginEditable name="informacion3" --> <!-- InstanceEndEditable --></div>
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
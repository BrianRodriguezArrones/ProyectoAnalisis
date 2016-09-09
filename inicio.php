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
			<li class='num1 img slide'>  <a href="inicio.php?slider=oscar" target=""><img src='cssslider_files/csss_images1/oscar.jpg' alt='OSCAR FERNANDEZ' title='ALQUILERES' /> </a> </li>
			<li class='num2 img slide'>  <a href="inicio.php?slider=feoli" target=""><img src='cssslider_files/csss_images1/feoli.jpg' alt='FEOLI HERMANOS' title='TEST' /> </a> </li>
                        <li class='num3 img slide'>  <a href="inicio.php?slider=confeccion" target=""><img src='cssslider_files/csss_images1/confeccion.jpg' alt='CONFECCIÓN' title='CONFECCI&Oacute;N' /> </a> </li>
			<li class='num4 img slide'>  <a href="inicio.php?slider=alquiler" target=""><img src='cssslider_files/csss_images1/alquiler.jpg' alt='ALQUILER' title='ALQUILER' /> </a> </li>
		</ul><div class="cs_engine"><a href="http://cssslider.com">jquery gallery</a> by cssSlider.com v1.9</div>
		<div class='cs_description'>
			<label class='num0'><span class="cs_title"><span class="cs_wrapper">REPARACIONES</span></span></label>
			<label class='num1'><span class="cs_title"><span class="cs_wrapper">ALQUILERES</span></span></label>
			<label class='num2'><span class="cs_title"><span class="cs_wrapper">TEST</span></span></label>
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
<script type="text/javascript">
setTimeout("document.getElementById('titulo1').style.display='none';", 5000);
setTimeout("document.getElementById('titulo2').style.display='none';", 0000);
setTimeout("document.getElementById('titulo2').style.display='block';", 5000);
</script>
<?php
echo "
    <h1 align='center' id='titulo1' style='display:block'>Bienvenid@ ".$_SESSION['name']." </h1>   
	";
if ($slider=="reparacion"){
	echo "<h1 align='center' id='titulo2' style='display:block'>Reparaciones / Atrasadas</h1>";
	};
if ($slider=="oscar"){
	echo "<h1 align='center' id='titulo2' style='display:block'>Oscar / Atrasadas</h1>";
	};
if ($slider=="feoli"){
	echo "<h1 align='center' id='titulo2' style='display:block'>Feoli / Atrasadas</h1>";
	};
if ($slider=="confeccion"){
	echo "<h1 align='center' id='titulo2' style='display:block'>Confección / Atrasadas</h1>";
	};
if ($slider=="alquiler"){
	echo "<h1 align='center' id='titulo2' style='display:block'>Alquiler / Atrasadas</h1>";
	};
?>  
  <!-- InstanceEndEditable --> </div>
  <div class="fluid informacion " align="center"><!-- InstanceBeginEditable name="informacion0" -->
    <link rel="stylesheet" type="text/css" media="screen" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css" />
    <link href="css/modal.css" rel="stylesheet" type="text/css">
<style type="text/css">
input#bot_estado {
		color: white;
		text-align:center;
		font: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
	}
    a.fancybox img {
        border: none;
        box-shadow: 0 1px 7px rgba(0,0,0,0.6);
        -o-transform: scale(1,1); -ms-transform: scale(1,1); -moz-transform: scale(1,1); -webkit-transform: scale(1,1); transform: scale(1,1); -o-transition: all 0.2s ease-in-out; -ms-transition: all 0.2s ease-in-out; -moz-transition: all 0.2s ease-in-out; -webkit-transition: all 0.2s ease-in-out; transition: all 0.2s ease-in-out;
    } 
    a.fancybox:hover img {
        position: relative; z-index: 999; -o-transform: scale(1.03,1.03); -ms-transform: scale(1.03,1.03); -moz-transform: scale(1.03,1.03); -webkit-transform: scale(1.03,1.03); transform: scale(1.03,1.03);
    }
</style>
<!--ZOOM PARA IMAGENES-->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js"></script>
<script type="text/javascript">
    $(function($){
        var addToAll = false;
        var gallery = true;
        var titlePosition = 'inside';
        $(addToAll ? 'img' : 'img.fancybox').each(function(){
            var $this = $(this);
            var title = $this.attr('title');
            var src = $this.attr('data-big') || $this.attr('src');
            var a = $('<a href="#" class="fancybox"></a>').attr('href', src).attr('title', title);
            $this.wrap(a);
        });
        if (gallery)
            $('a.fancybox').attr('rel', 'fancyboxgallery');
        $('a.fancybox').fancybox({
            titlePosition: titlePosition
        });
    });
    $.noConflict();
</script>

  <link rel="stylesheet" href="css/estilotablas.css">
	<style>
	@media
	only screen and (max-width: 760px),
	(min-device-width: 768px) and (max-device-width: 1024px)  {
		table, thead, tbody, th, td, tr {
			display: block;
		}
		thead tr {
			position: absolute;
			top: -9999px;
			left: -9999px;
		}

		tr { border: 1px solid #ccc; }

		td {
			border: none;
			border-bottom: 1px solid #eee;
			position: relative;
			padding-left: 50%;
			text-align:left;
		}

		td:before {
			position: absolute;
			top: 6px;
			left: 6px;
			width: 45%;
			padding-right: 10px;
			white-space: nowrap;
			font-weight:bold;
		}
		td:nth-of-type(1):before { content: "Estado:";}
		td:nth-of-type(2):before { content: "Codigo:"; }
		td:nth-of-type(3):before { content: "Nombre:"; }
		td:nth-of-type(4):before { content: "Celular:"; }
		td:nth-of-type(5):before { content: "Reparación:"; }
		td:nth-of-type(6):before { content: "Entregar el:"; }
		td:nth-of-type(7):before { content: "Hora:"; }
		td:nth-of-type(8):before { content: "Foto:"; }
		td:nth-of-type(9):before { content: "Ver:"; }
	}
	@media only screen
	and (min-device-width : 320px)
	and (max-device-width : 480px) {
		
		}
	@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
		
	}
#seleccionar_todo{
background-position: center;
background-image: url(imagenes/todo.png);
background-repeat: no-repeat;
}
#seleccionar_ninguno{
background-position: center;
background-image: url(imagenes/ninguno.png);
background-repeat: no-repeat;
}
	</style>
 <style type="text/css" title="currentStyle">
	@import "css/demo_table_jui.css";
	@import "themes/smoothness/jquery-ui-1.8.4.custom.css";
</style>
<script src="js/jquery.js"></script>
<script src="js/jquery.dataTables.js"></script>
<script>
$(document).ready(function() {
	oTable = $('#example').dataTable({
	"bJQueryUI": true,
	"sPaginationType": "full_numbers",
    "oLanguage": {
    "sEmptyTable": "Estamos al día ;D",//tabla vacia
	"sInfo": "(_START_ - _END_) de _TOTAL_",
    "sLengthMenu": '<select>'+
	'<option value="5">5</option>'+
    '<option value="10">10</option>'+
    '<option value="20">20</option>'+
    '<option value="30">30</option>'+
    '<option value="40">40</option>'+
    '<option value="50">50</option>'+
    '<option value="-1">Todo</option>'+
    '</select>',
	"sLoadingRecords": "Espere un momento, cargando...",
	"sSearch": "Buscar: ",
	"sZeroRecords": "No hay datos con esa busqueda",
    "oPaginate": {
    "sFirst": "↑",
	"sLast": "↓",
	"sNext": "→",
	"sPrevious": "←",
      	}
    	}
	});
} );
</script>
<?php
	setlocale (LC_ALL, "es_CR.UTF-8","es_CR","esp");
	date_default_timezone_set('America/Costa_Rica'); 
	$ampm="";
	$id="";
	$cod_reparacion="";
	$estado="";
    $nombre="";
    $apellido="";
	$reparacion="";
	$hora="";
	$entrega="";
	$phpdate="";
    $phpdate2="";
	$phphora="";
	$phphora2="";
	$fecha = date("Y-m-d H:i:s");
	
	if ($slider=="reparacion"){
	$sql="select * from reparacion INNER JOIN clientes ON reparacion.id_cliente = clientes.id_cliente WHERE CONCAT(reparacion.entrega, ' ',reparacion.hora) <= '".$fecha."' AND (reparacion.estado = ' Reparar' || reparacion.estado = ' Reparando')";
	$cs=mysqli_query($cn,$sql);
	echo"
<body>
<div class='demo_jui'>
<form name='form1' method='post' class='validar_form'>
<table cellpadding='0' cellspacing='0' border='0' class='display' id='example'>
<thead>
<tr>
<th>Estado</th>
<th width=120px>Codigo</th>
<th width=200px>Nombre</th>
<th>Celular</th>
<th width=350px>Reparación</th>
<th>Entregar el</th>
<th>Hora</th>
<th>Foto</th>
<th>ver</th>
</tr>
</thead>
<tbody>
";
		while($fila=mysqli_fetch_array($cs)){
			$id=$fila["id_reparacion"];
			$cod_reparacion=$fila["cod_reparacion"];
			$nombre=$fila["nombre"];
			$apellido=$fila["apellido"];
			$cel=$fila["celular"];
			$cel1 = substr($cel, 0,4);
			$cel2 = substr($cel, -4);
			$celular = $cel1."-".$cel2;
			$reparacion=$fila["reparacion"];
			$foto=$fila["foto"];
			$estado=$fila["estado"];
			$phpdate = strtotime($fila["entrega"]);
			$phpdate2 = strftime("%A",$phpdate);
			$entrega = strftime("%d de %B %Y",$phpdate);
			$phphora = strtotime($fila["hora"]);
			$phphora2 = strftime("%I:%M %p",$phphora);
			if(strftime("%H",$phphora)<12){
				$ampm=' am';
				}
			if(strftime("%H",$phphora)>=12){
				$ampm=' pm';
				}
			echo "
			<tr> 
			<td>";
			if($estado==" Listo"){
				echo"<a href='btn_estado.php?id=".$fila['id_reparacion']." & pagina=inicio&slider=".$slider."' target='_self' title='Listo'><img src='imagenes/listo.png' alt='img'; width='30' height='30' />$estado</a>";
				}
			if($estado==" Reparar"){
				echo"<a href='btn_estado.php?id=".$fila['id_reparacion']." & pagina=inicio&slider=".$slider."' target='_self' title='Reparar'><img src='imagenes/reparar.png' alt='img'; width='30' height='30' />$estado</a>";
				}
			if($estado==" Reparando"){
				echo"<a href='btn_estado.php?id=".$fila['id_reparacion']." & pagina=inicio&slider=".$slider."' target='_self' title='Reparando'><img src='imagenes/reparando.png' alt='img'; width='30' height='30' />$estado</a>";
				}
			if($estado==" Entregado"){
				echo"<a href='btn_estado.php?id=".$fila['id_reparacion']." & pagina=inicio&slider=".$slider."' target='_self' title='Entregado'><img src='imagenes/entregado.png' alt='img'; width='30' height='30' />$estado</a>";
				}
			echo"</td>
			<td><input name='data[]' type='checkbox' style='width:30px;height:30px;vertical-align: middle; cursor:pointer' id='data' value='$id'> $cod_reparacion</td>
            <td><a href='editar_cliente.php?id=".$fila['id_cliente']."&slider=".$slider."&pagina=inicio' title='Editar Cliente'>$nombre   $apellido</a></td>
            <td><a href='editar_cliente.php?id=".$fila['id_cliente']."&slider=".$slider."&pagina=inicio' title='Editar Cliente'>$celular</a></td>
			<td><a href='editar_reparacion.php?id=".$fila['id_cliente']."&slider=".$slider."&pagina=agenda' title='Editar Reparación'>$reparacion</a></td>
			<td><a href='editar_reparacion.php?id=".$fila['id_cliente']."&slider=".$slider."&pagina=agenda' title='Editar Reparación'>$phpdate2   $entrega</a></td>
			<td><a href='editar_reparacion.php?id=".$fila['id_cliente']."&slider=".$slider."&pagina=agenda' title='Editar Reparación'>$phphora2</a></td>
			<td>
			<a title='Ver foto'><img src='$foto' class='fancybox' alt='Sin Imagen'; width='42' height='30'/></a>
			</td>
			<td>
			<a href='prenda.php?id=".$fila['id_reparacion']."&slider=".$slider."&pagina=inicio' target='_self' title='Ver foto'><img src='imagenes/ver.png' width='30' height='30' /></a>
			<a href='editar.php?id=".$fila['id_reparacion']."&slider=".$slider."&pagina=inicio' target='_self' title='Editar'><img src='imagenes/editar.png' width='30' height='30' /></a>
			<a href='dymo.php?cod_reparacion=".$fila['cod_reparacion']."&slider=".$slider."&pagina=inicio' target='_blank' title='Imprimir etiqueta DYMO'><img src='imagenes/print.png' width='30' height='30' /></a>
			</td>
            </tr>
			";
}
echo "</tbody></table>
<div class='botonera'>
<input name='pagina' type='hidden' id='pagina' value='inicio'></input>
<input style='height:42px' class='btn' type='button' onclick='marcar(this.form)' id='seleccionar_todo' value='        ' title='Seleccionar todo' />
<input style='height:42px' class='btn' type='button' onclick='desmarcar(this.form)' id='seleccionar_ninguno' value='        ' title='Deseleccionar todo' />
<button class='btn' type='submit' id='etiqueta' name='reparacion' onclick = 'this.form.action = \"etiqueta.php?slider=".$slider."\"' title='Crear etiqueta'><img src='imagenes/etiqueta.png' alt='img'; width='30' height='30'> Etiqueta</button>
<button class='btn' type='submit' id='comprobante' name='reparacion' onclick = 'this.form.action = \"comprobante.php?slider=".$slider."\"' title='Crear comprobante'><img src='imagenes/comprobante.png' alt='img'; width='30' height='30'> Comprobante</button>
<button class='btn' type='submit' id='estad' name='reparacion' onclick = 'this.form.action = \"estado.php?slider=".$slider."\"' title='Estado'><img src='imagenes/estado.png' alt='img'; width='30' height='30'> Estado</button>
<button class='btn' type='submit' id='eliminar' name='reparacion' onclick = 'this.form.action = \"eliminar.php?slider=".$slider."\"' title='Eliminar'><img src='imagenes/eliminar.png' alt='img'; width='30' height='30'> Eliminar</button>
</div></form></div></body>";
	}
	
	
if ($slider=="feoli"){
	$sql="select * from feoli INNER JOIN clientes ON feoli.id_cliente = clientes.id_cliente WHERE CONCAT(feoli.entrega, ' ',feoli.hora) <= '".$fecha."' AND (feoli.estado = ' Reparar' || feoli.estado = ' Reparando')";
	$cs=mysqli_query($cn,$sql);
	echo"
<body>
<div class='demo_jui'>
<form name='form1' method='post' class='validar_form'>
<table cellpadding='0' cellspacing='0' border='0' class='display' id='example'>
<thead>
<tr>
<th>Estado</th>
<th width=120px>Codigo</th>
<th width=200px>Nombre</th>
<th>Celular</th>
<th width=350px>Reparación</th>
<th>Entregar el</th>
<th>Hora</th>
<th>Foto</th>
<th>ver</th>
</tr>
</thead>
<tbody>
";
		while($fila=mysqli_fetch_array($cs)){
			$id=$fila["id_feoli"];
			$cod_feoli=$fila["cod_feoli"];
			$nombre=$fila["nombre"];
			$apellido=$fila["apellido"];
			$cel=$fila["celular"];
			$cel1 = substr($cel, 0,4);
			$cel2 = substr($cel, -4);
			$celular = $cel1."-".$cel2;
			$reparacion=$fila["reparacion"];
			$foto=$fila["foto"];
			$estado=$fila["estado"];
			$phpdate = strtotime($fila["entrega"]);
			$phpdate2 = strftime("%A",$phpdate);
			$entrega = strftime("%d de %B %Y",$phpdate);
			$phphora = strtotime($fila["hora"]);
			$phphora2 = strftime("%I:%M %p",$phphora);
			if(strftime("%H",$phphora)<12){
				$ampm=' am';
				}
			if(strftime("%H",$phphora)>=12){
				$ampm=' pm';
				}
			echo "
			<tr> 
			<td>";
			if($estado==" Listo"){
				echo"<a href='btn_estado.php?id=".$fila['id_feoli']." & pagina=inicio&slider=".$slider."' target='_self' title='Listo'><img src='imagenes/listo.png' alt='img'; width='30' height='30' />$estado</a>";
				}
			if($estado==" Reparar"){
				echo"<a href='btn_estado.php?id=".$fila['id_feoli']." & pagina=inicio&slider=".$slider."' target='_self' title='Reparar'><img src='imagenes/reparar.png' alt='img'; width='30' height='30' />$estado</a>";
				}
			if($estado==" Reparando"){
				echo"<a href='btn_estado.php?id=".$fila['id_feoli']." & pagina=inicio&slider=".$slider."' target='_self' title='Reparando'><img src='imagenes/reparando.png' alt='img'; width='30' height='30' />$estado</a>";
				}
			if($estado==" Entregado"){
				echo"<a href='btn_estado.php?id=".$fila['id_feoli']." & pagina=inicio&slider=".$slider."' target='_self' title='Entregado'><img src='imagenes/entregado.png' alt='img'; width='30' height='30' />$estado</a>";
				}
			echo"</td>
			<td><input name='data[]' type='checkbox' style='width:30px;height:30px;vertical-align: middle; cursor:pointer' id='data' value='$id'> $cod_feoli</td>
            <td><a href='editar_cliente.php?id=".$fila['id_cliente']."&slider=".$slider."&pagina=inicio' title='Editar Cliente'>$nombre   $apellido</a></td>
            <td>$celular</td>
			<td>$reparacion</td>
            <td>$phpdate2   $entrega</td>
            <td>$phphora2</td>
			<td>
			<a title='Ver foto'><img src='$foto' class='fancybox' alt='Sin Imagen'; width='42' height='30'/></a>
			</td>
			<td>
			<a href='prenda.php?id=".$fila['id_feoli']."&slider=".$slider."&pagina=inicio' target='_self' title='Ver foto'><img src='imagenes/ver.png' width='30' height='30' /></a>
			<a href='editar.php?id=".$fila['id_feoli']."&slider=".$slider."&pagina=inicio' target='_self' title='Editar'><img src='imagenes/editar.png' width='30' height='30' /></a>
			<a href='dymo.php?cod_feoli=".$fila['cod_feoli']."&slider=".$slider."&pagina=inicio' target='_blank' title='Imprimir etiqueta DYMO'><img src='imagenes/print.png' width='30' height='30' /></a>
			</td>
            </tr>
			";
}
echo "</tbody></table>
<div class='botonera'>
<input name='pagina' type='hidden' id='pagina' value='inicio'></input>
<input style='height:42px' class='btn' type='button' onclick='marcar(this.form)' id='seleccionar_todo' value='        ' title='Seleccionar todo' />
<input style='height:42px' class='btn' type='button' onclick='desmarcar(this.form)' id='seleccionar_ninguno' value='        ' title='Deseleccionar todo' />
<button class='btn' type='submit' id='etiqueta' name='feoli' onclick = 'this.form.action = \"etiqueta.php?slider=".$slider."\"' title='Crear etiqueta'><img src='imagenes/etiqueta.png' alt='img'; width='30' height='30'> Etiqueta</button>
<button class='btn' type='submit' id='comprobante' name='feoli' onclick = 'this.form.action = \"comprobante.php?slider=".$slider."\"' title='Crear comprobante'><img src='imagenes/comprobante.png' alt='img'; width='30' height='30'> Comprobante</button>
<button class='btn' type='submit' id='estad' name='feoli' onclick = 'this.form.action = \"estado.php?slider=".$slider."\"' title='Estado'><img src='imagenes/estado.png' alt='img'; width='30' height='30'> Estado</button>
<button class='btn' type='submit' id='eliminar' name='feoli' onclick = 'this.form.action = \"eliminar.php?slider=".$slider."\"' title='Eliminar'><img src='imagenes/eliminar.png' alt='img'; width='30' height='30'> Eliminar</button>
</div></form></div></body>";
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
      <script type="text/javascript">
    $(".validar_form").submit( function(){
        var check = $("input[type='checkbox']:checked").length;
            if(check == ""){
                $('.errors').hide();
                alert('Dentro de la tabla en la columna codigo, debe seleccionar almenos una reparación!');
                return false;

            } else {
                return true;
            }   
    }); 
	function marcar(obj) { 
    elem=obj.elements; 
    for (i=0;i<elem.length;i++) 
        if (elem[i].type=="checkbox") 
            elem[i].checked=true; 
    }
	function desmarcar(obj) { 
    elem=obj.elements; 
    for (i=0;i<elem.length;i++) 
        if (elem[i].type=="checkbox") 
            elem[i].checked=false; 
    }
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

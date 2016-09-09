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
<head>
<link rel="shortcut icon" href="imagenes/icono.ico">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Agenda</title>
<link href="Cuadricula Fluida/cuadricula fluida.css" rel="stylesheet" type="text/css">
<link href="Cuadricula Fluida/boilerplate.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="index_files/csss_engine1/style.css">
<link rel="stylesheet" type="text/css" href="menu/css/default.css" />
      <link rel="stylesheet" type="text/css" href="menu/css/component.css" />
</head>
<body>
<div style="text-align:center" class="gridContainer clearfix">
<header class="fluid encabezado">
<div align="center"></div>
</header>
<div id="div1" class="fluid">
<div class="login-form">
</div>
</div>
<div class="fluid informacion">
<div align="center">
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
	</style>
      <style type="text/css" title="currentStyle">
	@import "css/demo_table_jui.css";
	@import "themes/smoothness/jquery-ui-1.8.4.custom.css";
	
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
<h1>Agenda</h1>
      <?php
	setlocale (LC_ALL, "es_CR.UTF-8","es_CR","esp");
	date_default_timezone_set('America/Costa_Rica'); 
	if (empty($_GET['slider'])) { 
	   $slider="";
	   } else { 
	   $slider = $_GET["slider"];}
	$numeroSemana=date("W");
	$fecha=date("d-F-Y");
	echo "<h3>Reparaciones por hacer</h3>";
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
	
	if ($slider=="reparacion"){
	$sql="SELECT * FROM reparacion INNER JOIN clientes ON reparacion.id_cliente=clientes.id_cliente WHERE estado LIKE ' Reparar' OR estado LIKE ' Reparando' ORDER BY entrega ASC, hora ASC";
	$cs=mysqli_query($cn,$sql);
	echo"
<body>
<div class='demo_jui'>
<form name='form1' method='post' class='validar_form'>
<table cellpadding='0' cellspacing='0' border='0' class='display' id='example'>
<thead>
<tr>
<th>Estado</th>
<th>Codigo</th>
<th>Nombre</th>
<th>Celular</th>
<th width=200px>Reparación</th>
<th>Entregar el</th>
<th>Hora</th>
<th>Foto</th>
<th>Ver</th>
</tr>
</thead>
<tbody>
";
		while($fila=mysqli_fetch_array($cs)){
			$id=$fila["id_reparacion"];
			$cod_reparacion=$fila["cod_reparacion"];
			$nombre=$fila["nombre"];
			$apellido=$fila["apellido"];
			$celular=$fila["celular"];
			$reparacion=$fila["reparacion"];
			$foto=$fila["foto"];
			$estado=$fila["estado"];
			$phpdate = strtotime($fila["entrega"]);
			$phpdate2 = strftime("%A",$phpdate);
			$entrega = strftime("%d de %B",$phpdate);
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
				echo"<a href='btn_estado.php?id=".$fila['id_reparacion']."&pagina=agenda' target='_self' title='Listo'><img src='imagenes/listo.png' alt='img'; width='30' height='30' />$estado</a>";
				}
			if($estado==" Reparar"){
				echo"<a href='btn_estado.php?id=".$fila['id_reparacion']."&pagina=agenda' target='_self' title='Reparar'><img src='imagenes/reparar.png' alt='img'; width='30' height='30' />$estado</a>";
				}
			if($estado==" Reparando"){
				echo"<a href='btn_estado.php?id=".$fila['id_reparacion']."&pagina=agenda' target='_self' title='Reparando'><img src='imagenes/reparando.png' alt='img'; width='30' height='30' />$estado</a>";
				}
			if($estado==" Entregado"){
				echo"<a href='btn_estado.php?id=".$fila['id_reparacion']."&pagina=agenda' target='_self' title='Entregado'><img src='imagenes/entregado.png' alt='img'; width='30' height='30' />$estado</a>";
				}
			echo"</td>
			<td>
			<input name='data[]' type='checkbox' style='width:30px;height:30px;vertical-align: middle; cursor:pointer' id='data' value='$id'> $cod_reparacion</input></td>
            <td>$nombre   $apellido</td>
            <td>$celular</td>
			<td>$reparacion</td>
            <td>$phpdate2   $entrega</td>
            <td>$phphora2</td>
			<td>
			<a title='Ver foto'><img src='$foto' class='fancybox' alt='Sin Imagen'; width='42' height='30'/></a>
			</td>
			<td>
			<a href='prenda.php?id=".$fila['id_reparacion']." & slider=".$slider."' target='_self' title='Ver reparación'><img src='imagenes/ver.png' width='30' height='30' /></a>
			<a href='editar.php?id=".$fila['id_reparacion']." & slider=".$slider."' target='_self' title='Editar'><img src='imagenes/editar.png' width='30' height='30' /></a>
			</td>
            </tr>
			";
}
echo "</tbody></table>
<br>
<input name='pagina' type='hidden' id='pagina' value='agenda'></input>
<input style='height:42px' class='btn' type='button' onclick='marcar(this.form)' id='seleccionar_todo' value='        ' title='Seleccionar todo' />
<input style='height:42px' class='btn' type='button' onclick='desmarcar(this.form)' id='seleccionar_ninguno' value='        ' title='Deseleccionar todo' />
<button class='btn' type='submit' id='etiqueta' name='etiqueta' onclick = 'this.form.action = \"etiqueta.php?slider=".$slider."\"' title='Crear etiqueta'><img src='imagenes/etiqueta.png' alt='img'; width='30' height='30'> Etiqueta</button>
<button class='btn' type='submit' id='estad' name='estad' onclick = 'this.form.action = \"estado.php?slider=".$slider."\"' title='Estado'><img src='imagenes/estado.png' alt='img'; width='30' height='30'> Estado</button>
<button class='btn' type='submit' id='eliminar' name='eliminar' onclick = 'this.form.action = \"eliminar.php?slider=".$slider."\"' title='Eliminar'><img src='imagenes/eliminar.png' alt='img'; width='30' height='30'> Eliminar</button>
</form></div></body>";
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
 </div> </div>
<div>
<footer class="fluid piepagina">
  <div align="center">
<p>Compatible con</p>
  <p><img src='imagenes/multiplataforma.png' alt='img'; width='80' height='41' /></p>
  <p><img src='imagenes/navegadores.png' alt='img'; width='135' height='41' /></p>
  Elaborado por 
  <a href='https://www.facebook.com/randall.valverde.50' target="_blank"><img src='imagenes/facebook.png' alt='img'; width='100' height='40' /></a> 
</div>
</footer>
</div>
</body>
</html>

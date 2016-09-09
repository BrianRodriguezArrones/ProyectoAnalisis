<!doctype html>
<html>
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
<script src="Cuadricula Fluida/respond.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/login.js"></script>
<script type="text/javascript" src="jquery/jquery-2.1.3.min.js"></script>
</head>
<body>
<style type="text/css">
body,td,th {
	font-family: Lato, Calibri, Arial, sans-serif;
}
a:hover {
	color: #38499E;
}
</style>
<?php
include("conexion.php");
setlocale (LC_ALL, "es_CR.UTF-8","es_CR","esp");
date_default_timezone_set('America/Costa_Rica'); 
$id=$_GET["id"];
$id = base64_decode($id);//decodifico la cadena
$array = explode(",", $id);
$cod_reparacion="";
$id_cliente="";
$cod_cliente="";
$nombre="";
$apellido="";
$celular="";
$telefono="";
$reparacion="";
$entrega="";
$hora="";
$foto="";
$precio="";
$abono="";
$saldo="";
$estado="";
$entro="";
$entroh="";
$salio="";
$salioh="";
$atendido="";
$entregado="";
$correo="";
$count = count($array);
$sql="select * from reparacion INNER JOIN clientes ON reparacion.id_cliente = clientes.id_cliente where reparacion.id_reparacion='$id'";
		$cs=mysqli_query($cn,$sql);
		while($fila=mysqli_fetch_array($cs)){	
            $id_cliente=$fila["id_cliente"];
            $cod_cliente=$fila["cod_cliente"];
            $nombre=$fila["nombre"];
            $apellido=$fila["apellido"];
            $celular=$fila["celular"];
            $telefono=$fila["telefono"];
			if($telefono == "00000000"){
				$telefono = "";
				}
			$correo=$fila["correo"];
			}
if(isset($_POST["btn1"])){
	$btn=$_POST["btn1"];
		$cod_cliente=$_POST["cod_cliente"];
		$nombre=$_POST["nombre"];
		$apellido=$_POST["apellido"];
		$celular=$_POST["celular"];
		$telefono=$_POST["telefono"];
		$correo=$_POST["correo"];
		$sql1="UPDATE clientes SET nombre='$nombre',apellido='$apellido',celular='$celular',telefono='$telefono',correo='$correo' WHERE cod_cliente='$cod_cliente'";
	    $cs1=mysqli_query($cn,$sql1);
		print "<script> alert('$nombre $apellido! Su información ha sido actualizada!');</script>";
}
echo "
<div class='gridContainer clearfix'>
<header class='fluid encabezado'>
<div align='center'><img src='imagenes/logo.jpg' alt='Logo' width='600'/></div>

 <div class='login-form'>
      <div class='form-header'> <i class='fa fa-user'></i> </div>
      <div method='post' class='form-register'>
		  <form method='post' role='form' id='registrar-cliente' enctype='multipart/form-data' name='fe'>
          <div align='center'>CODIGO CLIENTE
            <input name='cod_cliente' type='text' id='cod_cliente' value='$cod_cliente' class='form-control' readonly>
            <input name='id_cliente' type='hidden' id='id_cliente' value='$id_cliente' class='form-control' readonly>
            <span class='help-block'></span> 
            </div>
          <div align='center'>NOMBRE
            <input type='text' id='nombre' name='nombre' value='$nombre'  placeholder='Nombre' autocomplete='off' class='form-control'/>
            <span class='help-block'></span> 
            </div>
            <div id='myDiv' align='left'></div>
            <div id='pers'></div>
          <div align='center'>APELLIDOS
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
			<div align='center'>CORREO
            <input name='correo' id='correo' type='email' class='form-control' placeholder='Correo' value='$correo' autocomplete='on'>
            <span class='help-block'></span> 
            </div>
			<br></br>
          <button class='btn btn-block bt-login' type='submit' name='btn1' data-loading-text='Actualizando....' >Actualizar información</button>
        </form>
      </div>
    </div>
    ";
for($i=0;$i<$count;$i++){
		$sql = "SELECT * FROM reparacion INNER JOIN clientes ON reparacion.id_cliente = clientes.id_cliente WHERE reparacion.id_reparacion='$array[$i]'";
        $result = mysqli_query($cn,$sql) or die(mysqli_error());
		while($fila=mysqli_fetch_array($result)){
			$cod_reparacion = $fila["cod_reparacion"];
			$cod_cliente=$fila["cod_cliente"];
			$reparacion=$fila["reparacion"];
			$entrega1 = strtotime( $fila["entrega"] );
			$entrega = date( 'd-m-Y', $entrega1 );
			$hora1 = strtotime($fila["hora"]);
			$hora = strftime("%I:%M %p",$hora1);
			$foto=$fila["foto"];
			$precio=$fila["precio"];
			$abono=$fila["abono"];
			$saldo=$fila["saldo"];
			$estado=$fila["estado"];
			$entro1 = strtotime( $fila["entro"] );
			$entro = date( 'd-m-Y', $entro1 );
			$entroh1 = strtotime($fila["entro"]);
			$entroh = strftime("%I:%M %p",$entroh1);
			$salio1 = strtotime( $fila["salio"] );
			$salio = date( 'd-m-Y', $salio1 );
			$salioh1 = strtotime($fila["salio"]);
			$salioh = strftime("%I:%M %p",$salioh1);
			$atendido=$fila["atendido"];
			$entregado=$fila["entregado"];
		}
		echo "
		<div class='login-form'>
      <div class='form-header'> <i class='fa fa-scissors'></i> </div>
      <div method='post' class='form-register'>
        <div>
          <div align='center'>
            <font size='5' color='blue'><b>Reparación $cod_reparacion</b></font>
          </div>
        </div>
		    
        <div>
          <div align='center'>
            <h3><b style='color:#1691BE'>Estado:</b>
			";	  
	if($estado == " Reparar"){
	echo "<font size='4' color='red'> Por reparar</font></h3>";
	}
	else{
		if($estado == " Reparando"){
			echo "<font size='4' color='orange'> Reparando</font></h3>";
		}
		else{
			if($estado == " Listo"){
				echo "<font size='4' color='green'> Listo</font></h3>";
			}
			else{
				echo "<font size='4' color='blue'> Entregado</font></h3>";
			}
		}
	}
	echo "
          </div>
        </div>
        <div>
          <div align='center'>
            <h3><b style='color:#1691BE'>Reparación:</b> $reparacion</h3>
          </div>
        </div>
        <div>
          <div align='center'>
            <h3><b style='color:#1691BE'>Entregar:</b> $entrega a las $hora</h3>
          </div>
        </div>
			
        <div>
          <div align='center'>
            <h3><b style='color:#1691BE'>Precio:</b> ¢$precio</h3>
          </div>
        </div>
        <div>
          <div align='center'>
            <h3><b style='color:#1691BE'>Abono:</b> ¢$abono</h3>
          </div>
        </div>
        <div>
          <div align='center'>
            <h3><b style='color:#1691BE'>Saldo:</b> ¢$saldo</h3>
          </div>
        </div>
		    
         <div>
          <div align='center'>
            <h3><b style='color:#1691BE'>Ingreso:</b> $entro a las $entroh</h3>
          </div>
        </div>
        <div>
          <div align='center'>
            <h3><b style='color:#1691BE'>Atendido por:</b> $atendido</h3>
          </div>
        </div>
        <div>
          <div align='center'>
            <h3><b style='color:#1691BE'>Salio:</b>
			";	  
	if($salio == "30-11--0001"){
	echo "Sin entregar";
	}
	else{
	echo ($salio);
	echo (" a las ");
	echo ($salioh);
	}
	echo "
            </h3>
          </div>
        </div>
        <div>
          <div align='center'>
            <h3><b style='color:#1691BE'>Entregado por:</b> 
			"; 
			if($entregado==''){
				echo 'Sin entregar';
				}
				else{
					echo $entregado;
					}
			echo "
			</h3>
          </div>
        </div>
        <div> <img src='$foto' /> </div>
      </div>
    </div>
		";
}
echo"
 <div class='login-form'>
      <div class='form-header'> <i class='fa fa-search'></i> </div>
      <div method='post' class='form-register'>
		  <button class='btn btn-block bt-login1' data-loading-text='Cargando....' data-toggle='modal' data-target='#myModal'>Ver todas mis prendas</button>
      </div>
    ";
?>
</header>
</div>
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/login.css" rel="stylesheet">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="jquery/jquery-2.1.3.min.js"></script> 
<script src="menu/js/modernizr.custom.js"></script>
<div class="container">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" align="center">
          <button type="button" class="close" data-dismiss="modal"  style="font-size:40px;">&times;</button>
          <i class="fa fa-scissors" style="font-size:60px;"></i> 
          <br>
        </div>
        <div class="modal-body">
          <?php
		$sql = "SELECT * FROM reparacion WHERE id_cliente='$id_cliente'";
        $result = mysqli_query($cn,$sql) or die(mysqli_error());
		while($fila=mysqli_fetch_array($result)){
			$cod_reparacion=$fila["cod_reparacion"];
			$reparacion=$fila["reparacion"];
			$entrega1 = strtotime( $fila["entrega"] );
			$entrega = date( 'd-m-Y', $entrega1 );
			$hora1 = strtotime($fila["hora"]);
			$hora = strftime("%I:%M %p",$hora1);
			$foto=$fila["foto"];
			$precio=$fila["precio"];
			$abono=$fila["abono"];
			$saldo=$fila["saldo"];
			$estado=$fila["estado"];
			$entro1 = strtotime( $fila["entro"] );
			$entro = date( 'd-m-Y', $entro1 );
			$entroh1 = strtotime($fila["entro"]);
			$entroh = strftime("%I:%M %p",$entroh1);
			$salio1 = strtotime( $fila["salio"] );
			$salio = date( 'd-m-Y', $salio1 );
			$salioh1 = strtotime($fila["salio"]);
			$salioh = strftime("%I:%M %p",$salioh1);
			$atendido=$fila["atendido"];
			$entregado=$fila["entregado"];
			echo "
        <div>
          <div align='center'>
            <font size='5' color='blue'><b>Reparación $cod_reparacion</b></font>
          </div>
        </div>
        <div>
          <div align='center'>
            <h3><b style='color:#1691BE'>Estado:</b>
			";	  
	if($estado == " Reparar"){
	echo "<font size='4' color='red'> Por reparar</font></h3>";
	}
	else{
		if($estado == " Reparando"){
			echo "<font size='4' color='orange'> Reparando</font></h3>";
		}
		else{
			if($estado == " Listo"){
				echo "<font size='4' color='green'> Listo</font></h3>";
			}
			else{
				echo "<font size='4' color='blue'> Entregado</font></h3>";
			}
		}
	}
	echo "
          </div>
        </div>
        <div>
          <div align='center'>
            <h3><b style='color:#1691BE'>Reparación:</b> $reparacion</h3>
          </div>
        </div>
        <div>
          <div align='center'>
            <h3><b style='color:#1691BE'>Entregar:</b> $entrega a las $hora</h3>
          </div>
        </div>
			
        <div>
          <div align='center'>
            <h3><b style='color:#1691BE'>Precio:</b> ¢$precio</h3>
          </div>
        </div>
        <div>
          <div align='center'>
            <h3><b style='color:#1691BE'>Abono:</b> ¢$abono</h3>
          </div>
        </div>
        <div>
          <div align='center'>
            <h3><b style='color:#1691BE'>Saldo:</b> ¢$saldo</h3>
          </div>
        </div>
		    
         <div>
          <div align='center'>
            <h3><b style='color:#1691BE'>Ingreso:</b> $entro a las $entroh</h3>
          </div>
        </div>
        <div>
          <div align='center'>
            <h3><b style='color:#1691BE'>Atendido por:</b> $atendido</h3>
          </div>
        </div>
        <div>
          <div align='center'>
            <h3><b style='color:#1691BE'>Salio:</b>
			";	  
	if($salio == "30-11--0001"){
	echo "Sin entregar";
	}
	else{
	echo ($salio);
	echo (" a las ");
	echo ($salioh);
	}
	echo "
            </h3>
          </div>
        </div>
        <div>
          <div align='center'>
            <h3><b style='color:#1691BE'>Entregado por:</b> 
			"; 
			if($entregado==''){
				echo 'Sin entregar';
				}
				else{
					echo $entregado;
					}
			echo "
			</h3>
          </div>
        </div>
        <div> <img src='$foto' /> </div>
<footer class='fluid piepagina'></footer>
		";
		}
?>
        </div>
        <div class="modal-footer">
          <button class='btn btn-block bt-login' type="button" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div align="center">
  <p>Compatible con</p>
  <p><img src='imagenes/multiplataforma.png' alt='img'; width='80' height='41' /></p>
  <p><img src='imagenes/navegadores.png' alt='img'; width='135' height='41' /></p>
</div>
</body>
</html>
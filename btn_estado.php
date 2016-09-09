<?php
include("conexion.php");
ob_start();
session_start();
require_once 'config.php';
if(!isset($_SESSION['logged_in'])){
    header('Location: index.php');
}

if (empty($_GET['slider'])) { 
	   $slider="";
	   } 
	   
else { 
	   $slider = $_GET["slider"];
	   }
	   
$pagina=$_GET["pagina"];
$nombre_user=$_SESSION['name'];
$fecha=date("Y-m-d H:i:s");
$id=$_GET["id"];
	   
if ($slider=="reparacion"){   
$consulta="select * from reparacion where id_reparacion='$id'";
$cs = mysqli_query($cn,$consulta) or die(mysqli_error());
while($fila=mysqli_fetch_array($cs)){
    $estado=$fila["estado"];
	$cod_reparacion=$fila["cod_reparacion"];
}
if($estado==" Reparar"){
    $estado=" Reparando";
    $consulta="update reparacion set estado='$estado' where id_reparacion='$id'";
    $cs = mysqli_query($cn,$consulta) or die(mysqli_error());
    header("location: ".$pagina.".php?slider=".$slider."");
    }else{
    if($estado==" Reparando"){
        $estado=" Listo";
        $consulta="update reparacion set estado='$estado' where id_reparacion='$id'";
        $cs = mysqli_query($cn,$consulta) or die(mysqli_error());
		$sql="INSERT INTO trabajos(nombre,cod_reparacion,fecha) VALUES ('$nombre_user','$cod_reparacion','$fecha')";
		$cs=mysqli_query($cn,$sql);
        header("location: ".$pagina.".php?slider=".$slider."");
        }else{
        if($estado==" Listo"){
            $estado=" Entregado";
            $salio=date("Y-m-d H:i:s");
			$entregado=$_SESSION['name'];
            $consulta="update reparacion set estado='$estado',salio='$salio',entregado='$entregado' where id_reparacion='$id'";
            $cs = mysqli_query($cn,$consulta) or die(mysqli_error());
            header("location: ".$pagina.".php?slider=".$slider."");
        }else{
			if($estado==" Entregado"){
				header("location: ".$pagina.".php?slider=".$slider."");
			}
		}
    }
	}
}

if ($slider=="feoli"){   
$consulta="select * from feoli where id_feoli='$id'";
$cs = mysqli_query($cn,$consulta) or die(mysqli_error());
while($fila=mysqli_fetch_array($cs)){
    $estado=$fila["estado"];
	$cod_feoli=$fila["cod_feoli"];
}
if($estado==" Reparar"){
    $estado=" Reparando";
    $consulta="update feoli set estado='$estado' where id_feoli='$id'";
    $cs = mysqli_query($cn,$consulta) or die(mysqli_error());
    header("location: ".$pagina.".php?slider=".$slider."");
    }else{
    if($estado==" Reparando"){
        $estado=" Listo";
        $consulta="update feoli set estado='$estado' where id_feoli='$id'";
        $cs = mysqli_query($cn,$consulta) or die(mysqli_error());
		$sql="INSERT INTO trabajos(nombre,cod_feoli,fecha) VALUES ('$nombre_user','$cod_feoli','$fecha')";
		$cs=mysqli_query($cn,$sql);
        header("location: ".$pagina.".php?slider=".$slider."");
        }else{
        if($estado==" Listo"){
            $estado=" Entregado";
            $salio=date("Y-m-d H:i:s");
			$entregado=$_SESSION['name'];
            $consulta="update feoli set estado='$estado',salio='$salio',entrego='$entregado' where id_feoli='$id'";
            $cs = mysqli_query($cn,$consulta) or die(mysqli_error());
            header("location: ".$pagina.".php?slider=".$slider."");
        }else{
			if($estado==" Entregado"){
				header("location: ".$pagina.".php?slider=".$slider."");
			}
		}
    }
	}
}
?>
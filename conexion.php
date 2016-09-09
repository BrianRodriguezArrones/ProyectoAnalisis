<?php
$cn=mysqli_connect("localhost","Randall","rv65RV43","u142669696_bd")or die("Error en Conexion");
return($cn);

function conexion(){
 $cn = mysqli_connect("localhost","Randall","rv65RV43","u142669696_bd");
 if (!$cn){
  die('Could not connect: ' . mysql_error());
 }
 return($cn);
}
?>
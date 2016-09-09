<?php
include 'conexion.php';
$q=$_POST['q'];
$cn=conexion();
$sql="select * from clientes where nombre LIKE '".$q."%' LIMIT 0 , 5";
$res=mysqli_query($cn,$sql);
if(mysqli_num_rows($res)==0)
{
echo'<b>No hay sugerencias</b>';
}
else
{
while($fila=mysqli_fetch_array($res)){
	$id_cliente=$fila["id_cliente"];
	$cod_cliente=$fila["cod_cliente"];
	$nombre=$fila["nombre"];
	$apellido=$fila["apellido"];
	$celular=$fila["celular"];
	$telefono=$fila["telefono"];
	
echo'<div class="sugerencias" onclick="myFunction2('.$id_cliente.',\''.$cod_cliente.'\',\''.$nombre.'\',\''.$apellido.'\','.$celular.','.$telefono.')"> '.$fila['nombre'].' '.$fila['apellido'].'</div>';
}
}
?>
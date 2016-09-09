<?php
include("../conexion.php");

$sql = "SELECT usuario, mensaje FROM chat ORDER BY id_chat ASC;";
$result = mysqli_query($cn, $sql);

while($fila = mysqli_fetch_array($result)){
	echo "<p><b>".$fila["usuario"]."</b> dice: ".$fila["mensaje"]."</p>";
}
?>
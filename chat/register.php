<?php
include("../conexion.php");
$user = $_POST['user'];
$message = $_POST['message'];
$sql = "INSERT INTO chat (usuario, mensaje) VALUES('$user', '$message')";
mysqli_query($cn, $sql);
?>
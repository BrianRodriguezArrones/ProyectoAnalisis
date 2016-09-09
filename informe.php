<?php 
ob_start();
session_start();
require_once 'config.php'; 
if(!isset($_SESSION['logged_in'])){
	header('Location: index.php');
}
?>
<?PHP
require('fpdf/fpdf.php');
include("conexion.php");

setlocale (LC_ALL, "es_CR.UTF-8","es_CR","esp");
date_default_timezone_set('America/Costa_Rica'); 

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
$pdf->Image('imagenes/logo.jpg' , 10 ,8, 45 , 17,'JPG');
$pdf->Cell(84, 10, '', 0);
$pdf->Cell(77, 10, 'Trajes Eventuales', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(50, 10, 'Fecha: '.date('d-m-Y').'', 0);
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(70, 8, '', 0);
$pdf->Cell(100, 8, 'LISTADO DE REPARACIONES', 0);
$pdf->Ln(20);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(15, 8, 'Numero', 0);
$pdf->Cell(20, 8, 'Codigo', 0);
$pdf->Cell(30, 8, 'Nombre', 0);
$pdf->Cell(35, 8, 'Apellidos', 0);
$pdf->Cell(70, 8, 'Reparacion', 0);
$pdf->Cell(30, 8, 'Precio', 0);
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);
//CONSULTA
$reparacion = mysqli_query("SELECT * FROM reparacion INNER JOIN clientes ON reparacion.id_cliente = clientes.id_cliente");
$codigo = 0;
$totaluni = 0;
$totaldis = 0;
define('COLONES',chr(162));
while($fila = mysqli_fetch_array($reparacion)){
	$codigo = $codigo+1;
	$totaluni = $totaluni + $fila['precio'];
	$totaldis = $totaldis + $fila['precio'];
	$pdf->Cell(15, 8, $codigo, 0);
	$pdf->Cell(20, 8,$fila['cod_reparacion'], 0);
	$pdf->Cell(30, 8,$fila['nombre'], 0);
	$pdf->Cell(35, 8, $fila['apellido'], 0);
	$pdf->Cell(70, 8, ''.$fila['reparacion'], 0);
	$pdf->Cell(30, 8, ''.COLONES .$fila['precio'], 0);
	$pdf->Ln(8);
}
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(114,8,'',0);
$pdf->Cell(31,8,'Total Unitario: '.COLONES.$totaluni,0);
$pdf->Cell(32,8,'Total Dist: '.COLONES.$totaldis,0);
$pdf->Output();
?>
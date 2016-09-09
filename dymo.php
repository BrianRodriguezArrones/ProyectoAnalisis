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
<html>
<head>
<meta charset="utf-8">
<title>Imprimiendo etiqueta DYMO</title>
<link href="Cuadricula%20Fluida/cuadricula%20fluida.css" rel="stylesheet" type="text/css">
<style type="text/css">
body {
	background-image: url(imagenes/fondo.png);
	background-repeat: repeat;
}
</style>
<script src = "http://labelwriter.com/software/dls/sdk/js/DYMO.Label.Framework.2.0.2.js" type="text/javascript" charset="UTF-8"> </script>
<script src = "PrintLabel.js" type="text/javascript" charset="UTF-8"> </script>
</head>
<body onLoad="function()">
<?php
setlocale (LC_ALL, "es_CR.UTF-8","es_CR","esp");
date_default_timezone_set('America/Costa_Rica'); 
$cod_reparacion=$_GET["cod_reparacion"];
$slider = $_GET["slider"];
if ($slider=="reparacion"){  
$sql="SELECT * FROM reparacion INNER JOIN clientes ON reparacion.id_cliente=clientes.id_cliente WHERE cod_reparacion='$cod_reparacion'";
		$cs=mysqli_query($cn,$sql);
		while($fila=mysqli_fetch_array($cs)){
			$id_reparacion=$fila["id_reparacion"];
			$cod_reparacion=$fila["cod_reparacion"];
			$cod_cliente=$fila["cod_cliente"];
			$nombre=$fila["nombre"];
			$apellido=$fila["apellido"];
			$celular=$fila["celular"];
			$telefono=$fila["telefono"];
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
			}
	echo "
    <div id='dymo' align='center'>
	<br></br><br></br><br></br>
<textarea name='textTextArea' id='textTextArea'  rows='5' cols='40' class='etiqueta'>
 Nombre: $nombre $apellido   Entro:$entro
 Codigo: $cod_reparacion    Celular: $celular
 Detalle: $reparacion
 Total: ¢$precio   Abono: ¢$abono   Saldo: ¢$saldo
 Entrega: $entrega   Hora: $hora
</textarea>
    </div>
	<br></br>
	<div id='dymo' align='center'><img class='imagen' src='imagenes/dymo.png'/></div>
	";
}

if ($slider=="feoli"){   
$sql="SELECT * FROM feoli INNER JOIN clientes ON feoli.id_cliente=clientes.id_cliente WHERE cod_feoli='$cod_feoli'";
		$cs=mysqli_query($cn,$sql);
		while($fila=mysqli_fetch_array($cs)){
			$id_reparacion=$fila["id_feoli"];
			$cod_feoli=$fila["cod_feoli"];
			$cod_cliente=$fila["cod_cliente"];
			$nombre=$fila["nombre"];
			$apellido=$fila["apellido"];
			$celular=$fila["celular"];
			$telefono=$fila["telefono"];
			$reparacion=$fila["reparacion"];
			$entrega1 = strtotime( $fila["entrega"] );
			$entrega = date( 'd-m-Y', $entrega1 );
			$hora1 = strtotime($fila["hora"]);
			$hora = strftime("%I:%M %p",$hora1);
			$foto=$fila["foto"];
			$precio=$fila["precio"];
			$entro1 = strtotime( $fila["entro"] );
			$entro = date( 'd-m-Y', $entro1 );
			}
	echo "
    <div id='dymo' align='center'>
	<br></br><br></br><br></br>
<textarea name='textTextArea' id='textTextArea'  rows='5' cols='40' class='etiqueta'>
 Nombre: $nombre $apellido   Entro:$entro
 Codigo: $cod_feoli    Celular: $celular
 Detalle: $reparacion
 Total: ¢$precio 
 Entrega: $entrega   Hora: $hora
</textarea>
    </div>
	<br></br>
	<div id='dymo' align='center'><img class='imagen' src='imagenes/dymo.png'/></div>
	";
}

?>
</body>
</html>
<script>
(function()
{
    // called when the document completly loaded
    function onload()
    {
        var textTextArea = document.getElementById('textTextArea');
        // prints the label
        {
            try
            {
                // open label
                var labelXml = '<DieCutLabel Version="8.0" Units="twips">\
        <PaperOrientation>Landscape</PaperOrientation>\
        <Id>Address</Id>\
        <PaperName>30252 Address</PaperName>\
        <DrawCommands/>\
        <ObjectInfo>\
            <TextObject>\
                <Name>Text</Name>\
                <ForeColor Alpha="255" Red="0" Green="0" Blue="0" />\
                <BackColor Alpha="0" Red="255" Green="255" Blue="255" />\
                <LinkedObjectName></LinkedObjectName>\
                <Rotation>Rotation0</Rotation>\
                <IsMirrored>False</IsMirrored>\
                <IsVariable>True</IsVariable>\
                <HorizontalAlignment>Left</HorizontalAlignment>\
                <VerticalAlignment>Middle</VerticalAlignment>\
                <TextFitMode>ShrinkToFit</TextFitMode>\
                <UseFullFontHeight>True</UseFullFontHeight>\
                <Verticalized>False</Verticalized>\
                <StyledText/>\
            </TextObject>\
            <Bounds X="332" Y="150" Width="4455" Height="1260" />\
        </ObjectInfo>\
    </DieCutLabel>';
                var label = dymo.label.framework.openLabelXml(labelXml);
                // set label text
                label.setObjectText("Text", textTextArea.value);
                // select printer to print on
                // for simplicity sake just use the first LabelWriter printer
                var printers = dymo.label.framework.getPrinters();
                if (printers.length == 0){
					alert ("No hay impresoras DYMO instaladas. Instale una impresora DYMO.");
					window.close();
				}	
                var printerName = "";
                for (var i = 0; i < printers.length; ++i)
                {
                    var printer = printers[i];
                    if (printer.printerType == "LabelWriterPrinter")
                    {
                        printerName = printer.name;
                        break;
                    }
                }
                if (printerName == ""){
					alert ("No se encontraron impresoras LabelWriter. Instale una impresora Labelwriter.");
					window.close();
				}
                // finally print the label
				label.print(printerName);
				window.close();
            }
            catch(e)
            {
                alert(e.message || e);
				window.close();
            }
        }
    };
    // register onload event
    if (window.addEventListener)
        window.addEventListener("load", onload, false);
    else if (window.attachEvent)
        window.attachEvent("onload", onload);
    else
        window.onload = onload;
} ());
</script>
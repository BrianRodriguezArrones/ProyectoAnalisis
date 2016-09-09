<?php 
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
<title>Camara</title>
<link href="Cuadricula Fluida/boilerplate.css" rel="stylesheet" type="text/css">
<link href="Cuadricula Fluida/cuadricula fluida.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/login.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div style="text-align:center" class="gridContainer clearfix">
<div class="login-form">
<div class="form-header">
<i class="fa fa-camera"></i>
</div>
<div class="form-footer">
<script type="text/javascript">
window.URL = window.URL || window.webkitURL;
navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || function(){alert('Su navegador no soporta navigator.getUserMedia().');};
jQuery(document).ready(function(){
    window.datosVideo = {
        'StreamVideo': null,
        'url' : null
    };
    jQuery('#botonIniciar').on('click', function(e){
        navigator.getUserMedia({'audio':false, 'video':true}, function(streamVideo){
            datosVideo.StreamVideo = streamVideo;
            datosVideo.url = window.URL.createObjectURL(streamVideo);
            jQuery('#camara').attr('src', datosVideo.url);
        }, function(){
            alert('No fue posible obtener acceso a la cámara.');
        });
    });
    jQuery('#botonDetener').on('click', function(e){
        if(datosVideo.StreamVideo){
            datosVideo.StreamVideo.stop();
            window.URL.revokeObjectURL(datosVideo.url);
        };
    });
	jQuery('#botonFoto').on('click', function(e){
    var oCamara, 
        oFoto,
        oContexto,
        w, h;
    oCamara = jQuery('#camara');
    oFoto = jQuery('#foto');
    w = oCamara.width();
    h = oCamara.height();
    oFoto.attr({'width': w, 'height': h});
    oContexto = oFoto[0].getContext('2d');
    oContexto.drawImage(oCamara[0], 0, 0, w, h);
});
});
</script>
<div id='botonera'>
    <button class="btn btn-block bt-login1" id="botonIniciar">Iniciar Camara</button>
    </div>
    <div class="contenedor">
        <video id="camara" autoplay controls></video>
    <button class="btn btn-block bt-login" id="botonFoto">Tomar Foto</button>
    </div>
    <div class="contenedor">
        <canvas id="foto" ></canvas>
    <button class="btn btn-block bt-login3" id="botonDetener">Detener Camara</button>
    </div> 
</div>
</div>
</div>
<div class="fluid" align="center">
<p>Compatible con</p>
  <p><img src='imagenes/multiplataforma.png' alt='img'; width='80' height='41' /></p>
  <p><img src='imagenes/navegadores.png' alt='img'; width='135' height='41' /></p>
  Elaborado por 
  <a href='https://www.facebook.com/randall.valverde.50' target="_blank"><img src='imagenes/facebook.png' alt='img'; width='100' height='40' /></a> 
</div>
</body>
</html>

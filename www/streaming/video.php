<?php

require_once ("../../seguridad/streaming/VideoStream.class.php");
require_once ("../../seguridad/streaming/Funciones.class.php");
$f = new Funciones();

$f->sesion();
if (!$f->validar()) {
    header ("Location: index.php?mensaje=" . urlencode("Debe estar registrado"));
    exit;
}

// Código del vídeo que el usuario quiere reproducir
$ruta = $_GET["v"];

// Reproducción del vídeo
$video = new VideoStream("../../recursos/streaming/videos/$ruta");
$video->start();

?>
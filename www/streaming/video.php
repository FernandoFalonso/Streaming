<?php

require_once ("../../seguridad/streaming/VideoStream.class.php");

// Código del vídeo que el usuario quiere reproducir
$ruta = $_GET["v"];

// Reproducción del vídeo
$video = new VideoStream("../../recursos/streaming/videos/$ruta");
$video->start();

?>
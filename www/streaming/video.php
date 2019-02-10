<?php

require_once ("../../seguridad/streaming/VideoStream.class.php");
require_once ("../../seguridad/streaming/Crypt.class.php");
require_once ("../../seguridad/streaming/Funciones.class.php");

Funciones::sesion();
if (!Funciones::validar()) {
    header ("Location: index.php?mensaje=" . urlencode("Debe estar registrado"));
    exit;
}

// Código del vídeo que el usuario quiere reproducir
$rutaEnc = $_GET["v"];

// Desencripto la ruta
$ruta = trim(Crypt::desencriptar($_SESSION["clave"], $rutaEnc));

// Reproducción del vídeo
$video = new VideoStream("../../recursos/streaming/videos/$ruta");
$video->start();

?>
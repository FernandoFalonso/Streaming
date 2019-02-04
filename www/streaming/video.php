<?php

require_once ("Video.class.php");
require_once ("../../seguridad/streaming/Usuario.class.php");
require_once ("../../seguridad/streaming/VideoStream.class.php");
require_once ("../../seguridad/streaming/Funciones.class.php");
$f = new Funciones();

$f->sesion();
if (!$f->validar()) {
    header ("Location: index.php?mensaje=" . urlencode("Debe estar registrado"));
    exit;
}

// Usuario
$usuario = unserialize($_SESSION["usuario"]);

// Código del vídeo que el usuario quiere reproducir
$ruta = "";
if (isset($_SESSION["ruta"])) {
    $ruta = $_SESSION["ruta"];
}

$video = new VideoStream("../../recursos/streaming/videos/$ruta");
$video->start();

unset($_SESSION["ruta"]);

?>
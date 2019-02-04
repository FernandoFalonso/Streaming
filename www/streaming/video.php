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

// Canal
$canal;
$f->conexion($canal);

// Video que se va a reproducir
$video = "";
if (isset($_POST["video"])) {
    $video = $_POST["video"];
}

$consulta = $canal->prepare("select video from videos where codigo = ?");
$consulta->bind_param("s", $codigo);
$codigo = $video;
$consulta->bind_result($ruta);
$consulta->execute();
$consulta->fetch();

$video = new VideoStream("../../recursos/streaming/videos/" . $ruta);
$video->start();

?>
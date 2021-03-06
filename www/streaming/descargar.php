<?php

require_once ("Pantalla.class.php");
require_once ("../../seguridad/streaming/Usuario.class.php");
require_once ("../../seguridad/streaming/Crypt.class.php");
require_once ("../../seguridad/streaming/Funciones.class.php");

Funciones::sesion();
if (!Funciones::validar()) {
    header ("Location: index.php?mensaje=" . urlencode("Debe estar registrado"));
    exit;
}

// Usuario
$usuario = unserialize($_SESSION["usuario"]);

// Vídeo a descargar
$video = "";
if (isset($_POST["video"])) {
    $video = $_POST["video"];
} else {
    header("Location: javascript:history.go(-1)");
    exit;
}

$titulo = "";
if (isset($_POST["titulo"])) {
    $titulo = $_POST["titulo"];
} else {
    header("Location: javascript:history.go(-1)");
    exit;
}

// Nombre del archivo
$name = $titulo . ".zip";

// Compresión del vídeo
$zip = new ZipArchive();
if ($zip->open($name, ZIPARCHIVE::CREATE)) {
    $zip->addFile("../../recursos/streaming/videos/$video", $titulo . ".mp4");
    $zip->close();
    // Si el archivo existe, se descarga
    if (file_exists($name)) {
        header("Content-type: application/zip");
        header("Content-Disposition: attachment; filename=$name");
        readfile($name);
        
        unlink($name);
    }
    exit;
} else {
    header("Location: principal.php");
    exit;
}

?>
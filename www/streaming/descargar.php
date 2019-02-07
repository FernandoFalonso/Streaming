<?php

require_once ("Pantalla.class.php");
require_once ("../../seguridad/streaming/Usuario.class.php");
require_once ("../../seguridad/streaming/Crypt.class.php");
require_once ("../../seguridad/streaming/Funciones.class.php");
$f = new Funciones();

$f->sesion();
if (!$f->validar()) {
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

// Desencripto la ruta
$ruta = Crypt::desencriptar($_SESSION["clave"], $video);

// Nombre del archivo
$name = $titulo . ".zip";
$rutaCompleta = "../../recursos/streaming/videos/$ruta";
echo $rutaCompleta;

// Compresión del vídeo
$zip = new ZipArchive();
if ($zip->open($name, ZIPARCHIVE::CREATE)) {
    $zip->addFile($rutaCompleta, $titulo . ".mp4");
    $zip->close();
    // Si el archivo existe, se descarga
    if (file_exists($name)) {
        header("Content-type: application/zip");
        header("Content-Disposition: attachment; filename=$name");
        readfile($name);
    }
    unlink($name);
    exit;
} else {
    header("Location: principal?mensaje=" . urlencode("Error al descargar la película"));
    exit;
}

?>
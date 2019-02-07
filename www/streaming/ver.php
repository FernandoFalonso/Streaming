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

// Vídeo
$cod = "";
if (isset($_POST["video"])) {
    $cod = $_POST["video"];    
} else {
    header("Location: javascript:history.go(-1)");
    exit;
}

// Canal
$canal;
$f->conexion($canal);

// Consulta para conseguir la información del vídeo
$consulta = $canal->prepare("select * from videos where codigo = ?");
$consulta->bind_param("s", $cod1);
$cod1 = $cod;
$consulta->execute();
$consulta->bind_result($codigo, $titulo, $cartel, $descargable, $codigo_perfil, $sinopsis, $video);
$consulta->fetch();

$consulta->close();

// Encripta la ruta
$rutaEnc = Crypt::encriptar($_SESSION["clave"], $video);

// Consulta para evitar crear más de una fila en visionado
$consulta = $canal->prepare("select * from visionado where dni = ? and codigo_video = ?");
$consulta->bind_param("ss", $dni1, $codigo_video1);
$dni1 = $usuario->dni;
$codigo_video1 = $codigo;
$consulta->execute();
$consulta->store_result();
if ($consulta->num_rows() < 1) {
    $consulta->close();
    
    // Consulta para insertar una fila en visionado
    $consulta = $canal->prepare("insert into visionado values (null, ?, ?, current_timestamp, ?)");
    $consulta->bind_param("sss", $dni2, $codigo_video2, $sinopsis2);
    $dni2 = $usuario->dni;
    $codigo_video2 = $codigo;
    $sinopsis2 = $sinopsis;
    $consulta->execute();
    $consulta->close();
}

// Array para pasar parámetros a las plantillas
$parametros = array("nombre" => $usuario->nombre, "titulo" => $titulo, "descargable" => $descargable, "codigo" => $codigo, "ruta" => $rutaEnc, "cartel" => $cartel);

// Plantilla
$pantalla = new Pantalla();
$pantalla->mostrar("ver.tpl", $parametros);

?>
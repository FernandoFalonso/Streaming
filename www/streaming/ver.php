<?php

require_once ("Pantalla.class.php");
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

$parametros = array("nombre" => $usuario->nombre);

$pantalla = new Pantalla();
$pantalla->mostrar("ver.tpl", $parametros);

?>
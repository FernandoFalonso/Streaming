<?php

require_once ("../../seguridad/streaming/Funciones.class.php");
$f = new Funciones();

$f->sesion();
if ($f->validar()) {
    session_destroy();
    unset($_SESSION["usuario"]);
    header ("Location: index.php");
    exit;
}

header ("Location: javascript: //history.go(-1)");
exit;

?>
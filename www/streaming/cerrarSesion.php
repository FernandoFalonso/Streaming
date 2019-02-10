<?php

require_once ("../../seguridad/streaming/Funciones.class.php");

Funciones::sesion();
if (Funciones::validar()) {
    session_destroy();
    unset($_SESSION);
    header ("Location: index.php");
    exit;
}

header ("Location: index.php");
exit;

?>
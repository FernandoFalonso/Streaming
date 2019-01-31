<?php

require_once ("Pantalla.class.php");

$mensaje = "";
if (isset($_GET["mensaje"])) {
    $mensaje = $_GET["mensaje"];
}

$parametros = array("mensaje" => $mensaje);

$pantalla = new Pantalla();
$pantalla->mostrar("index.tpl", $parametros);

?>
<?php

require_once ("Usuario.class.php");
require_once ("Funciones.class.php");
$f = new Funciones();

$canal;
$f->conexion($canal);

$dni = "";
if (isset($_POST["dni"])) {
    $dni = strip_tags(trim($_POST["dni"]));
} else {
    header ("Location: index.php?mensaje=" . urlencode("Introduzca un DNI"));
    exit;
}

$clave = "";
if (isset($_POST["clave"])) {
    $clave = strip_tags(trim($_POST["clave"]));
} else {
    header ("Location: index.php?mensaje=" . urlencode("Introduzca una contraseña"));
    exit;
}

$consulta = $canal->prepare("select * from usuarios where dni = ?");
$consulta->bind_param("s", $dni1);
$dni1 = $dni;
$consulta->execute();
$consulta->bind_result($dniBD, $nombreBD, $claveBD);
$consulta->store_result();

if ($consulta->num_rows != 1) {
    header ("Location: index.php?mensaje=" . urlencode("El usuario o la contraseña es incorrecto"));
    exit;
}

$consulta->fetch();

if (!password_verify($clave, $claveBD)) {
    header ("Location: index.php?mensaje=" . urlencode("El usuario o la contraseña es incorrecto"));
    exit;
}

$perfiles = [];
// Tipos de perfiles que tiene el cliente
$consulta->close();
$consulta = $canal->prepare("select codigo_perfil from perfil_usuario where dni = ?");
$consulta->bind_param("s", $dni1);
$dni1 = $dni;
$consulta->execute();
$consulta->bind_result($perfil);
while ($consulta->fetch()) {
    array_push($perfiles, $perfil);
}

// Variables de sesión
$f->sesion();
$_SESSION["usuario"] = serialize(new Usuario($dniBD, $nombreBD, $perfiles));

header ("Location: principal.php?orden=alfa");
exit;

?>
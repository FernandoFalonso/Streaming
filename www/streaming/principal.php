<?php

require_once ("Pantalla.class.php");
require_once ("Video.class.php");
require_once ("../../seguridad/streaming/Usuario.class.php");
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

// Videos
$videos = [];

if (isset($_GET["orden"])) {
    if ($_GET["orden"] == "alfa") {
        
        foreach ($usuario->perfiles as $i => $valor) {
            $consulta = $canal->prepare("select * from videos where codigo_perfil = ?");
            $consulta->bind_param("s", $perfil);
            $perfil = $valor;
            $consulta->execute();
            $consulta->bind_result($codigo, $titulo, $cartel, $descargable, $codigo_perfil, $sinopsis, $video);
            while ($consulta->fetch()) {
                array_push($videos, new Video($codigo, $titulo, $cartel, $descargable, $codigo_perfil, $sinopsis, $video));
            }
            $consulta->close();
        }
        
    } elseif ($_GET["orden"] == "tema") {
        
        
        
    }
}

$parametros = array("nombre" => $usuario->nombre, "videos" => $videos);

$pantalla = new Pantalla();
$pantalla->mostrar("principal.tpl", $parametros);

?>
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
$tematicas = [];

function comparar($a, $b) {
    return strcmp($a->titulo, $b->titulo);
}

if (isset($_GET["orden"])) {
    if ($_GET["orden"] == "alfa") {
        
        foreach ($usuario->perfiles as $i => $valor) {
            // Sentencia para mostrar las películas
            $consulta = $canal->prepare("select * from videos where codigo_perfil = ?");
            $consulta->bind_param("s", $perfil);
            $perfil = $valor;
            $consulta->execute();
            $consulta->bind_result($codigo, $titulo, $cartel, $descargable, $codigo_perfil, $sinopsis, $video);
            while ($consulta->fetch()) {
                array_push($videos, new Video($codigo, $titulo, $cartel, $descargable, $codigo_perfil, $sinopsis, $video));
            }
        }
        $consulta->close();
        // Ordena alfabeticamente el array de videos
        usort($videos, "comparar");
        
    } elseif ($_GET["orden"] == "tema") {
        
        foreach ($usuario->perfiles as $i => $valor) {
            
            // Sentencia para mostrar las películas
            $consulta = $canal->prepare("select * from videos where codigo_perfil = ? order by 2");
            $consulta->bind_param("s", $perfil);
            $perfil = $valor;
            $consulta->execute();
            $consulta->bind_result($codigo, $titulo, $cartel, $descargable, $codigo_perfil, $sinopsis, $video);
            while ($consulta->fetch()) {
                array_push($videos, new Video($codigo, $titulo, $cartel, $descargable, $codigo_perfil, $sinopsis, $video));
            }
            $consulta->close();
        }
    }
}

// Array de vídeos vistos
$vistos = [];

// Consulta para marcar vídeos como "vistos"
$consulta = $canal->prepare("select codigo_video from visionado where dni = ?");
$consulta->bind_param("s", $dni1);
$dni1 = $usuario->dni;
$consulta->execute();
$consulta->bind_result($codigo_video);
while ($consulta->fetch()) {
    array_push($vistos, $codigo_video);
}

// Array para pasar parámetros a las plantillas
$parametros = array("nombre" => $usuario->nombre, "videos" => $videos, "vistos" => $vistos);

// Plantilla
$pantalla = new Pantalla();
$pantalla->mostrar("principal.tpl", $parametros);

?>
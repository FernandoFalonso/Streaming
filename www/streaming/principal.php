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
        usort($videos, "comparar");
        
    } elseif ($_GET["orden"] == "tema") {
        
        foreach ($usuario->perfiles as $i => $valor) {
            // Sentencia para poner las categorías
            $consulta = $canal->prepare("select descripcion from tematica where codigo = ?");
            $consulta->bind_param("s", $codigo1);
            $codigo1 = $valor;
            $consulta->execute();
            $consulta->bind_result($descripcion);
            $consulta->fetch();
            $tematicas = array($valor => $descripcion);
            $consulta->close();
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

$parametros = array("nombre" => $usuario->nombre, "videos" => $videos);

$pantalla = new Pantalla();
$pantalla->mostrar("principal.tpl", $parametros);

?>
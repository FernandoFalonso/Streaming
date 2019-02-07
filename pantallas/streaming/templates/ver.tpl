<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>DAW-TWO-FLIX</title>
        <link rel="stylesheet" href="css/estilos.css" />
    </head>
    <body class="oscuro">
        <header>
            <div id="usuario">
                <p>Bienvenido/a de nuevo, {$nombre}</p>
                <a class="btn" href="cerrarSesion.php">Cerrar Sesión</a>
            </div>
        </header>
        <div id="main">
            <div id="botones">
                <form action="descargar.php" method="post">
                    <a class="btn" onclick="javascript:history.go(-1)">Volver</a>
                {if $descargable == "S"}
                    <input type="hidden" name="titulo" value="{$titulo}" />
                    <input type="hidden" name="video" value="{$ruta}" />
                    <input class="btn" type="submit" value="Descargar" />
                {/if}
                    <h1>{$titulo}</h1>
                </form>
            </div>
            <div id="pelicula">
                <!--<video id="video" width="1280" height="720" controls="controls" preload="none" poster="carteles/{$cartel}" controlsList="nodownload">
                    <source src="video.php?v={$ruta}" type="video/mp4" />
                    Tu navegador no soporta vídeos.
                </video>-->
                <iframe src="video.php?v={$ruta}" frameborder="0"></iframe>
            </div>
        </div>
    </body>
</html>
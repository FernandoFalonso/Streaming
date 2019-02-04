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
                    <input type="hidden" name="video" value="{$codigo}" />
                    <input class="btn" type="submit" value="Descargar" />
                {/if}
                    <h1>{$titulo}</h1>
                </form>
            </div>
            <div id="pelicula">
                <iframe id="video" src="video.php" frameborder="0" width="1280" height="720">
                    Su navegador no soporta IFrames.
                </iframe>
            </div>
        </div>
    </body>
</html>
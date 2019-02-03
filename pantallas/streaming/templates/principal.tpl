<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>DAW-TWO-FLIX</title>
        <link rel="stylesheet" href="css/estilos.css" />
    </head>
    <body>
        <header>
            <div id="usuario">
                <p>Bienvenido de nuevo, {$nombre}</p>
                <a id="cerrar-sesion" href="cerrarSesion.php">Cerrar Sesión</a>
            </div>
            <div id="orden">
                <a href="principal.php?orden=tema">Ordenar por temática</a>
                <a href="principal.php?orden=alfa">Ordenar de manera alfabética</a>
            </div>
        </header>
        <div id="pelis">
            {foreach from=$videos item=video}
            <div>
                <div class="visto"></div>
                <h2>{$video->titulo}</h2>
                <a href="../../recursos/streaming/videos/{$video->video}"><img src="carteles/{$video->cartel}" alt="{$video->titulo}" width="300" height="423" /></a>
                <p><b>Sinopsis:<br /></b>{$video->sinopsis}</p>
                {if $video->descargable == "S"}
                <a class="descargar" href="descargar.php?cod={$video->codigo}">Descargar</a>
                {/if}
            </div>
            {/foreach}
        </div>
    </body>
</html>
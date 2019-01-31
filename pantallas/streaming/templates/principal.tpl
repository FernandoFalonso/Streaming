<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>DAW-TWO-FLIX</title>
    </head>
    <body>
        <header>
            <div id="usuario">
                <p>Bienvenido de nuevo, {$nombre}</p>
                <a href="cerrarSesion.php">Cerrar Sesión</a>
            </div>
            <div id="orden">
                <a href="principal.php?orden=tema">Ordenar por temática</a>
                <a href="principal.php?orden=alfa">Ordenar de manera alfabética</a>
            </div>
            <div id="pelis">
                {foreach from=$videos item=video}
                <div>
                    <h2>{$video->titulo}</h2>
                    <a href="../../../recursos/streaming/videos/{$video->video}"><img src="../../../recursos/streaming/carteles/{$video->cartel}" alt="{$video->titulo}" /></a>
                    <p><b>Sinopsis:<br /></b>{$video->sinopsis}</p>
                    {if $video->descargable == "S"}
                    <a href="descargar.php?cod={$video->codigo}">Descargar</a>
                    {/if}
                </div>
                {/foreach}
            </div>
        </header>
    </body>
</html>
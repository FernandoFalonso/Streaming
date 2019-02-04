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
            <div id="orden">
                <a href="principal.php?orden=tema">Ordenar por temática</a>
                <a href="principal.php?orden=alfa">Ordenar alfabéticamente</a>
            </div>
        </header>
        <div id="pelis">
            {foreach from=$videos item=video}
            <div>
                <p class="visto">
                    {foreach from=$vistos item=visto}
                        {if $video->codigo == $visto}
                        VISTO
                        {/if}
                    {/foreach}
                </p>
                <h2>{$video->titulo}</h2>
                <form action="ver.php" method="post">
                    <input type="hidden" name="video" value="{$video->codigo}" />
                    <input type="image" name="img" src="carteles/{$video->cartel}" width="300" height="423" />
                </form>
                <p><b>Sinopsis:<br /></b>{$video->sinopsis}</p>
                {if $video->descargable == "S"}
                <form action="descargar.php" method="post">
                    <input type="hidden" name="video" value="{$video->codigo}" />
                    <input class="btn" type="submit" value="Descargar" />
                </form>
                {/if}
            </div>
            {/foreach}
        </div>
    </body>
</html>
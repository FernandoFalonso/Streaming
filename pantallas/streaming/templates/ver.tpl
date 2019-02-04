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
        </header>
        <iframe id="video" src="video.php" frameborder="0"></iframe>
    </body>
</html>
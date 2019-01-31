<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>DAW-TWO-FLIX</title>
        <link rel="stylesheet" href="css/estilos.css" />
    </head>
    <body onload="mostrarMsg('{$mensaje}')">
        <div id="msg"></div>
        <div id="inicio-sesion">
            <form action="validar.php" method="post">
                <table>
                    <tr>
                        <td>DNI </td>
                        <td><input type="text" name="dni" placeholder="00000000T" /></td>
                    </tr>
                    <tr>
                        <td>Contraseña </td>
                        <td><input type="password" name="clave" placeholder="********" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Entrar" /></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
    <script>
        function mostrarMsg(mensaje) {
            if (mensaje != "") {
                document.getElementById("msg").innerHTML = mensaje;
            }
        }
    </script>
</html>
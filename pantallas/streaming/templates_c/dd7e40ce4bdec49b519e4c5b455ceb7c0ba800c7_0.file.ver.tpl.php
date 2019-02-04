<?php
/* Smarty version 3.1.33, created on 2019-02-04 22:05:21
  from 'C:\UwAmp\pantallas\streaming\templates\ver.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c58a9112168b1_37908277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd7e40ce4bdec49b519e4c5b455ceb7c0ba800c7' => 
    array (
      0 => 'C:\\UwAmp\\pantallas\\streaming\\templates\\ver.tpl',
      1 => 1549313986,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c58a9112168b1_37908277 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>DAW-TWO-FLIX</title>
        <link rel="stylesheet" href="css/estilos.css" />
    </head>
    <body class="oscuro">
        <header>
            <div id="usuario">
                <p>Bienvenido/a de nuevo, <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
</p>
                <a class="btn" href="cerrarSesion.php">Cerrar Sesión</a>
            </div>
        </header>
        <div id="main">
            <div id="botones">
                <form action="descargar.php" method="post">
                    <a class="btn" onclick="javascript:history.go(-1)">Volver</a>
                <?php if ($_smarty_tpl->tpl_vars['descargable']->value == "S") {?>
                    <input type="hidden" name="video" value="<?php echo $_smarty_tpl->tpl_vars['codigo']->value;?>
" />
                    <input class="btn" type="submit" value="Descargar" />
                <?php }?>
                    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
                </form>
            </div>
            <div id="pelicula">
                <iframe id="video" src="video.php" frameborder="0" width="1280" height="720">
                    Su navegador no soporta IFrames.
                </iframe>
            </div>
        </div>
    </body>
</html><?php }
}

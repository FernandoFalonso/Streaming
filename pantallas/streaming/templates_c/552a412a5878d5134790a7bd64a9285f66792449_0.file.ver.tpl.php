<?php
/* Smarty version 3.1.33, created on 2019-02-06 09:24:16
  from 'G:\Users\DAW2.Lenovo-PC.001\Downloads\UwAmp\pantallas\streaming\templates\ver.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5a99b032a242_59763721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '552a412a5878d5134790a7bd64a9285f66792449' => 
    array (
      0 => 'G:\\Users\\DAW2.Lenovo-PC.001\\Downloads\\UwAmp\\pantallas\\streaming\\templates\\ver.tpl',
      1 => 1549437910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5a99b032a242_59763721 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <input type="hidden" name="titulo" value="<?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
" />
                    <input type="hidden" name="video" value="<?php echo $_smarty_tpl->tpl_vars['video']->value;?>
" />
                    <input class="btn" type="submit" value="Descargar" />
                <?php }?>
                    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
                </form>
            </div>
            <div id="pelicula">
                <video id="video" width="1280" height="720" controls="controls" preload="none" poster="carteles/<?php echo $_smarty_tpl->tpl_vars['cartel']->value;?>
" controlsList="nodownload">
                    <source src="video.php?v=<?php echo $_smarty_tpl->tpl_vars['video']->value;?>
" type="video/mp4" />
                    Tu navegador no soporta vídeos.
                </video>
            </div>
        </div>
    </body>
</html><?php }
}

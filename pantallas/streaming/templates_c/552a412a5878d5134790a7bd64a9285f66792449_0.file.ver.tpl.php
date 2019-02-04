<?php
/* Smarty version 3.1.33, created on 2019-02-04 11:40:01
  from 'G:\Users\DAW2.Lenovo-PC.001\Downloads\UwAmp\pantallas\streaming\templates\ver.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c581681a37821_11879336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '552a412a5878d5134790a7bd64a9285f66792449' => 
    array (
      0 => 'G:\\Users\\DAW2.Lenovo-PC.001\\Downloads\\UwAmp\\pantallas\\streaming\\templates\\ver.tpl',
      1 => 1549276760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c581681a37821_11879336 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>DAW-TWO-FLIX</title>
        <link rel="stylesheet" href="css/estilos.css" />
    </head>
    <body>
        <header>
            <div id="usuario">
                <p>Bienvenido de nuevo, <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
</p>
                <a id="cerrar-sesion" href="cerrarSesion.php">Cerrar Sesión</a>
            </div>
        </header>
        <iframe id="video" src="video.php" frameborder="0"></iframe>
    </body>
</html><?php }
}

<?php
/* Smarty version 3.1.33, created on 2019-01-30 14:48:13
  from 'C:\UwAmp\pantallas\streaming\templates\principal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c51ab1dc37570_48819185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f28681f7eecf155afeb0367b2b80bdb4cdde485' => 
    array (
      0 => 'C:\\UwAmp\\pantallas\\streaming\\templates\\principal.tpl',
      1 => 1548837336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c51ab1dc37570_48819185 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>DAW-TWO-FLIX</title>
    </head>
    <body>
        <header>
            <div id="usuario">
                <p>Bienvenido de nuevo, <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
</p>
                <a href="cerrarSesion.php">Cerrar Sesión</a>
            </div>
            <div id="orden">
                <a href="principal.php?orden=tema">Ordenar por temática</a>
                <a href="principal.php?orden=alfa">Ordenar de manera alfabética</a>
            </div>
            <div id="pelis">
                
            </div>
        </header>
    </body>
</html><?php }
}

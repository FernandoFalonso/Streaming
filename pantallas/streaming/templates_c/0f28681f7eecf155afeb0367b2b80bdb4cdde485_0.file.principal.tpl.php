<?php
/* Smarty version 3.1.33, created on 2019-02-03 22:18:23
  from 'C:\UwAmp\pantallas\streaming\templates\principal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c575a9f17ccd1_62149984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f28681f7eecf155afeb0367b2b80bdb4cdde485' => 
    array (
      0 => 'C:\\UwAmp\\pantallas\\streaming\\templates\\principal.tpl',
      1 => 1549228691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c575a9f17ccd1_62149984 (Smarty_Internal_Template $_smarty_tpl) {
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
            <div id="orden">
                <a href="principal.php?orden=tema">Ordenar por temática</a>
                <a href="principal.php?orden=alfa">Ordenar de manera alfabética</a>
            </div>
        </header>
        <div id="pelis">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['videos']->value, 'video');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
?>
            <div>
                <div class="visto"></div>
                <h2><?php echo $_smarty_tpl->tpl_vars['video']->value->titulo;?>
</h2>
                <a href="../../recursos/streaming/videos/<?php echo $_smarty_tpl->tpl_vars['video']->value->video;?>
"><img src="carteles/<?php echo $_smarty_tpl->tpl_vars['video']->value->cartel;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['video']->value->titulo;?>
" width="300" height="423" /></a>
                <p><b>Sinopsis:<br /></b><?php echo $_smarty_tpl->tpl_vars['video']->value->sinopsis;?>
</p>
                <?php if ($_smarty_tpl->tpl_vars['video']->value->descargable == "S") {?>
                <a class="descargar" href="descargar.php?cod=<?php echo $_smarty_tpl->tpl_vars['video']->value->codigo;?>
">Descargar</a>
                <?php }?>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </body>
</html><?php }
}

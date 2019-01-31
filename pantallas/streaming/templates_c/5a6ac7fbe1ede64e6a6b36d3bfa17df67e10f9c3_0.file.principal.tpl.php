<?php
/* Smarty version 3.1.33, created on 2019-01-31 09:59:58
  from 'G:\Users\DAW2.Lenovo-PC.001\Downloads\UwAmp\pantallas\streaming\templates\principal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c52b90e8e1c66_41607385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a6ac7fbe1ede64e6a6b36d3bfa17df67e10f9c3' => 
    array (
      0 => 'G:\\Users\\DAW2.Lenovo-PC.001\\Downloads\\UwAmp\\pantallas\\streaming\\templates\\principal.tpl',
      1 => 1548925197,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c52b90e8e1c66_41607385 (Smarty_Internal_Template $_smarty_tpl) {
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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['videos']->value, 'video');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
?>
                <div>
                    <h2><?php echo $_smarty_tpl->tpl_vars['video']->value->titulo;?>
</h2>
                    <a href="../../../recursos/streaming/videos/<?php echo $_smarty_tpl->tpl_vars['video']->value->video;?>
"><img src="../../../recursos/streaming/carteles/<?php echo $_smarty_tpl->tpl_vars['video']->value->cartel;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['video']->value->titulo;?>
" /></a>
                    <p><b>Sinopsis:<br /></b><?php echo $_smarty_tpl->tpl_vars['video']->value->sinopsis;?>
</p>
                    <?php if ($_smarty_tpl->tpl_vars['video']->value->descargable == "S") {?>
                    <a href="descargar.php?cod=<?php echo $_smarty_tpl->tpl_vars['video']->value->codigo;?>
">Descargar</a>
                    <?php }?>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </header>
    </body>
</html><?php }
}

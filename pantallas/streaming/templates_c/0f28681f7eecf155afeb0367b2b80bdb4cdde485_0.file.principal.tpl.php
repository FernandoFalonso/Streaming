<?php
/* Smarty version 3.1.33, created on 2019-02-07 15:14:16
  from 'C:\UwAmp\pantallas\streaming\templates\principal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5c3d3857bca8_07292835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f28681f7eecf155afeb0367b2b80bdb4cdde485' => 
    array (
      0 => 'C:\\UwAmp\\pantallas\\streaming\\templates\\principal.tpl',
      1 => 1549548834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5c3d3857bca8_07292835 (Smarty_Internal_Template $_smarty_tpl) {
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
            <div id="orden">
                <a href="principal.php?orden=tema">Ordenar por temática</a>
                <a href="principal.php?orden=alfa">Ordenar alfabéticamente</a>
            </div>
        </header>
        <div id="pelis">
            <?php $_smarty_tpl->_assignInScope('tema', array());?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['videos']->value, 'video');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['video']->value->tematica != null && !in_array($_smarty_tpl->tpl_vars['video']->value->tematica,$_smarty_tpl->tpl_vars['tema']->value)) {?>
                <div id="tematica">
                    <?php echo $_smarty_tpl->tpl_vars['video']->value->tematica;?>

                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['tema']) ? $_smarty_tpl->tpl_vars['tema']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['video']->value->tematica;
$_smarty_tpl->_assignInScope('tema', $_tmp_array);?>
                </div>
                <?php }?>
            <div>
                <p class="visto">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vistos']->value, 'visto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['visto']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['video']->value->codigo == $_smarty_tpl->tpl_vars['visto']->value) {?>
                        VISUALIZADA
                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </p>
                <h2><?php echo $_smarty_tpl->tpl_vars['video']->value->titulo;?>
</h2>
                <form action="ver.php" method="post">
                    <input type="hidden" name="video" value="<?php echo $_smarty_tpl->tpl_vars['video']->value->codigo;?>
" />
                    <input type="image" name="img" src="carteles/<?php echo $_smarty_tpl->tpl_vars['video']->value->cartel;?>
" width="300" height="423" />
                </form>
                <p><b>Sinopsis:<br /></b><?php echo $_smarty_tpl->tpl_vars['video']->value->sinopsis;?>
</p>
                <?php if ($_smarty_tpl->tpl_vars['video']->value->descargable == "S") {?>
                <form action="descargar.php" method="post">
                    <input type="hidden" name="titulo" value="<?php echo $_smarty_tpl->tpl_vars['video']->value->titulo;?>
" />
                    <input type="hidden" name="video" value="<?php echo $_smarty_tpl->tpl_vars['video']->value->video;?>
" />
                    <input class="btn" type="submit" value="Descargar" />
                </form>
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

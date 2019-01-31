<?php
/* Smarty version 3.1.33, created on 2019-01-30 14:48:13
  from 'C:\UwAmp\pantallas\streaming\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c51ab1dc38c28_17032849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90e51f862c8db9fc1c03ec33efa94dd0c8735a83' => 
    array (
      0 => 'C:\\UwAmp\\pantallas\\streaming\\templates\\index.tpl',
      1 => 1548834918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c51ab1dc38c28_17032849 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>DAW-TWO-FLIX</title>
    </head>
    <body onload="mostrarMsg('<?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
')">
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
    <?php echo '<script'; ?>
>
        function mostrarMsg(mensaje) {
            if (mensaje != "") {
                document.getElementById("msg").innerHTML = mensaje;
            }
        }
    <?php echo '</script'; ?>
>
</html><?php }
}

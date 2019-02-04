<?php
/* Smarty version 3.1.33, created on 2019-02-04 08:25:18
  from 'G:\Users\DAW2.Lenovo-PC.001\Downloads\UwAmp\pantallas\streaming\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c57e8dea9df95_56535778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48083eddaab82a74583aaa7b18b332cc6ea22cf6' => 
    array (
      0 => 'G:\\Users\\DAW2.Lenovo-PC.001\\Downloads\\UwAmp\\pantallas\\streaming\\templates\\index.tpl',
      1 => 1549264878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c57e8dea9df95_56535778 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>DAW-TWO-FLIX</title>
        <link rel="stylesheet" href="css/estilos.css" />
    </head>
    <body onload="mostrarMsg('<?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
')">
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
        <div id="info"></div>
    </body>
    <?php echo '<script'; ?>
>
        function mostrarMsg(mensaje) {
            if (mensaje != "") {
                document.getElementById("info").innerHTML = "<div id='msg'>" + mensaje + "</div>";
            }
        }
    <?php echo '</script'; ?>
>
</html><?php }
}

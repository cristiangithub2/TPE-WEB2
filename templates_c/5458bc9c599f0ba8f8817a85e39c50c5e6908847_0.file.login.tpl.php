<?php
/* Smarty version 3.1.39, created on 2023-10-16 22:55:46
  from 'C:\xampp\htdocs\tpWeb2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_652da352737880_82731244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5458bc9c599f0ba8f8817a85e39c50c5e6908847' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpWeb2\\templates\\login.tpl',
      1 => 1697489117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_652da352737880_82731244 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div class="d-flex justify-content-evenly">
    <div class="p-2 bd-highlight">
        <h2 class="text-center"> Inicio de sesión</h2>
        <form method="POST" action="validar">
            <div class="mb-3 text-center">
                <input placeholder="Ingrese su email" type="text" name="email" required>
            </div>
            <div class="mb-3 text-center">
                <input placeholder="Ingrese su contraseña" type="password" name="password" id="password" required>
            </div>
            <div class="mb-3 text-center">
                <input type="submit" class="btn-submit" value="Iniciar sesión">
            </div>
        </form>
        <h4 class="alerta text-center"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h4>
    </div>
</div>





<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

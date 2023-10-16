<?php
/* Smarty version 3.1.39, created on 2023-10-16 22:55:43
  from 'C:\xampp\htdocs\tpWeb2\templates\categoriasLista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_652da34fe8f889_51416838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b4f82738643edd34a5fbc51e6cc69d21e632976' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpWeb2\\templates\\categoriasLista.tpl',
      1 => 1697489117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:templates/agregar_editCategoria.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_652da34fe8f889_51416838 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div>
    <h3>~~Lista de categorias</h3>
    <p>Clickee sobre la categoria deseada para inspeccionarla</p>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
         <h4> <button type="button"><a href="mostrarPlatosEnCat/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->categoria_id;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->categoria;?>
</a></button></h4>
         <p><?php echo $_smarty_tpl->tpl_vars['categoria']->value->descripcion;?>
</p>
         <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
            <button type="button" class="btn btn-outline-danger"> <a
                href="borrarCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->categoria_id;?>
">Borrar</a></button>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("file:templates/agregar_editCategoria.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
    <?php }
$_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

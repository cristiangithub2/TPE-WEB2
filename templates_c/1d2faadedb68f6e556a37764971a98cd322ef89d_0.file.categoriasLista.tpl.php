<?php
/* Smarty version 3.1.39, created on 2023-10-16 00:45:28
  from 'C:\xampp\htdocs\TpWeb2\templates\categoriasLista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_652c6b88dd71c0_01591770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d2faadedb68f6e556a37764971a98cd322ef89d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpWeb2\\templates\\categoriasLista.tpl',
      1 => 1697409920,
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
function content_652c6b88dd71c0_01591770 (Smarty_Internal_Template $_smarty_tpl) {
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

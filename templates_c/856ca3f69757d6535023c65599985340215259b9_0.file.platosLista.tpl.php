<?php
/* Smarty version 3.1.39, created on 2023-10-15 17:06:07
  from 'C:\xampp\htdocs\TpWeb2\templates\platosLista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_652bffdf59f4e0_37146193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '856ca3f69757d6535023c65599985340215259b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpWeb2\\templates\\platosLista.tpl',
      1 => 1697382356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_652bffdf59f4e0_37146193 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['platos']->value, 'plato');
$_smarty_tpl->tpl_vars['plato']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plato']->value) {
$_smarty_tpl->tpl_vars['plato']->do_else = false;
?>
        <div>
            <h3><button type="button" class="btn btn-outline-primary"><a
            href="plato/<?php echo $_smarty_tpl->tpl_vars['plato']->value->plato_id;?>
"><?php echo $_smarty_tpl->tpl_vars['plato']->value->nombre_plato;?>
</a></button></h3>
        
            <h4>$ <?php echo $_smarty_tpl->tpl_vars['plato']->value->precio;?>
</h4>

            <?php if ((isset($_smarty_tpl->tpl_vars['categorias']->value[$_smarty_tpl->tpl_vars['plato']->value->categoria_id]))) {?>
                <button type="button">Categoria: <?php echo $_smarty_tpl->tpl_vars['categorias']->value[$_smarty_tpl->tpl_vars['plato']->value->categoria_id]->categoria;?>
</button>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                <button type="button" class="btn btn-outline-danger"> <a
                    href="borrarPlato/<?php echo $_smarty_tpl->tpl_vars['producto']->value->plato_id;?>
">Borrar</a></button>
            <?php }?>
        </div>
        
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

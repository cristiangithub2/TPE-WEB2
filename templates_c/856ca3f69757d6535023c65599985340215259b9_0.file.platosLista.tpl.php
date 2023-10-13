<?php
/* Smarty version 3.1.39, created on 2023-10-14 00:36:17
  from 'C:\xampp\htdocs\TpWeb2\templates\platosLista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6529c66123a0b4_10668666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '856ca3f69757d6535023c65599985340215259b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpWeb2\\templates\\platosLista.tpl',
      1 => 1697236035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6529c66123a0b4_10668666 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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

            <button type="button">Categoria:<?php echo $_smarty_tpl->tpl_vars['categorias']->value->{$_smarty_tpl->tpl_vars['plato']->value->categoria_id}->{$_smarty_tpl->tpl_vars['categoria']->value};?>
 </button>
            <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                <button type="button" class="btn btn-outline-danger"> <a
                    href="deleteItem/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_item;?>
">Borrar</a></button>
            <?php }?>
        </div>
        
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 3.1.39, created on 2023-10-16 00:09:52
  from 'C:\xampp\htdocs\TpWeb2\templates\platosDeCateg.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_652c633033c4f6_27283484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70960b62b5dda7029c98446bb63446ff2aa94026' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpWeb2\\templates\\platosDeCateg.tpl',
      1 => 1697407789,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_652c633033c4f6_27283484 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['platos']->value, 'plato');
$_smarty_tpl->tpl_vars['plato']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plato']->value) {
$_smarty_tpl->tpl_vars['plato']->do_else = false;
?>
                <li><button type="button"><?php echo $_smarty_tpl->tpl_vars['plato']->value->nombre_plato;?>
</button>  <?php echo $_smarty_tpl->tpl_vars['plato']->value->ingredientes;?>
  $<?php echo $_smarty_tpl->tpl_vars['plato']->value->precio;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

<?php $_smarty_tpl->_subTemplateRender('file:./footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

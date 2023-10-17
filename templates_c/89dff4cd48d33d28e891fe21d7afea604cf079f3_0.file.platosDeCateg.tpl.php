<?php
/* Smarty version 3.1.39, created on 2023-10-17 01:39:28
  from 'C:\xampp\htdocs\tpWeb2\templates\platosDeCateg.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_652dc9b0a010c0_18105618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89dff4cd48d33d28e891fe21d7afea604cf079f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpWeb2\\templates\\platosDeCateg.tpl',
      1 => 1697499567,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_652dc9b0a010c0_18105618 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    <h1><?php echo $_smarty_tpl->tpl_vars['categoria']->value;?>
<h1>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['platos']->value, 'plato');
$_smarty_tpl->tpl_vars['plato']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plato']->value) {
$_smarty_tpl->tpl_vars['plato']->do_else = false;
?>  
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['plato']->value->nombre_plato;?>
</h5>
            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['plato']->value->ingredientes;?>
</p>
            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['plato']->value->precio;?>
</p>
        </div>
    </div>
    <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>


<?php $_smarty_tpl->_subTemplateRender('file:./footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

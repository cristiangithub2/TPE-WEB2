<?php
/* Smarty version 3.1.39, created on 2023-10-16 01:42:19
  from 'C:\xampp\htdocs\TpWeb2\templates\plato.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_652c78dbdd5fd8_81470705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76404b0dbb656318ce8004ce1a4cc8246609ba76' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpWeb2\\templates\\plato.tpl',
      1 => 1697413335,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_652c78dbdd5fd8_81470705 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="text-center"> <?php echo $_smarty_tpl->tpl_vars['plato']->value->nombre_plato;?>
 </h1>
<h2 class="text-center"> <?php echo $_smarty_tpl->tpl_vars['plato']->value->ingredientes;?>
 </h2>
<p class="text-center lead"> <?php echo $_smarty_tpl->tpl_vars['plato']->value->tiempo_coccion;?>
</p>
<p class="text-center"> <?php echo $_smarty_tpl->tpl_vars['plato']->value->origen;?>
</p>
<?php if ((isset($_smarty_tpl->tpl_vars['categoria_id']->value)) && (isset($_smarty_tpl->tpl_vars['categoria']->value[$_smarty_tpl->tpl_vars['plato']->value->categoria_id]))) {?>
    <p class="text-center lead"> Categoria: <?php echo $_smarty_tpl->tpl_vars['categoria']->value[$_smarty_tpl->tpl_vars['plato']->value->categoria_id]->categoria;?>
</p>
<?php }?>
<h3 class="text-center">$<?php echo $_smarty_tpl->tpl_vars['plato']->value->precio;?>
</h3>

<?php $_smarty_tpl->_subTemplateRender('file:./footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

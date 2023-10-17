<?php
/* Smarty version 3.1.39, created on 2023-10-17 02:07:43
  from 'C:\xampp\htdocs\tpWeb2\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_652dd04f314953_79097102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ef56d40430b8b1369da1d508bef654b3932a528' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpWeb2\\templates\\home.tpl',
      1 => 1697501259,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_652dd04f314953_79097102 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h2 class="text-center">¡Bienvenido!</h2>
    <img src="./img/home.jpg" class="rounded mx-auto d-block" alt="...">
  
    <p class="text-center lead">Acompañanos con estas maravillosas recetas. Solo lo mejor en tu mesa</p>
<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 3.1.39, created on 2023-10-16 22:58:14
  from 'C:\xampp\htdocs\tpWeb2\templates\agregar_editCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_652da3e63a2fe4_49446937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '992ce05398afd7d03eac8a849d178fe07f300cd1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpWeb2\\templates\\agregar_editCategoria.tpl',
      1 => 1697489117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652da3e63a2fe4_49446937 (Smarty_Internal_Template $_smarty_tpl) {
?></div>
    <div class="d-flex justify-content-evenly">
        <div class="p-2 bd-highlight">
            <h3>Agregar Categoria</h3>
                <form action="agregarCategoria" method="POST">
                    <div class="mb-3">
                        <input type="text" name="categoria" placeholder="Inserte nombre" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="descripcion" placeholder="Inserte descripcion" required>
                    </div>
                    <input type="submit" value="Agregar">
                </form>
        </div>
        <div class="p-2 bd-highlight">
            <h3>Editar Categoria</h3>
                <form action="editarCategoria" method="POST">
                    <div class="mb-3">
                        <select name="categoria_id" class="form-select">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->categoria_id;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->categoria;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                    <div class="mb-3">
                      <input type="text" name="categoria"    placeholder="Inserte el nuevo nombre" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="descripcion" placeholder="Inserte nueva descripcion" required>
                    </div>
                    <input type="submit" value="Editar">
                </form>
        </div>
    </div><?php }
}

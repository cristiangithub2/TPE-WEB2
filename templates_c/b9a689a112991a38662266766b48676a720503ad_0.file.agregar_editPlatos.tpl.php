<?php
/* Smarty version 3.1.39, created on 2023-10-16 01:31:39
  from 'C:\xampp\htdocs\TpWeb2\templates\agregar_editPlatos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_652c765b3a1ae2_48162262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9a689a112991a38662266766b48676a720503ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpWeb2\\templates\\agregar_editPlatos.tpl',
      1 => 1697412508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652c765b3a1ae2_48162262 (Smarty_Internal_Template $_smarty_tpl) {
?></div>
    <div class="d-flex justify-content-evenly">
        <div class="p-2 bd-highlight">
            <h3>Agregar Item</h3>
                <form action="agregarPlato" method="POST">
                    <div class="mb-3">
                        <input type="text" name="nombre_plato" placeholder="Inserte nombre" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="ingredientes" placeholder="Inserte ingredientes" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="tiempo_coccion" placeholder="Inserte tiempo de coccion" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="origen" placeholder="Inserte lugar de origen" required>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="precio" placeholder="Inserte precio" required>
                    </div>  
                    <div class="mb-3">
                        <select name="categoria_id" class="form-select">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->categoria_id;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->categoria_id;?>
-<?php echo $_smarty_tpl->tpl_vars['categoria']->value->categoria;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                    <input type="submit" value="Crear">
                </form>
        </div>
        <div class="p-2 bd-highlight">
            <h3>Editar Item</h3>
                <form action="editarPlato" method="POST">
                    <div class="mb-3">
                        <select name="plato_id" class="form-select">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['platos']->value, 'plato');
$_smarty_tpl->tpl_vars['plato']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plato']->value) {
$_smarty_tpl->tpl_vars['plato']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['plato']->value->id_item;?>
"><?php echo $_smarty_tpl->tpl_vars['plato']->value->plato_id;?>
-<?php echo $_smarty_tpl->tpl_vars['plato']->value->nombre_plato;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="nombre_plato" placeholder="Inserte el nuevo nombre" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="ingredientes" placeholder="Inserte ingredientes" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="tiempo_coccion" placeholder="Inserte tiempo de coccion" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="origen" placeholder="Inserte lugar  de origen" required>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="precio" placeholder="Inserte precio" required>
                    </div>
                    <div class="mb-3">
                        <select name="categoria_id" class="form-select">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->categoria_id;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->categoria_id;?>
-<?php echo $_smarty_tpl->tpl_vars['categoria']->value->categoria;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                    <input type="submit" value="Editar">
                </form>
        </div>
    </div><?php }
}

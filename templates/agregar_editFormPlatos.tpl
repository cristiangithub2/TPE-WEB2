</div>
    <div class="d-flex justify-content-evenly">
        <div class="p-2 bd-highlight">
            <h3>Agregar Item</h3>
                <form action="agregarPlato" method="POST">
                    <div class="mb-3">
                        <input type="text" name="nombre_plato" placeholder="Inserte nombre" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="ingredientes" placeholder="Inserte marca" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="tiempo_coccion" placeholder="Inserte descripcion" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="origen" placeholder="Inserte contenido en mililitros" required>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="precio" placeholder="Inserte precio" required>
                    </div>
                    <div class="mb-3">
                        <select name="categoria_id" class="form-select">
                            {foreach from=$categorias item=$categoria}
                                <option value="{$categoria->categoria_id}">{$categoria->categoria_id}-{$categoria->categoria}</option>
                            {/foreach}
                        </select>
                    </div>
                    <input type="submit" value="Crear">
                </form>
        </div>
        <div class="p-2 bd-highlight">
            <h3>Editar Item</h3>
                <form action="editItem" method="POST">
                    <div class="mb-3">
                        <select name="id_item" class="form-select">
                            {foreach from=$items item=$item}
                                <option value="{$item->id_item}">{$item->id_item}-{$item->nombre}</option>
                            {/foreach}
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
                            {foreach from=$categorias item=$category}
                                <option value="{$categoria->categoria_id}">{$categoria->categoria_id}-{$categoria->categoria}</option>
                            {/foreach}
                        </select>
                    </div>
                    <input type="submit" value="Editar">
                </form>
        </div>
    </div>
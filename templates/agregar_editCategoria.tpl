</div>
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
                            {foreach from=$categorias item=$categoria}
                                <option value="{$categoria->categoria_id}">{$categoria->categoria}</option>
                            {/foreach}
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
    </div>
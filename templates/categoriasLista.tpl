{include file="templates/header.tpl"}
<div>
    <h3>~~Lista de categorias</h3>
    <p>Clickee sobre la categoria deseada para inspeccionarla</p>
    {foreach from=$categorias item=$categoria}
         <h4> <button type="button"><a href="mostrarPlatosEnCat/{$categoria->categoria_id}">{$categoria->categoria}</a></button></h4>
         <p>{$categoria->descripcion}</p>
         {if $logged}
            <button type="button" class="btn btn-outline-danger"> <a
                href="borrarCategoria/{$categoria->categoria_id}">Borrar</a></button>
        {/if}
    {/foreach}
</div>
    {if $logged}
        {include file="templates/add_editForCategories.tpl    //***falta crearloooooo"} 
    {/if}
{include file="templates/footer.tpl"}
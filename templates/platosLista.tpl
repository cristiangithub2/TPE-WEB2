{include file="./header.tpl"}

<div>
    {foreach from=$platos item=plato}
        <div>
            <h3><button type="button" class="btn btn-outline-primary"><a
            href="plato/{$plato->plato_id}">{$plato->nombre_plato }</a></button></h3>
        
            <h4>$ {$plato->precio}</h4>

            {if isset($categorias[$plato->categoria_id])}
                <button type="button">Categoria: {$categorias[$plato->categoria_id]->categoria}</button>
            {/if}
            {if $logged}
                <button type="button" class="btn btn-outline-danger"> <a
                    href="borrarPlato/{$producto->plato_id}">Borrar</a></button>
            {/if}
        </div>
        
    {/foreach}

{include file="./footer.tpl"}
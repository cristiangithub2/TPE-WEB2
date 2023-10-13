{include file="templates/header.tpl"}

<div>
    {foreach from=$platos item=plato}
        <div>
            <h3><button type="button" class="btn btn-outline-primary"><a
            href="plato/{$plato->plato_id}">{$plato->nombre_plato }</a></button></h3>
        
            <h4>$ {$plato->precio}</h4>

            <button type="button">Categoria:{$categorias->{$plato->categoria_id}->$categoria} </button>
            {if $logged}
                <button type="button" class="btn btn-outline-danger"> <a
                    href="deleteItem/{$producto->id_item}">Borrar</a></button>
            {/if}
        </div>
        
    {/foreach}

{include file="templates/footer.tpl"}
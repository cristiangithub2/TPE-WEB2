
{include file='./header.tpl'}


<div>
     <h2 class="text-center">{$categoria->categoria}</h2>
        {foreach from=$platos item=$producto}
            <li><button type="button">{$producto->nombre_plato}</button>  {$producto->ingredientes}  ${$producto->precio}</li>
        {/foreach}
</div>


{include file='./footer.tpl'}
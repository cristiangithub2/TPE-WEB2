
{include file='/templates/header.tpl'}


<div>
    <h2 class="text-center">{$categoria->categoria}</h2>
        {foreach from=$items item=$producto}
            <li><button type="button">{$producto->nombre}</button>  {$producto->marca}  ${$producto->precio}</li>
        {/foreach}
</div>


{include file='/templates/footer.tpl'}
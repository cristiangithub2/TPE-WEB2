{include file='./header.tpl'}

    
    <h1>{$categoria}<h1>
    {foreach from=$platos item=$plato}  
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{$plato->nombre_plato}</h5>
            <p class="card-text">{$plato->ingredientes}</p>
            <p class="card-text">{$plato->precio}</p>
        </div>
    </div>
    {{/foreach}}

{include file='./footer.tpl'}

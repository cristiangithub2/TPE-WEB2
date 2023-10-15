{include file='./header.tpl'}

    <div>
    {foreach from=$platos item=$plato}  
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
            {foreach from=$platos item=$plato}
                <li><button type="button">{$plato->nombre_plato}</button>  {$plato->ingredientes}  ${$plato->precio}</li>
            {/foreach}
    </div>

{include file='./footer.tpl'}

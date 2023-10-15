{include file='./header.tpl'}

<h1 class="text-center"> {$plato->nombre_plato} </h1>
<h2 class="text-center"> {$plato->ingredientes} </h2>
<p class="text-center lead"> {$plato->tiempo_coccion}</p>
<p class="text-center"> {$plato->origen}</p>
{if isset($categoria_id) && isset($categoria[$plato->categoria_id])}
    <p class="text-center lead"> Categoria: {$categoria[$plato->categoria_id]->categoria}</p>
{/if}
<h3 class="text-center">${$plato->precio}</h3>

{include file='./footer.tpl'}

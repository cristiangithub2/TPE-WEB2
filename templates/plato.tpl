{include file="/template/header.tpl" }

<h1 class="text-center"> {$platos->nombre_plato} </h1>
<h2 class="text-center"> {$platos->ingredientes} </h2>
<p class="text-center lead"> {$platos->coccion}</p>
<p class="text-center"> {$platos->origen}</p>
<p class="text-center lead"> Categoria: {$plato->categoria}</p>
<h3 class="text-center">{$platos->precio}</h3>

{include file="/template/footer.tpl" }

<?php
function getPlatos() {
    $db = new PDO('mysql:host=localhost;dbname=recetario;charset=utf8', 'root', '');
    $query = $db->prepare('SELECT * FROM platos');
    $query->execute();
    $platos = $query->fetchAll(PDO::FETCH_OBJ);

    return $platos;
}

$platos = getPlatos();
echo "<ul>";
foreach ($platos as $plato) {
    echo "<li>$plato->nombre_plato <a href='detalle_platos.php?id=$plato->plato_id'>Ver detalles</a></li>";
}
echo "</ul>";



function getCategoria() {
    $db = new PDO('mysql:host=localhost;dbname=recetario;charset=utf8', 'root', '');
    $query = $db->prepare('SELECT * FROM categoria');
    $query->execute();
    $categorias = $query->fetchAll(PDO::FETCH_OBJ);

    return $categorias;
}


$categorias = getCategoria();

echo "<ul>";
foreach ($categorias as $categoria) {
    echo "<li>$categoria->categoria <a href='detalle_categoria.php?id=$categoria->categoria_id'>Ver mas</a></li>";
}
echo "</ul>";
?> 




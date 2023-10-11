<?php
function getRecetario() {
    $db = new PDO('mysql:host=localhost;dbname=recetario;charset=utf8', 'root', '');
    $query = $db->prepare('SELECT * FROM platos');
    $query->execute();
    $platos = $query->fetchAll(PDO::FETCH_OBJ);

    return $platos;
}

$platos = getRecetario();
echo "<ul>";
foreach ($platos as $plato) {
    echo "<li>$plato->nombre_plato <a href='detalle_platos.php?id=$plato->plato_id'>Ver detalles</a></li>";
}
echo "</ul>";
?> 
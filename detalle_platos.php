<?php
if (isset($_GET['id'])) {
    $platoId = $_GET['id'];
    
    // Llama a la función getdetalle() y pasa $platoId como argumento
    function getdetalle($platoId) {
        $db = new PDO('mysql:host=localhost;dbname=recetario;charset=utf8', 'root', '');
        $query = $db->prepare('SELECT * FROM platos WHERE plato_id = :id');
        $query->bindParam(':id', $platoId);
        $query->execute();
        $plato = $query->fetch(PDO::FETCH_OBJ);

        return $plato;
    }

    $detalles = getdetalle($platoId);
    
    // Obtén $categoriaId después de obtener $detalles
    $categoriaId = $detalles->categoria_id;

    function getcategoria($categoriaId) {
        $db = new PDO('mysql:host=localhost;dbname=recetario;charset=utf8', 'root', '');
        $query = $db->prepare('SELECT * FROM categoria WHERE categoria_id = :id');
        $query->bindParam(':id', $categoriaId);
        $query->execute();
        $categoria = $query->fetch(PDO::FETCH_OBJ);

        return $categoria;
    }

    $categorias = getcategoria($categoriaId);

    if ($detalles) {
        echo "<h1>{$detalles->nombre_plato}</h1>";
        echo "<p>Ingredientes: {$detalles->ingredientes}</p>";
        echo "<p>Tiempo de cocción: {$detalles->tiempo_coccion}</p>";
        echo "<p>Origen: {$detalles->origen}</p>";
        if ($categorias) {
            echo "<p>Categoría: {$categorias->categoria}</p>";
        } else {
            echo "Categoría no encontrada.";
        }
    } else {
        echo "Plato no encontrado.";
    }
} else {
    echo "ID de plato no válido.";
}
?>

<?php
if (isset($_GET['id'])) {
    $categoriaId = $_GET['id'];
    
    // Llama a la función getdetalle() y pasa $platoId como argumento
    function getdetalle($categoriaId) {
        $db = new PDO('mysql:host=localhost;dbname=recetario;charset=utf8', 'root', '');
        $query = $db->prepare('SELECT * FROM categoria WHERE categoria_id = :id');
        $query->bindParam(':id', $categoriaId);
        $query->execute();
        $categoria = $query->fetch(PDO::FETCH_OBJ);

        return $categoria;
    }

    $detalles = getdetalle($categoriaId);
    
    // Obtén $categoriaId después de obtener $detalles
    $platoId = $detalles->categoria_id;

    function getPlato($platoId) {
        $db = new PDO('mysql:host=localhost;dbname=recetario;charset=utf8', 'root', '');
        $query = $db->prepare('SELECT * FROM platos WHERE categoria_id = :id');
        $query->bindParam(':id', $platoId);
        $query->execute();
        $platos = $query->fetchAll(PDO::FETCH_OBJ);

        return $platos;
    }

    $platos = getPlato($platoId);

    if ($detalles) {
        echo "<h1>{$detalles->categoria}</h1>";
       
        if ($platos) {
            echo "<ul>";
            foreach ($platos as $plato) {
                echo "<li>{$plato->nombre_plato}</li>";
            }
            echo "</ul>";   
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

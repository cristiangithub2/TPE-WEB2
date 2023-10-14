<?php





class PlatosModel{
    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=recetario;charset=utf8','root','');
    }


    function traerPlatosDeDB(){
        $sentencia = $this->db->prepare("SELECT * FROM platos");
        $sentencia->execute();
        $platos=$sentencia->fetchAll(PDO::FETCH_OBJ);
        return  $platos;
    }


    function traer($id)
    {
        $sentencia = $this->db->prepare("SELECT * FROM items WHERE id_item = ?");
        $sentencia->execute(array($id));
        $item = $sentencia->fetch(PDO::FETCH_OBJ);
        return $item;
    }

    function getItemsByCategory($id)
    {
        $sentencia = $this->db->prepare("SELECT * FROM items WHERE categoria = ?");
        $sentencia->execute(array($id));
        $items = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $items;
    }

    function insertItemOnDB($nombre,$marca, $descripcion, $contenido, $precio, $categoria)
    {
        $sentencia = $this->db->prepare("INSERT INTO items (nombre, marca,descripcion,contenido,precio,categoria) VALUES (?, ?, ?, ?, ?,?)");
        $sentencia->execute(array($nombre, $marca, $descripcion, $contenido, $precio, $categoria));
    }

    function deleteItemFromDB($id)
    {
        $sentencia = $this->db->prepare("DELETE FROM items WHERE id_item=?");
        $sentencia->execute(array($id));
    }


    function editItemDB($nombre,$marca, $descripcion, $contenido, $precio, $categoria, $id)
    {
        $sentencia = $this->db->prepare("UPDATE items SET nombre=?, marca=?, descripcion=? , contenido=?, precio=?,categoria=? WHERE id_item=?");
        $sentencia->execute(array($nombre, $marca, $descripcion, $contenido, $precio, $categoria, $id));
    }
}
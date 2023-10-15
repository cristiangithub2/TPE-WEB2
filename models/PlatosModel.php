<?php


class PlatosModel
{
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


    function traerPlato($id)
    {
        $sentencia = $this->db->prepare("SELECT * FROM platos WHERE plato_id = ?");
        $sentencia->execute(array($id));
        $plato = $sentencia->fetch(PDO::FETCH_OBJ);
        return $plato;
    }

    function traerPlatosDeCategoria($id)
    {
        $sentencia = $this->db->prepare("SELECT * FROM platos WHERE categoria_id = ?");
        $sentencia->execute(array($id));
        $platos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $platos;
    }

    function insertarPlatoEnDB($nombre,$ingredientes, $coccion, $origen, $precio, $categoria)
    {
        $sentencia = $this->db->prepare("INSERT INTO items (nombre, marca,descripcion,contenido,precio,categoria) VALUES (?, ?, ?, ?, ?,?)");
        $sentencia->execute(array($nombre, $ingredientes, $coccion, $origen, $precio, $categoria));
    }

    function borrarPlatoDeDB($id)
    {
        $sentencia = $this->db->prepare("DELETE FROM items WHERE id_item=?");
        $sentencia->execute(array($id));
    }


    function editarPlatoDB($nombre,$ingredientes, $coccion, $origen, $precio, $categoria, $id)
    {
        $sentencia = $this->db->prepare("UPDATE items SET nombre=?, marca=?, descripcion=? , contenido=?, precio=?,categoria=? WHERE id_item=?");
        $sentencia->execute(array($nombre, $ingredientes, $coccion, $origen, $precio, $categoria, $id));
    }
}
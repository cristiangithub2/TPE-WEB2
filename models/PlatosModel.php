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

    function insertarPlatoEnDB($nombre_plato,$ingredientes, $tiempo_coccion, $origen, $precio, $categoria)
    {
        $sentencia = $this->db->prepare("INSERT INTO platos (nombre_plato, ingredientes, tiempo_coccion, origen, precio, categoria_id) VALUES (?, ?, ?, ?, ?, ?)");
        $sentencia->execute(array($nombre_plato, $ingredientes, $tiempo_coccion, $origen, $precio, $categoria));
    }

    function borrarPlatoDeDB($id)
    {
        $sentencia = $this->db->prepare("DELETE FROM platos WHERE plato_id=?");
        $sentencia->execute(array($id));
    }


    function editarPlatoDB($nombre_plato,$ingredientes, $tiempo_coccion, $origen, $precio, $categoria, $id)
    {
        $sentencia = $this->db->prepare("UPDATE platos SET nombre_plato=?, ingredientes=?, tiempo_coccion=? , origen=?, precio=?,categoria_id=? WHERE plato_id=?");
        $sentencia->execute(array($nombre_plato, $ingredientes, $tiempo_coccion, $origen, $precio, $categoria, $id));
    }
}
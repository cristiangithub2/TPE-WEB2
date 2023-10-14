<?php





class CategoriasModel{
    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=recetario;charset=utf8','root','');
    }

    function traerCategoriasDeDB(){
        $sentencia = $this->db->prepare("SELECT * FROM categoria");
        $sentencia->execute();
        $categorias=$sentencia->fetchAll(PDO::FETCH_OBJ);
        return  $categorias;
    }

    function traerCategoriaDePlato($id)
    {
        $sentencia = $this->db->prepare("SELECT * FROM categoria WHERE categoria_id = ?");
        $sentencia->execute(array($id));
        $categoria = $sentencia->fetch(PDO::FETCH_OBJ);
        return $categoria;
    }
    function insertarCategoriaEnDB($nombre, $descripcion)
    {
        $sentencia = $this->db->prepare("INSERT INTO categoria (nombre,descripcion) VALUES (?, ?)");
        $sentencia->execute(array($nombre, $descripcion));
    }
    function editarCategoriaDB($id, $nombre, $descripcion)
    {
        $sentencia = $this->db->prepare("UPDATE categoria SET nombre=?, descripcion=? WHERE id_categoria=?");
        $sentencia->execute(array($nombre, $descripcion, $id));
    }
    function borrarCategoriaDeDB($id)
    {
        $sentencia = $this->db->prepare("DELETE FROM categoria WHERE categoria_id =?");
        $sentencia->execute(array($id));
    }
}
<?php





class CategoriasModel{
    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=recetario;charset=utf8','root','');
    }

    function traerCategorias(){
        $sentencia = $this->db->prepare("SELECT * FROM categoria");
        $sentencia->execute();
        $categorias=$sentencia->fetchAll(PDO::FETCH_OBJ);
        return  $categorias;
    }
}
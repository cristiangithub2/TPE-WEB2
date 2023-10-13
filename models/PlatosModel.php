<?php





class PlatosModel{
    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=recetario;charset=utf8','root','');
    }


    function traerPlatos(){
        $sentencia = $this->db->prepare("SELECT * FROM platos");
        $sentencia->execute();
        $platos=$sentencia->fetchAll(PDO::FETCH_OBJ);
        return  $platos;
    }

}
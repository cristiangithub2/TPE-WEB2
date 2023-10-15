<?php

class UsuariosModel
{
    private $db;

    function __construct()
    {
        $this->db= new PDO('mysql:host=localhost;' . 'dbname=recetario;charset=utf8', 'root', '');
    }

    function traerUsuarioDeEmail($email)
    {
        $sentencia = $this->db->prepare('SELECT * FROM usuarios WHERE email = ?');
        $sentencia->execute([$email]);
        return $sentencia->fetch(PDO::FETCH_OBJ);
        
    }



}
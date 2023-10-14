<?php
    require_once "view/PlatosView.php"; 
    require_once "models/PlatosModel.php";
    require_once "helpers/AuthHelper.php";
    require_once "models/CategoriasModel.php";

    class PlatosController{
        private $view;
        private $model;
        private $helpers;
        private $modelCategoria;



        function __construct()
        {
            $this->view= new PlatosView();
            $this->model= new PlatosModel();
            $this->helpers= new AuthHelper();
            $this->modelCategoria= new CategoriasModel();
        }


        function mostrarPlatos(){
            $platos=$this->model->traerPlatos();
            $categorias=$this->modelCategoria->traerCategorias();
            $this->view->cargarPlatos($platos,$categorias);
        }

        function mostrarPlato($id)
        {
            $logged = $this->authHelper->checkLoggedIn();
            $plato = $this->model->getPlato($id);
            $this->view->cargarPlato($logged,$plato);
        }



        function agregarPlato()
    {
        $this->authHelper-> restringirLoggedIn();
        $nombre = $_POST['nombre'];
        $ingredientes = $_POST['ingrediente'];
        $coccion = $_POST['tiempo de coccion'];  
        $origen = $_POST['origen'];
        $precio = $_POST['precio'];
        $categoria = $_POST['id_categoria'];
        $foto = $_POST['foto'];
        $this->model->insertarPLatoEnDB($nombre, $ingredientes, $coccion, $origen, $precio, $categoria,$foto);
        $this->view->redirigirLista();
    }


    function editarPlato()
    {
        $this->authHelper-> restringirLoggedIn();
        $id= $_POST['plato_id'];
        $nombre = $_POST['nombre'];
        $ingredientes = $_POST['ingredientes'];
        $coccion = $_POST['tiempo de coccion'];
        $origen = $_POST['origen'];
        $precio = $_POST['precio'];
        $categoria = $_POST['id_categoria'];
        $foto = $_POST['foto'];
        $this->model->editItemDB($nombre, $ingredientes, $coccion, $origen, $precio, $categoria, $id,$foto);
        $this->view->redirectList();
    }

    function borrarPlato($id)
    {
        $this->authHelper-> restringirLoggedIn();
        $this->model->borrarPlatoDeDB($id);
        $this->view->redirigirLista();
    }
    }

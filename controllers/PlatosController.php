<?php
    require_once "view/PlatosView.php"; 
    require_once "models/PlatosModel.php";
    require_once "helpers/AuthHelper.php";
    require_once "models/CategoriasModel.php";

    class PlatosController{
        private $view;
        private $model;
        private $authHelper;
        private $modelCategoria;



        function __construct()
        {
            $this->view= new PlatosView();
            $this->model= new PlatosModel();
            $this->authHelper= new AuthHelper();
            $this->modelCategoria= new CategoriasModel();
        }


        function mostrarPlatos(){
            $logged = $this->authHelper->checkLoggedIn();
            $platos=$this->model->traerPlatosDeDB();
            $categorias=$this->modelCategoria->traerCategoriasDeDB();
            $this->view->cargarPlatos($logged,$platos,$categorias);
        }

        function mostrarPlato($id)
        {
            $logged = $this->authHelper->checkLoggedIn();
            $plato = $this->model->traerPlato($id);
            $categorias= $this->modelCategoria-> traerCategoriasDeDB();
            $this->view->cargarPlato($logged,$plato,$categorias);
        }


 
        function agregarPlato()
    {
        $this->authHelper-> restringirLoggedIn();
        $nombre_plato = $_POST['nombre_plato'];
        $ingredientes = $_POST['ingredientes'];
        $tiempo_coccion = $_POST['tiempo_coccion'];  
        $origen = $_POST['origen'];
        $precio = $_POST['precio'];
        $categoria = $_POST['categoria_id'];
        $this->model->insertarPLatoEnDB($nombre_plato, $ingredientes, $tiempo_coccion, $origen, $precio, $categoria);
        $this->view->redirigirLista();
    }


    function editarPlato()
    {
        $this->authHelper-> restringirLoggedIn();
        $id= $_POST['plato_id'];
        $nombre_plato = $_POST['nombre_plato'];
        $ingredientes = $_POST['ingredientes'];
        $tiempo_coccion = $_POST['tiempo_coccion'];
        $origen = $_POST['origen'];
        $precio = $_POST['precio'];
        $categoria = $_POST['categoria_id'];
        $this->model->editarPlatoDB($nombre_plato, $ingredientes, $tiempo_coccion, $origen, $precio, $categoria, $id);
        $this->view->redirigirLista();
    }

    function borrarPlato($id)
    {
        $this->authHelper-> restringirLoggedIn();
        $this->model->borrarPlatoDeDB($id);
        $this->view->redirigirLista();
    }
    }

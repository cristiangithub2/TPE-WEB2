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


        function showPlatos(){
            $platos=$this->model->traerPlatos();
            $categorias=$this->modelCategoria->traerCategorias();
            $this->view->cargarPlatos($platos,$categorias);
        }
    }

<?php 
require_once "./models/CategoriasModel.php";
require_once "./view/CategoriasView.php";
require_once "./models/PlatosModel.php";
require_once "./helpers/AuthHelper.php";


class CategoriasController
{
    private $modelC;
    private $modelP;
    private $view;
    private $authHelper;



    function __construct()
    {
        $this->modelC= new CategoriasModel();
        $this->modelP = new PlatosModel();
        $this->view = new CategoriasView();
        $this->authHelper = New AuthHelper();


    }

    function mostrarCategorias()
    {
        $logged = $this->authHelper->checkLoggedIn();
        $categorias= $this->modelC->traerCategoriasDeDB();
        $this->view->cargarCategorias($logged,$categorias);
    }


    function mostrarPlatosEnCat($id)
    {
        $logged = $this->authHelper->checkLoggedIn();
        $categoria=$this->modelC->traerCategoria($id);
        $platos = $this->modelP->traerPlatosDeCategoria($id);
        $this->view->cargarPlatosDeCategoria($logged,$platos,$categoria );
    }

    function agregarCategoria()
    {
        $this->authHelper-> restringirLoggedIn();
        $categoria = $_POST['categoria'];
        $descripcion = $_POST['descripcion'];
        $this->modelC->insertarCategoriaEnDB($categoria, $descripcion);
        $this->view->redirigirLista();
    }

    function editarCategoria($id)
    {
        $this->authHelper-> restringirLoggedIn();
        $id = $_POST['categoria_id'];
        $categoria = $_POST['categoria'];
        $descripcion = $_POST['descripcion'];
        $this->modelC->editarCategoriaDB($id, $categoria, $descripcion);
        $this->view->redirigirLista();
    }
    function borrarCategoria($id)
    {
        $this->authHelper-> restringirLoggedIn();
        $this->modelC->borrarCategoriaDeDB($id);
        $this->view->redirigirLista();
    }
}
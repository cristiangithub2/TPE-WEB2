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
        $platos = $this->modelP->traerPlatosDeCategoria($id);
        $categoria = $this->modelC->traerCategoriaDePlato($id);
        $this->view->cargarPlatosDeCategoria($logged,$platos, $categoria);
    }

    function agregarCategoria()
    {
        $this->authHelper-> restringirLoggedIn();
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $this->modelC->insertarCategoriaEnDB($nombre, $descripcion);
        $this->view->redirigirLista();
    }

    function editarCategoria($id)
    {
        $this->authHelper-> restringirLoggedIn();
        $id = $_POST['id_categoria'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $this->modelC->editarCategoriaDB($id, $nombre, $descripcion);
        $this->view->redirigirLista();
    }
    function borrarCategoria($id)
    {
        $this->authHelper-> restringirLoggedIn();
        $this->modelC->borrarCategoriaDeDB($id);
        $this->view->redirigirLista();
    }
}
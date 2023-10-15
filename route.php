<?php
require_once "controllers/CategoriasController.php";
require_once "controllers/GeneralController.php";
require_once "controllers/LoginController.php";
require_once "controllers/PlatosController.php";

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'index';
}

$params = explode('/', $action);
$GeneralController = new GeneralController();
$CategoriasController= new CategoriasController();
$PlatosController= new PlatosController();
$LoginController= new LoginController();

    

switch ($params[0]) {
    case 'index':
        $GeneralController->mostrarHome();
        break;
    case 'platos':
        $PlatosController->mostrarPlatos();
        break;
    case 'categorias':
        $CategoriasController->mostrarCategorias();
        break;
    case 'item':        
        $PlatosController->mostrarPlato($params[1]);
        break;
    case 'showItemsInCat':
        $CategoriasController->mostrarPlatosEnCat($params[1]);
        break;
    case 'login':
        $LoginController->login();
        break;
    case 'logout':
        $LoginController->logout();
        break;
    case 'validate':
        $LoginController->validarUsuario();
        break;
    case 'addCategory':
        $CategoriasController -> agregarCategoria();
        break;
    case 'editCategory':
        $CategoriasController -> editarCategoria($params[1]);
        break;
    case 'deleteCategory':
        $CategoriasController -> borrarCategoria($params[1]);
        break;
    case 'addItem':
        $PlatosController -> agregarPlato();
        break;
    case 'editItem':
        $PlatosController -> editarPlato();
        break;
    case 'deleteItem':
        $PlatosController -> borrarPlato($params[1]);
        break;
    
}

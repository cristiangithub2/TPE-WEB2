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
    case 'plato':        
        $PlatosController->mostrarPlato($params[1]);
        break;
    case 'mostrarPlatosEnCat':
        $CategoriasController->mostrarPlatosEnCat($params[1]);
        break;
    case 'login':
        $LoginController->login();
        break;
    case 'logout':
        $LoginController->logout();
        break;
    case 'validar':
        $LoginController->validarUsuario();
        break;
    case 'agregarCategoria':
        $CategoriasController -> agregarCategoria();
        break;
    case 'editarCategoria':
        $CategoriasController -> editarCategoria($params[1]);
        break;
    case 'borrarCategoria':
        $CategoriasController -> borrarCategoria($params[1]);
        break;
    case 'agregarPlato': 
        $PlatosController -> agregarPlato();
        break;
    case 'editarPlato':
        $PlatosController -> editarPlato();
        break;
    case 'borrarPlato':
        $PlatosController -> borrarPlato($params[1]);
        break;
    
}

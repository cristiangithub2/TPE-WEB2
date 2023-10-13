<?php
require_once "controllers/CategoriaController.php";
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
//$CategoriaController= new CategoriaController();
$PlatosController= new PlatosController();
//$LoginController= new LoginController();

    

switch ($params[0]) {
    case 'index':
        $GeneralController->showHome();
        break;
    case 'platos':
        $PlatosController->showPlatos();
        break;
    case 'categorias':
        $CategoriesController->showCategories();
        break;
    case 'item':
        $ItemsController->showItem($params[1]);
        break;
    case 'showItemsInCat':
        $CategoriesController->showItemsInCat($params[1]);
        break;
    case 'login':
        $LoginController->login();
        break;
    case 'logout':
        $LoginController->logout();
        break;
    case 'validate':
        $LoginController->validateUser();
        break;
    case 'addCategory':
        $CategoriesController -> addCategory();
        break;
    case 'editCategory':
        $CategoriesController -> editCategory($params[1]);
        break;
    case 'deleteCategory':
        $CategoriesController -> deleteCategory($params[1]);
        break;
    case 'addItem':
        $ItemsController -> addItem();
        break;
    case 'editItem':
        $ItemsController -> editItem();
        break;
    case 'deleteItem':
        $ItemsController -> deleteItem($params[1]);
        break;
    
}

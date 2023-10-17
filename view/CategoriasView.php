<?php

require_once "./libs/smarty-3.1.39/smarty-3.1.39/libs/Smarty.class.php";

class CategoriasView
{
    private $smarty;


    function __construct()
    {
        $this->smarty= new Smarty();
    }


    function cargarCategorias($logged,$categorias)
    {
        $this->smarty->assign('titulo', "Lista de categorias");
        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('templates/categoriasLista.tpl');
    
    }

    function cargarPlatosDeCategoria($logged,$platos,$categoria)
    {
        $this->smarty->assign('titulo', "Lista de productos en esta categoria: ");
        $this->smarty->assign('logged', $logged);  
        $this->smarty->assign('platos', $platos);
        $this->smarty->assign('categoria', $categoria);
        $this->smarty->display('templates/platosDeCateg.tpl');
    }
    function redirigirLista()
    {
        header("Location: " . BASE_URL . "categorias");
    }
}
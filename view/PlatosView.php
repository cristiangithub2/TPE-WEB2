<?php

  require_once './libs/smarty-3.1.39/smarty-3.1.39/libs/Smarty.class.php';

  class PlatosView{
      private $smarty;

      function __construct(){
          $this->smarty=new Smarty();
      }

      function cargarPlatos($logged,$platos,$categorias){
        $this->smarty->assign('titulo','Lista de platos');
        $this->smarty->assign('logged', $logged); 
        $this->smarty->assign('platos',$platos);
        $this->smarty->assign('categorias',$categorias);
        $this->smarty->display('templates/platosLista.tpl');  
      }

      function cargarPlato($logged,$plato,$categorias)
      {
          $this->smarty->assign('plato', $plato);
          $this->smarty->assign('logged',$logged);
          $this->smarty->assign('logged',$categorias);
          $this->smarty->display('./templates/plato.tpl');
      }
      function redirigirLista()
      {
          header("Location: " . BASE_URL . "platos");
      }
    
}
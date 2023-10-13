<?php

  require_once 'libs/smarty-3.1.39/smarty-3.1.39/libs/Smarty.class.php';

  class PlatosView{
      private $smarty;

      function __construct(){
          $this->smarty=new Smarty();
      }

      function cargarPlatos($platos,$categorias){
        $this->smarty->assign('titulo','Lista de platos');
        $this->smarty->assign('platos',$platos);
        $this->smarty->assign('categorias',$categorias);
        $this->smarty->display('templates/platosLista.tpl');
      }
    }
<?php
    require_once "view/GeneralView.php";
    //require_once "helpers/AuthHelper.php";
    
    

    class GeneralController{
        private $view;
        private $authHelper;

        function __construct()
        {
            $this ->view=new GeneralView();
          //  $this ->authHelper=new AuthHelper();
        }

        function showHome(){
            $this->view->renderHome();
        }
    }


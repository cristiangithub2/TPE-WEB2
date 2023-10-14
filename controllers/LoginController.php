<?php

require_once "./models/UsuariosModel.php";
require_once "./view/LoginView.php";
require_once "./helpers/AuthHelper.php";    

class LoginController
{
    private $model;
    private $view;
    private $authHelper;

    function __construct()
    {
        $this->model = new UsuariosModel();
        $this->view = new  LoginView();
        $this->authHelper =new AuthHelper();
    }

    function login()
    {
        $logged = $this->authHelper->checkLoggedIn();
        $this->view->showFormLogin($logged);
    }


    function validateUsuario(){
        $userEmail = $_POST['email'];
        $passwordForm = $_POST['password'];
        $user = $this->model->getUsuarioEmail($userEmail);
        if ($user && password_verify($passwordForm, ($user->password))){
            session_start();
            $_SESSION["user"] = $user;
            $this->view->redirectHome();        
        } else {
            $this->view->showFormLogin(null, "Acceso Denegado");
        }
    }

    function logout()
    {
        session_start();
        session_destroy();
        $this->view->redirectHome();
    }   

}
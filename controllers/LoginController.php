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
        $this->view->mostrarFormularioLogin($logged);
    }


    function validarUsuario(){
        $userEmail = $_POST['email'];
        $passwordForm = $_POST['password'];
        $user = $this->model->traerUsuarioDeEmail($userEmail);

        if ($user && password_verify($passwordForm, ($user->password))){
            session_start();
            $_SESSION["user"] = $user;
            $this->view->redirigirHome();        
        } else {
            $this->view->mostrarFormularioLogin(null, "Acceso Denegado");
        }
    }

    function logout()
    {
        session_start();
        session_destroy();
        $this->view->redirigirHome();
    }   

}
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="img\icons8-liga-de-leyendas-64.png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<base href="{BASE_URL}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetario</title>
</head>
<body>
<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="container-fluid">
        <h1>Recetario</h1>
        <div class="d-flex justify-content-end">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <div class="p-2 bd-highlight">
                        <li class="nav-item">
                            <a class="nav-link " href="index">Inicio</a>
                        </li>
                    </div>
                    <div class="p-2 bd-highlight">
                        <li class="nav-item">
                            <a class="nav-link" href="platos">Platos</a>
                        </li>
                    </div>
                    <div class="p-2 bd-highlight">
                        <li class="nav-item">
                            <a class="nav-link" href="categorias">Categorias</a>
                        </li>
                    </div>
                    <div class="p-2 bd-highlight">
                    {if $logged}
                        <li class="nav-item">
                            <a class="nav-link" href= "logout">Cerrar sesion</a>
                        </li>
                    {else}
                        <li class="nav-item">
                            <a class="nav-link" href="login">Iniciar sesion</a>
                        </li>
                    {/if}
                    </div>
                </ul>
            </div>
        </div>
    </div>
</nav>

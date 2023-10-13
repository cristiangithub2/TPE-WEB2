<?php
/* Smarty version 3.1.39, created on 2023-10-14 00:36:15
  from 'C:\xampp\htdocs\TpWeb2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6529c65f561786_32394461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ec29fc18cbb65fdbc65ecc24775c3eecf16f49c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpWeb2\\templates\\header.tpl',
      1 => 1697236570,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6529c65f561786_32394461 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="img\icons8-liga-de-leyendas-64.png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"><?php echo '</script'; ?>
>
<base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de aromas</title>
</head>
<body>
<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="container-fluid">
        <h1>Tienda de aromas</h1>
        <div class="d-flex justify-content-end">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <div class="p-2 bd-highlight">
                        <li class="nav-item">
                            <a class="nav-link" href="index">Inicio</a>
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
                    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                        <li class="nav-item">
                            <a class="nav-link" href= "logout">Cerrar sesion</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="login">Iniciar sesion</a>
                        </li>
                    <?php }?>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</nav>
<?php }
}

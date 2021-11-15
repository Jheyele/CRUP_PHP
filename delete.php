<?php

include __DIR__.'/vendor/autoload.php';

use \App\Entity\Usuario;
use \App\Session\Login;

Login::requireLogin();

if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index.php?status=error');
}

$usuario = Usuario::getUsuario($_GET['id']);

if(!$usuario instanceof Usuario){
    header('location: index.php?status=error');
    exit;
}

if(isset($_POST['excluir'])){
   
    $usuario->delete();

    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/deleteconfirm.php';
include __DIR__.'/includes/footer.php';


?>
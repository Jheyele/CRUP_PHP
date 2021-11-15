<?php

include __DIR__.'/vendor/autoload.php';
use \App\Session\Login;

Login::requireLogin();

define('TITLE','Editar Usuario');

use \App\Entity\Usuario;

if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index.php?status=error');
}

$usuario = Usuario::getUsuario($_GET['id']);

if(!$usuario instanceof Usuario){
    header('location: index.php?status=error');
    exit;
}

if(isset($_POST['nome'],$_POST['email'],$_POST['senha'],$_POST['data_nascimento'])){
    $usuario->nome = $_POST['nome'];
    $usuario->email = $_POST['email'];
    $usuario->senha = $_POST['senha'];
    $usuario->data_nascimento = $_POST['data_nascimento'];
    $usuario->update();

    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/form.php';
include __DIR__.'/includes/footer.php';


?>
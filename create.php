<?php

include __DIR__.'/vendor/autoload.php';
use \App\Session\Login;

Login::requireLogin();

define('TITLE','Cadastrar Usuario');

use \App\Entity\Usuario;
$usuario = new Usuario;
if(isset($_POST['nome'],$_POST['email'],$_POST['senha'],$_POST['data_nascimento'])){
    
    $usuario->nome = $_POST['nome'];
    $usuario->email = $_POST['email'];
    $usuario->senha = password_hash($_POST['senha'],PASSWORD_DEFAULT);
    $usuario->data_nascimento = $_POST['data_nascimento'];
    $usuario->create();

    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/form.php';
include __DIR__.'/includes/footer.php';


?>
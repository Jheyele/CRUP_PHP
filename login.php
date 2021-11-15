<?php

include __DIR__.'/vendor/autoload.php';
use \App\Session\Login;
use \App\Entity\Usuario;

Login::requireLogout();

$alertLogin = '';

if(isset($_POST['email'],$_POST['senha'])){
    
    $usuario = Usuario::getUsuarioPorEmail($_POST['email']);
    
    if(!($usuario instanceof Usuario) || !(password_verify($_POST['senha'],$usuario->senha))){
        $alertLogin = 'Email ou senha inválidos';
        
    } 

    
    Login::login($usuario);
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formLogin.php';
include __DIR__.'/includes/footer.php';


?>
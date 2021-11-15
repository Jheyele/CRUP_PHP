<?php

include __DIR__.'/vendor/autoload.php';

use \App\Entity\Usuario;
use \App\Db\Pagination;
use \App\Session\Login;

Login::requireLogin();

// Pagaination
$countUsuarios = Usuario::countUsuarios();
$pagination = new Pagination($countUsuarios->qtd, $_GET['page'] ?? 1, 4);

$usuarios = Usuario::getUsuarios(null,null,$pagination->getLimit());

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/list.php';
include __DIR__.'/includes/footer.php';


?>
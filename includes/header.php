<?php

  use \App\Session\Login;

  $usuarioLogado = Login::getUsuarioLogado();

  $usuario = $usuarioLogado ? $usuarioLogado['nome'] . ' <a href="logout.php" class="text-light font-weight-bold ml-2"> Sair </a>' :
              '<a href="logout.php" class="text-light font-weight-bold ml-2"> Entrar </a>';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>CRUD</title>
  </head>
  <body class="bg-dark text-light"> 
    <div class="container">
      <div style="margin: 100px;">
        <hr class="border-light">
        <div  class="d-flex justify-content-start">
          <?=$usuario?>
        </div>
      </div>
    

  
<?php
        include('conexao.php');

        if(!isset($_SESSION)){
            session_start();
        }
    ?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="css/lanche.css">
        <title>Página Inicial</title>
    </head>
    <body>
    <div class="container">
    <nav class="navbar fixed-top" style="background-color: #ff0000;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Buteco do Nunes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Buteco do Nunes</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="combos.php">Combos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="bebida.php">Bebidas</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Informações
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="login.php">Login</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="btn btn-warning" href="cadastrar_func.php">Funcionários</a></li>
              <li><a class="btn btn-danger" href="logout.php">Sair</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
    </nav>
    <h1>hambúrgueres</h1>
    <div class="card-group">
  <div class="card">
  <img id="lanche" src="img/cbum.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">X-Cbum</h5>
      <p class="card-text">Servido no pão brioche composto por um blend da casa de 150g, uma fatia de queijo gorgonzola, melaço de cana caseiro, barbecue artesanal, cebola crispy e a exclusiva maionese da casa.</p>
      <a href="pedido.php" class="btn btn-dark">Faça o seu pedido</a>
    </div>
  </div>
  <div class="card">
    <img id="lanche" src="img/lanch2.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">X-Capial</h5>
      <p class="card-text">Servido no pão australiano composto por um blend da casa de 150g, fatias de bacon , geleia de pimenta, queijo coalho, couve crispy e a exclusiva maionese da casa.</p>
      <a href="pedido.php" class="btn btn-dark">Faça o seu pedido</a>
    </div>
  </div>
  <div class="card">
    <img id="lanche" src="img/lanch3.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">X-Arnold</h5>
      <p class="card-text">Servido no pão brioche composto por 2 blends da casa de 150g, anéis de cebola crocantes, 4 fatias cheddar, fatias de bacon e a exclusiva maionese da casa. </p>
      <a href="pedido.php" class="btn btn-dark">Faça o seu pedido</a>
    </div>
  </div>
</div>
      </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>
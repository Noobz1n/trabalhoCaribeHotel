<?php

  session_start();
  //teste pra ver se tá logado ou nao
  //print_r($_SESSION);

  if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['email']);
    unset($_SESSION['email']);
    header('Location: login.php');
  }
  $logado = $_SESSION['email'];
?>


<!DOCTYPE html>
<html lang="pt-BR">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome, esse é um site que da para pegar icone de coisas  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="icon" href="img/ceuamarelo.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <title>HOTEL BRABO</title>
  <style type="text/css" id="operaUserStyle"></style></head>
<body>
<!--
  
-->
<header> <!-- INICIO PARTE DE CIMA-->
    <nav class="navbar navbar-expand-sm navbar-light bg-info">  
      <div class="container">

        <a href="index.php" class="navbar-brand">
          <img src="img/ceuamarelo2.png" width="130" height="100" alt="">
        </a>

        <div class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"> <!-- SE QUISER ADICIONAR MAIS COISA NA BARRA É SO COPIAR ESSE LI E COLAR EM BAIXO DO ULTIMO, SEMPRE DENTRO DO UL-->
              <a href="index.php" class="nav-link">
                HOME
              </a>
            </li>
            <li class="nav-item"> <!-- SE QUISER ADICIONAR MAIS COISA NA BARRA É SO COPIAR ESSE LI E COLAR EM BAIXO DO ULTIMO, SEMPRE DENTRO DO UL-->
              <a href="promos.php" class="nav-link">
                PROMOÇÕES
              </a>
            </li>
            <li class="nav-item">
              <a href="localizacao.php" class="nav-link">
                LOCALIZAÇÃO
              </a>
            </li>
            <li class="nav-item">
              <a href="contato.php" class="nav-link">
                CONTATO
              </a>
            </li>
            <li class="nav-item">
              <a href="reserva.php" class="nav-link">
               RESERVAS
              </a>
            </li>
            <li class="nav-item">
              <a href="login.php" class="btn btn-outline-light ml-4"style="color: white; background-color: #6f0909; border: 1px solid #6f0909;">
                SAIR
              </a>
            </li>
          </ul>
        </div>

      </div>
    </nav>
  </header> <!-- FINAL PARTE DE CIMA-->

  <div class="container mt-4">
    <h2>Suas Reservas</h2>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID da Reserva</th>
            <th>Data de Check-in</th>
            <th>Data de Check-out</th>
            <th>Quarto</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>2024-06-20</td>
            <td>2024-06-25</td>
            <td>Suíte Luxo</td>
            <td>R$ 1500,00</td>
          </tr>
          <tr>
            <td>2</td>
            <td>2024-07-10</td>
            <td>2024-07-15</td>
            <td>Quarto Standard</td>
            <td>R$ 800,00</td>
          </tr>
          <tr>
            <td>3</td>
            <td>2024-08-05</td>
            <td>2024-08-10</td>
            <td>Suíte Executiva</td>
            <td>R$ 2000,00</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

  <footer class="mt-4 bg-info text-white py-4"> <!-- INICIO DO RODAPÉ-->
    <div class="container">
        <div class="row">
            <div class="col-md-8">  
                <p>
                    <a href="#" class="text-white">Recursos</a>
                    <a href="#" class="text-white">Preços</a>
                    <a href="#" class="text-white">Localização</a>
                </p>
            </div>
            <div class="col-md-4 d-flex justify-content-end">
                <a href="#" class="btn text-light">
                    <i class="fab fa-facebook fa-lg"></i>
                </a>
                <a href="#" class="btn text-light ml-2">
                    <i class="fab fa-twitter fa-lg"></i>
                </a>
                <a href="#" class="btn text-light ml-2">
                    <i class="fab fa-instagram fa-lg"></i>
                </a>
            </div>
        </div>
    </div>
</footer> <!-- FIM DO RODAPÉ -->



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



  
 
</body>
</html>
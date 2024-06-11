<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="icon" href="img/ceuamarelo.png" type="image/png">
    <title>HOTEL BRABO</title>
    <style>
      .gradient-custom {
         
          background: linear-gradient(to right, #55AD9B, #55AD9B);
      }
    </style>
</head>
<body class="reserva gradient-custom">

<header> <!-- INICIO PARTE DE CIMA-->
    <nav class="navbar navbar-expand-sm navbar-light bg-info">  
      <div class="container">

        <a href="index.php" class="navbar-brand">
          <img src="img/ceuamarelo.png" width="130" height="100" alt="">
        </a>

        <div class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"> <!-- SE QUISER ADICIONAR MAIS COISA NA BARRA É SO COPIAR ESSE LI E COLAR EM BAIXO DO ULTIMO, SEMPRE DENTRO DO UL-->
              <a href="" class="nav-link">
                HOME
              </a>
            </li>
            <li class="nav-item">
              <a href="cadastro.php" class="nav-link">
                GALERIA
              </a>
            </li>
            <li class="nav-item">
              <a href="cadastro.php" class="nav-link">
                LOCALIZAÇÃO
              </a>
            </li>
            <li class="nav-item">
              <a href="cadastro.php" class="nav-link">
                CONTATO
              </a>
            </li>
            <li class="nav-item">
              <a href="cadastro.php" class="btn btn-outline-light ml-4">
                RESERVAR
              </a>
            </li>
          </ul>
        </div>

      </div>
    </nav>
  </header> <!-- FINAL PARTE DE CIMA-->




<div class="mapBox">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3933.340170795674!2d-35.70478518950365!3d-9.651947290396532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1718072013600!5m2!1spt-BR!2sbr" width="1600" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


<footer class="mt-6 bg-info text-white py-4">
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
</footer>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
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
              <a href="login.php" class="nav-link">
                LOGIN
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

  <section id="home"> <!-- INICIO PARTE DO MEIO AZUL-->
    <div class="container">
      <div class="row">
        <div class="col-md-6 d-flex">
          <div class="align-self-center">
            <h1 class="display-4">Comece hoje suas ferias</h1>
            <p>
              Hotel brabo, tem café da manhã, almoço e jantar.
              cadastre seu email para receber noticias. Segue a call do pai que é sucesso
            </p>
            <form class="mb-4">
              <div class="input-group">
                <input type="text" placeholder="Seu e-mail" class="form-control">
                <div class="input-group-append">
                  <button type="button" class="btn btn-primary">entra ai na moral</button>

                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <img src="img/ilha (1).png" height="320px" id="coqueiro" class="mb-4"> <!-- IMAGEM DO COQUEIRO NA DIREITA-->
        </div>
      </div>
    </div>
  </section> <!-- FINAL DA PARTE AZUL DO MEIO-->

  <br>
  <section> <!-- INICIO DA PARTE DE BAIXO DO AZUL-->
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex"> <!-- INICIO DO TEXTO NA ESQUERDA -->
                <div class="align-self-center">
                    <h2>Por que escolher nosso hotel?</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    <a href="#" class="btn btn-primary">Veja mais</a>
                </div>
            </div> <!-- FIM DO TEXTO NA ESQUERDA -->

            <div class="col-md-6"> <!-- INICIO DOS CARDS À DIREITA -->
                <div class="row justify-content-end">
                    <div class="col-lg-6 col-md-12 mb-4"> <!-- Primeiro Card -->
                        <div class="card border-0 shadow">
                            <img class="card-img-top rounded-top" src="img/familia.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-center mb-0">Quartos para toda família</h5>
                                <p class="card-text text-center">2 noites para 4 pessoas</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-center"><strong>28/05</strong> a <strong>31/05</strong></li>
                            </ul>
                            <div class="card-footer bg-transparent border-top-0 text-center">
                                <a href="cadastro.php" class="btn btn-custom">Reserve</a>
                            </div>
                        </div> <!-- FIM DO CARD-->
                    </div>

                    <div class="col-lg-6 col-md-12 mb-4"> <!-- Segundo Card -->
                        <div class="card border-0 shadow">
                            <img class="card-img-top rounded-top" src="img/casal.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-center mb-0">Opções de quartos para casais</h5>
                                <p class="card-text text-center">3 noites com jantar incluso</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-center"><strong>15/06</strong> a <strong>18/06</strong></li>
                            </ul>
                            <div class="card-footer bg-transparent border-top-0 text-center">
                                <a href="cadastro.php" class="btn btn-custom">Reserve</a>
                            </div>
                        </div> <!-- FIM DO CARD-->
                    </div>
                </div>
            </div> <!-- FIM DOS CARDS À DIREITA -->
        </div>
    </div>
</section> <!-- FIM PARTE DE BAIXO DA AZUL-->
<section> <!-- Carrossel com efeito de desfoque -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/ForaDoHotel.jpg" alt="Primeiro Slide" style="max-height: 650px; object-fit: cover; filter: blur(0px);">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Aréa externa grande</h5>
                    <p>Aproveite nosso espaço externo com piscina</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/quarto.jpg" alt="Segundo Slide" style="max-height: 650px; object-fit: cover; filter: blur(0px);">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Quartos espaçosos</h5>
                    <p>Quartos limpos e com muito espaço para você e sua família</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/comida.jpg" alt="Terceiro Slide" style="max-height: 650px; object-fit: cover; filter: blur(0px);">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Café da manhã e restaurante</h5>
                    <p>Prove nosso delicoso cardápio</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>
</section>






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
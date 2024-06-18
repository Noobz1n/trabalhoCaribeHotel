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

  <main class="container mt-5">
    <h2 class="text-center mb-4">Entre em Contato</h2>
    <form>
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" placeholder="Seu nome">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Seu email">
        </div>
        <div class="form-group">
            <label for="phone">Telefone</label>
            <input type="tel" class="form-control" id="phone" placeholder="Seu telefone">
        </div>
        <div class="form-group">
            <label for="subject">Assunto</label>
            <input type="text" class="form-control" id="subject" placeholder="Assunto">
        </div>
        <div class="form-group">
            <label for="message">Mensagem</label>
            <textarea class="form-control" id="message" rows="5" placeholder="Sua mensagem"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</main>


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







  
 
</body>
</html>
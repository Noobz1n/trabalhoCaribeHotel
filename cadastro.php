<?php


  // AQUI ESTA IMPORTANDO A CONEXAO DO BANCO
  include_once('config.php');

  // aqui verifica se tá recebndo os dados
  if(isset($_POST['submit'])) 
  {
    $nome = $_POST['firstName']; // O QUE ESTÁ ENTRE '' É O "name" NO FORMULARIO
    $sobrenome = $_POST['lastName'];
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $tel = $_POST['telefone'];
    $data_chegada = $_POST['data_chegada'];
    $data_saida = $_POST['data_saida'];


    //verificacao do sexo
    if(isset($_POST['inlineRadioOptions'])) {
      $sexo = $_POST['inlineRadioOptions'];
    } else {
      // Se nenhuma opção for selecionada, define como vazio ou algum valor padrão, conforme necessário
      $sexo = ""; // ou outra ação
    }



    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $sql2 = "SELECT * from usuarios where cpf = '$cpf'";
    $result = $conexao->query($sql);
    $result2 = $conexao->query($sql2);

    if ($result->num_rows > 0) {
      // Email já está cadastrado, retornar alerta em JavaScript
      echo '<script>alert("Email já cadastrado. Por favor, escolha outro email.");</script>';
  } 
  elseif($result2->num_rows > 0) {
    echo '<script>alert("CPF já cadastrado. Por favor, digite outro CPF.");</script>';
  }
  else {
      $result = mysqli_query($conexao, "INSERT INTO usuarios (nome, sobrenome, senha, cpf, email, tel, sexo, data_chegada, data_saida) VALUES ('$nome', '$sobrenome','$senha' ,'$cpf', '$email', '$tel', '$sexo', '$data_chegada', '$data_saida')");
      echo '<script>alert("cadastro criado com sucesso!");</script';
  }
  }
  
?>

<!DOCTYPE html>
<html lang="pt-BR">
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

  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Reserva de Estadia</h3>

                <form action="cadastro.php" method="POST">
  
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" id="firstName" name="firstName" class="form-control form-control-lg">
                          <label class="form-label" for="firstName">Nome</label>
                        </div>
                      </div>
              
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" id="lastName" name="lastName" class="form-control form-control-lg">
                          <label class="form-label" for="lastName">Sobrenome</label>
                        </div>
                      </div>
                    </div>
                  

                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="email" id="email" name="email" class="form-control form-control-lg">
                          <label class="form-label" for="usuario">Email</label>
                        </div>
                      </div>
              
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="password" id="senha" name="senha" class="form-control form-control-lg">
                          <label class="form-label" for="senha">Senha</label>
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-6 mb-4 d-flex align-items-center">
                        <div class="form-outline datepicker w-100">
                          <input type="text" name="cpf" class="form-control form-control-lg" id="cpf">
                          <label for="cpf" class="form-label">CPF</label>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <h6 class="mb-2 pb-1">Gênero: </h6>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender" value="option1" checked>
                          <label class="form-check-label" for="femaleGender">Masculino</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender" value="option2">
                          <label class="form-check-label" for="maleGender">Feminino</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender" value="option3">
                          <label class="form-check-label" for="otherGender">Outro</label>
                        </div>
                      </div>
                    </div>
    
                    <div class="row">

                      <div class="col-md-6 mb-4 pb-2">
                        <div class="form-outline">
                          <input type="tel" name="telefone" id="phoneNumber" class="form-control form-control-lg">
                          <label class="form-label" for="phoneNumber">Número de telefone</label>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="date" name="data_chegada" id="checkinDate" class="form-control form-control-lg">
                          <label class="form-label" for="checkinDate">Data de Chegada</label>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="date" name="data_saida" id="checkoutDate" class="form-control form-control-lg">
                          <label class="form-label" for="checkoutDate">Data de Saída</label>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <select id="numPessoas" class="form-control form-control-lg">
                            <option value="" disabled selected>Selecione o número de pessoas</option>
                            <option value="1">1 Pessoa</option>
                            <option value="2">2 Pessoas</option>
                            <option value="3">3 Pessoas</option>
                            <option value="4">4 Pessoas</option>
                            <option value="5">5 Pessoas</option>
                          </select>
                          <label class="form-label" for="numPessoas">Número de Pessoas</label>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <select id="numQuartos" class="form-control form-control-lg">
                            <option value="" disabled selected>Selecione o número de quartos</option>
                            <option value="1">1 Quarto</option>
                            <option value="2">2 Quartos</option>
                            <option value="3">3 Quartos</option>
                            <option value="4">4 Quartos</option>
                          </select>
                          <label class="form-label" for="numQuartos">Número de Quartos</label>
                        </div>
                      </div>
                    </div>
    
                    <div class="mt-4 pt-2">
                      <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Reservar">
                    </div>
  
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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

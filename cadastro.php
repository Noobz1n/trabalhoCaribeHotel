<?php


  // AQUI ESTA IMPORTANDO A CONEXAO DO BANCO
  include_once('config.php');

  // aqui verifica se tá recebendo os dados
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
    // Hash da senha
    $hashedPassword = password_hash($senha, PASSWORD_DEFAULT);

    // Dadosinseridos no banco
    $result = mysqli_query($conexao, "INSERT INTO usuarios (nome, sobrenome, senha, cpf, email, tel, sexo, data_chegada, data_saida) VALUES ('$nome', '$sobrenome', '$hashedPassword', '$cpf', '$email', '$tel', '$sexo', '$data_chegada', '$data_saida')");
    echo '<script>alert("cadastro criado com sucesso!");</script>';
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

                <form id="reservationForm" action="cadastro.php" method="POST">
  
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" id="firstName" name="firstName" class="form-control form-control-lg"required>
                          <label class="form-label" for="firstName">Nome</label>
                        </div>
                      </div>
              
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" id="lastName" name="lastName" class="form-control form-control-lg"required>
                          <label class="form-label" for="lastName">Sobrenome</label>
                        </div>
                      </div>
                    </div>
                  

                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="email" id="email" name="email" class="form-control form-control-lg" required>
                          <label class="form-label" for="usuario">Email</label>
                        </div>
                      </div>
              
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="password" id="senha" name="senha" class="form-control form-control-lg" required>
                          <label class="form-label" for="senha">Senha</label>
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-6 mb-4 d-flex align-items-center">
                        <div class="form-outline datepicker w-100">
                          <input type="text" name="cpf" class="form-control form-control-lg" id="cpf"required>
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
                          <input type="tel" name="telefone" id="phoneNumber" class="form-control form-control-lg" required>
                          <label class="form-label" for="phoneNumber">Número de telefone</label>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="date" name="data_chegada" id="checkinDate" class="form-control form-control-lg" required>
                          <label class="form-label" for="checkinDate">Data de Chegada</label>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="date" name="data_saida" id="checkoutDate" class="form-control form-control-lg" required>
                          <label class="form-label" for="checkoutDate">Data de Saída</label>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <select id="numPessoas" class="form-control form-control-lg" required>
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
                          <select id="numQuartos" class="form-control form-control-lg" required>
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

                    <div id="totalValueDisplay" class="mt-4"></div>

    
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



<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-+0eln2/Z3Sjm9TmaJvqTL6kUvZc3gMtG0ylAe/FVdi0XJk4P5zB7fFEf1Ai/2aWf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-zsPpJh5ayRShz9zv7TO1oWElftd9ZbTO3bqGjtv10eVoRX0Av+YJfr4vCwO+q8rA" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2rXabwTN0pO0GnxEYsxtXuk+8teOOq74X" crossorigin="anonymous"></script>

<script>
document.getElementById('reservationForm').addEventListener('submit', function(event) {
    // Pegando as datas de chegada e saída
    var checkinDate = new Date(document.getElementById('checkinDate').value);
    var checkoutDate = new Date(document.getElementById('checkoutDate').value);

    // Comparando as datas
    if (checkoutDate <= checkinDate) {
        // Se a data de saída for menor ou igual à data de chegada, impedir o envio do formulário
        alert('A data de saída deve ser posterior à data de chegada.');
        event.preventDefault(); // Impede o envio do formulário
    }
});
</script>

<script>
// Função para calcular e exibir o valor total da estadia
function calcularValorTotal() {
    // Pegando as datas de chegada e saída
    var checkinDate = new Date(document.getElementById('checkinDate').value);
    var checkoutDate = new Date(document.getElementById('checkoutDate').value);

    // Verificando se as datas são válidas
    if (isNaN(checkinDate.getTime()) || isNaN(checkoutDate.getTime()) || checkoutDate <= checkinDate) {
        // Se as datas não forem válidas, exibe 0 como valor total
        document.getElementById('totalValueDisplay').innerHTML = 'Valor Total da Estadia: R$ 0.00';
        return;
    }

    // Calculando o número de diárias
    var oneDay = 24 * 60 * 60 * 1000; // horas * minutos * segundos * milissegundos
    var diffDays = Math.round(Math.abs((checkoutDate - checkinDate) / oneDay));

    // Obtendo o número de pessoas e quartos selecionados
    var numPessoas = parseInt(document.getElementById('numPessoas').value) || 0; // Retorna 0 se não puder converter para número
    var numQuartos = parseInt(document.getElementById('numQuartos').value) || 0; // Retorna 0 se não puder converter para número

    // Verificando se o número de pessoas e quartos é válido
    if (isNaN(numPessoas) || isNaN(numQuartos)) {
        numPessoas = 0;
        numQuartos = 0;
    }

    // Calculando o valor total da estadia
    var precoPorPessoaPorDia = 100; // Preço fictício por pessoa por dia
    var precoPorQuartoPorDia = 200; // Preço fictício por quarto por dia
    var valorTotal = (precoPorPessoaPorDia * numPessoas + precoPorQuartoPorDia * numQuartos) * diffDays;

    // Exibindo o valor total na página
    document.getElementById('totalValueDisplay').innerHTML = 'Valor Total da Estadia: R$ ' + valorTotal.toFixed(2);
}

// Adicionando eventos de mudança para os campos relevantes
document.getElementById('checkinDate').addEventListener('change', calcularValorTotal);
document.getElementById('checkoutDate').addEventListener('change', calcularValorTotal);
document.getElementById('numPessoas').addEventListener('change', calcularValorTotal);
document.getElementById('numQuartos').addEventListener('change', calcularValorTotal);

// Inicialmente, calcula o valor total ao carregar a página (opcional)
calcularValorTotal();
</script>




</body>
</html>

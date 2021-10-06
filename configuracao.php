<?php
include './classes/class_usuario.php';

$usuario = new Usuario();

$usuario->verificarLogado();

$usuario->puxaDados($_SESSION["id"]);

if ($usuario->cnpj) {
  $possuiEmpresa = true;
} else {
  $possuiEmpresa = false;
}

//print($usuario->sobreUsuario);
?>
<html>

<head>
  <meta charset="utf-8" />
  <title>Configurações</title>
  <style>
    body {
      background-color: #090e11;
      width: 101%;
      overflow-x: hidden;
    }

    .cardsDir {
      margin-top: -5%
    }

    .card {
      margin-top: 5%;
      margin-bottom: 5%;
      padding: 5%;
      border-radius: 10px;
    }

    .iconsTec {
      margin-right: -5%;
      border-radius: 50%;
      border-color: black;
      border: 2px;
      width: 70px;
      height: 70px;
      box-shadow: 0 0 1em black;
    }

    textarea {
      box-shadow: 0 0 0.4em black;
    }

    .navbar,
    .card,
    footer {
      box-shadow: 0 0 2em black;
    }

    .userImage {
      border-radius: 50%;
      box-shadow: 0 0 2em blue;
    }

    .margem5 {
      margin-bottom: 5%;
    }
  </style>


  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>

  <!-- CSS-->
  <link rel="stylesheet" type="text/css" href="configuracao.css">

</head>

<body style="background-color: #090e11;">

  <div class="row">

    <?php
    include "./navbar.php";
    ?>

  </div>


  <div class="row" style="margin-top: 6%">
    <div class="col-3" style="margin-left: 1%">
      <!-- Tab navs -->
      <div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" id="v-pills-home-tab" data-mdb-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Meu Dados</a>
        <a class="nav-link" id="v-pills-profile-tab" data-mdb-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Cadastrar Empresa</a>
        <a class="nav-link" id="v-pills-messages-tab" data-mdb-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Excluir Conta</a>
      </div>
      <!-- Tab navs -->
    </div>

    <div class="col-8">
      <!-- Tab content -->

      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

          <div class="container-fluid" style=" margin-bottom: 15%;">
            <div class="row">
              <div class="col-md-3"></div>

              <div class="col-md-6">
                <div class="card bg-dark text-light">
                  <div class="card-body" style="padding: 12%;">
                    <div class="row">
                      <h1 class="d-flex justify-content-center">Redefinir Dados</h1>
                    </div>
                    <div class="row">
                      <div class="col-md-12">

                        <form method="POST" action="./configuracao.php">


                          <div class="form-outline">
                            <div class="row">
                              <div class="col-md-12">
                                <input type="text" id="Name" name="nome" class="form-control" value="<?php echo $_SESSION["usuario"] ?>" />
                                <label class="form-label text-white" for="typeText">Nome</label>
                              </div>
                            </div>
                          </div>




                          <div class="form-outline">
                            <div class="row">
                              <div class="col-md-12">
                                <input type="email" value="<?php echo $_SESSION["email"] ?>" id="typeEmail" name="email" class="form-control" />
                                <label class="form-label text-white" for="typeEmail">E-mail</label>
                              </div>
                            </div>
                          </div>



                          <div class="form-outline">
                            <div class="row">
                              <div class="col-md-12">
                                <input type="password" id="senha" name="senha" class="form-control" />
                                <label class="form-label text-white" for="typePassword">Password</label>
                              </div>
                            </div>
                          </div>


                          <div class="form-check">
                            <script type="text/javascript" src="./js/cadastro.js"></script>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" onclick="mostrarSenha('senha')" />
                            <label class="form-check-label" for="flexCheckDefault">
                              Mostrar senha
                            </label>
                          </div>

                          <div class="form-outline">
                            <div class="row">
                              <div class="col-md-12">
                                <input type="password" id="cSenha" name="senha2" class="form-control" />
                                <label class="form-label text-white" for="typePassword">Confirme sua senha</label>
                              </div>
                            </div>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2" onclick="mostrarSenha('cSenha')" />
                            <script type="text/javascript" src="./js/cadastro.js"></script>
                            <label class="form-check-label" for="flexCheckDefault2">
                              Mostrar senha
                            </label>
                          </div>

                          <div class="d-grid gap-2">
                            <script type="text/javascript" src="./js/cadastro.js"></script>
                            <button class="btn btn-primary" type="submit">REDEFINIR </button>
                          </div>

                          <div class="form-group">
                            <a href="./esqueciSenha.php"> Esqueci minha senha</a>
                          </div>

                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
              </div>
            </div>
          </div>
        </div>


        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
          <!--Cadastro Empresa-->

          <div class="container-fluid" style="margin-bottom: 13%;">
            <div class="row">
              <div class="col-md-3">
              </div>
              <div class="col-md-7">
                <div class="card bg-dark text-light">
                  <div class="card-body" style="padding: 15%;">
                    <div class="row">
                      <h1 class="d-flex justify-content-center">Cadastro empresa</h1>
                    </div>
                    <div class="row">
                      <div class="col-md-10">

                        <div class="form-outline">
                          <div class="row" style="margin-top: 3%;">
                            <div class="col-md-12">
                              <input type="text" id="typeText" class="form-control" />
                              <label class="form-label text-white" for="typeText">Nome da empresa</label>

                            </div>
                          </div>
                        </div>

                        <div class="form-outline">
                          <div class="row" style="margin-top: 6%;">
                            <div class="col-md-12">
                              <input type="text" id="cnpj" class="form-control" />
                              <label class="form-label text-white" for="typeText">CNPJ</label>
                            </div>
                          </div>
                        </div>

                        <div class="form-outline">
                          <div class="row" style="margin-top: 9%;">
                            <div class="col-md-12">
                              <input type="email" id="typeEmail" class="form-control" />
                              <label class="form-label text-white" for="typeEmail">E-mail profissional</label>
                            </div>
                          </div>
                        </div>

                        <div class="d-grid gap-2">
                          <button class="btn btn-primary" type="submit" style="margin-top: 12%;">CADASTRAR</button>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
              </div>
            </div>
          </div>


        </div>

        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

        </div>
      </div>
      <!-- Tab content -->
    </div>

  </div>

  <div class="row" style="width: 104%;margin-left: -2%;">
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-dark text-muted" style="padding-top: 1%;">
      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h5 class="text-uppercase fw-bold mb-4">
                FourDevs
                </h6>
                <p>
                  fourdevs@contato.com.br
                </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h5 class="text-uppercase fw-bold mb-4">
                Links
              </h5>
              <p>
                <a href="#!" class="text-reset">Inicio</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Perfil</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Feed</a>
              </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h5 class="text-uppercase fw-bold mb-4">
                DEVs
              </h5>
              <p>
                <a href="#!" class="text-reset">André Luiz Montanha</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Valmir Thume Junior</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Rodrigo Siveris Klein</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Leonardo Karling Sonco</a>
              </p>
            </div>

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h5 class="text-uppercase fw-bold mb-4">
                Contato
              </h5>
              <p></i> andremontanha.aluno@unipampa.edu.br</p>
              <p></i> valmirthume.aluno@unipampa.edu.br</p>
              <p></i> rodrigoklein.aluno@unipampa.edu.br</p>
              <p></i> leonardosonco.aluno@unipampa.edu.br</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->

      <!-- Copyright -->
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="">FourDevs</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </div>

  <script type="text/javascript" src="./js/cadastroEmpresa.js"></script>

</body>

</html>

<?php
if (!empty($_POST["nome"])) {

  if ($_POST["senha"] == $_POST["senha2"]) {
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    $saida = $usuario->editar($_SESSION["id"], $nome, $email);

    echo "<script>window.location.href= './configuracao.php';</script>";

    if ($saida == "Nenhum dado alterado") {
      echo "<script>alert('" . $saida . "');</script>";
    }
  } else {
    echo "<script>alert('As senhas não coincidem!');</script>";
  }
}

if (!empty($_POST["cnpj"])) {
  $nomeEmpresa = $_POST["nomeEmpresa"];
  $cnpj = $_POST["cnpj"];
  $emailProfissional = $_POST["emailProfissional"];

  if ($possuiEmpresa == true) {
    // realiza o UPDATE

    $saida = $usuario->editarEmpresa($_SESSION["id"], $nomeEmpresa, $cnpj, $emailProfissional);

    echo "<script>window.location.href= './configuracao.php';</script>";

    if ($saida == -1) {
      echo "<script>alert('Erro no cadastro');</script>";
    }
  } else {
    // realiza o INSERT

    $saida = $usuario->cadastroEmpresa($_SESSION["id"], $nomeEmpresa, $cnpj, $emailProfissional);

    echo "<script>window.location.href= './configuracao.php';</script>";

    if ($saida == -1) {
      echo "<script>alert('Erro no cadastro');</script>";
    }
  }
}
?>
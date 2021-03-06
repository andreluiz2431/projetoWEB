<?php
session_start();
?>
<html>

<head>
  <title>Cadastro</title>
  <style>
    .navbar,
    .card,
    footer {
      box-shadow: 0 0 2em black;
    }

    textarea {
      box-shadow: 0 0 0.4em black;
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
</head>

<body style="background-color: #090e11;">


  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-dark text-white" style="position: fixed; z-index: 5;width: 100%;margin-top: -15%;">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="#" style="margin-top: -10%; margin-bottom: -10%;">
              <img src="./img/Logo.png" height="70" alt="" loading="lazy" />
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./index.html">
              <div style="color: white;">Inicio</div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./feed.php">
              <div style="color: white;">Feed</div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./perfil.php">
              <div style="color: white;">Perfil</div>
            </a>
          </li>
        </ul>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center">
        </div>
        <!-- Right elements -->
      </div>
  </nav>


  <div class="container-fluid" style="margin-top: 15%; margin-bottom: 15%;">
    <div class="row">
      <div class="col-md-2"></div>

      <div class="col-md-4">
        <img alt="Visualiza????o da imagem de bootstrap" width="100%" src="./img/Logo.png" />
      </div>

      <div class="col-md-4">
        <div class="card bg-dark text-light">
          <div class="card-body" style="padding: 10%;">
            <div class="row">
              <h1 class="d-flex justify-content-center">CADASTRO</h1>
            </div>
            <div class="row">
              <div class="col-md-12">
                <form method="POST" action="cadastro.php">



                  <div class="form-outline">
                    <div class="row">
                      <div class="col-md-12">
                        <input type="text" id="Name" name="nome" class="form-control" />
                        <label class="form-label text-white" for="typeText">Nome</label>
                      </div>
                    </div>
                  </div>




                  <div class="form-outline">
                    <div class="row">
                      <div class="col-md-12">
                        <input type="email" id="typeEmail" name="email" class="form-control" />
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
                    <button class="btn btn-primary" type="submit" onclick="verificacao('Name','LastName','senha','cSenha')">CADASTRAR </button>
                  </div>

                  <div class="form-group">
                    <a href="./login.php">J?? possui cadastro?</a>
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
              <a href="#!" class="text-reset">Andr?? Luiz Montanha</a>
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
      ?? 2021 Copyright:
      <a class="text-reset fw-bold" href="">FourDevs</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->


</body>

</html>

<?php
if (!empty($_POST["nome"])) {

  if ($_POST["senha"] == $_POST["senha2"]) {

    include "./classes/class_usuario.php";

    $usuario = new Usuario();

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha1 = $_POST["senha"];
    $senha2 = $_POST["senha2"];

    $saida = $usuario->cadastro($nome, $email, $senha1, $senha2);

    if ($saida == "As senhas n??o correspondem") {
      echo "<script>alert('" . $saida . "');</script>";
    }
  }
}
?>
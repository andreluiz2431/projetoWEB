<?php


include './classes/class_usuario.php';

$usuario = new Usuario();

//$usuario->verificarLogado();

$usuario->puxaFeed();

//print($usuario->sobreUsuario);
?>
<html>

<head>
  <meta charset="utf-8" />
  <title>Feed</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
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
  <div class="row">

    <?php
    include "./navbar.php";
    ?>
  </div>


  <div class="container-fluid" style="margin-top: 5%;margin-bottom: 5%;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-12">
              <h3>Feed</h3>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-12">
              <div class="input-group">
                <textarea class="form-control" style="background-color: #333;border: none;" placeholder="Escreva sua publicação para o Feed" aria-label="With textarea"></textarea>
                <button class="btn btn-outline-primary" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                  Publicar
                </button>
              </div>
            </div>
          </div>
          <hr>

          <?php
          if ($usuario->postPost[0]) {

            $count = 0;
            while ($count < sizeof($usuario->postPost)) {
              echo '
              

              <div class="row" style="margin-top: 10%;">
                <div class="col-md-12">
                  <div class="card bg-dark text-light">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-11">
                          <h5 class="card-title">' . $usuario->nomeUsuarioPost[$count] . '</h5>
                        </div>
                        <div class="col-md-1">
                          <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <img src="https://mdbootstrap.com/img/new/avatars/2.jpg" class="rounded-circle" height="25" alt="" loading="lazy" />
                          </a>
                        </div>
                      </div>
                      <div class="row margem5">
                        <div class="col-md-12">
                          <p class="card-text">
                          ' . $usuario->postPost[$count] . '
                          <br>
                          ' . $usuario->dataHora[$count] . '
                          </p>
                        </div>
                      </div>
                      <div class="row margem5">
                        <div class="col-md-12">
                          <a class="fas fa-thumbs-up" style="margin-right: 2%;"></a>
                          <a class="fas fa-thumbs-down" style="margin-right: 2%;"></a>
                          <a class="fas fa-comment"></a>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="input-group">
                            <textarea class="form-control" style="background-color: #333;border: none;" placeholder="Escreva um comentário" aria-label="With textarea"></textarea>
                            <button class="btn btn-outline-primary" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                              Comentar
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <hr>



              ';
              $count++;
            }
          }
          ?>












        </div>
        <div class="col-md-4">
        </div>
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
</body>

</html>
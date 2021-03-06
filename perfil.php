<?php


include './classes/class_usuario.php';

$usuario = new Usuario();

$usuario->verificarLogado();

$usuario->puxaDados($_SESSION["id"]);

//print($usuario->sobreUsuario);
?>
<html>

<head>
  <title>Perfil</title>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>

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
</head>

<body>

  <div id="pegarEmail">
    <?php
    echo $_SESSION['email'];
    ?>
  </div>

  <script>
    function mostra_oculta() {
      var x = document.getElementById("pegarEmail");
      x.style.display = "none";

    }
    mostra_oculta();
  </script>




  <div class="container-fluid">
    <div class="row">

      <?php
      include "./navbar.php";
      ?>
    </div>


    <div class="row" style="margin-left: -2%;">
      <div class="col-md-1">
        <button type="button" class="btn btn-outline-primary btn-floating" data-mdb-toggle="modal" data-mdb-target="#modalThumb" style="position: absolute; margin-top: 16%; margin-left: 1%;">
          <!-- modalThumb -->
          <i class="fas fa-pen"></i>
        </button>
      </div>
      <div class="col-md-12">
        <img src="./img/<?php echo $usuario->thumbUsuario ?>" class="img-fluid" alt="Responsive image" style="height: 350px;width: 100%; object-fit: cover;">
      </div>
    </div>



    <!-- Modal editar perfil -->
    <div class="modal fade" id="modalPerfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content bg-dark text-light">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editar perfil</h5>
            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <div class="row">
              <div class="col-md-12">
                <label>Altere sua foto de perfil</label>
                <br>
                <input type="file" class="form-control" style="background-color: #333;border: none;">
                <hr>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <input class="form-control" style="background-color: #333;border: none;" placeholder="Alterar seu cargo principal" aria-label="With textarea"></input>
                <hr>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <input class="form-control" style="background-color: #333;border: none;" placeholder="Alterar seu endere??o" aria-label="With textarea"></input>
                <hr>
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-mdb-dismiss="modal">
              Cancelar
            </button>
            <button type="button" class="btn btn-primary">Salvar</button>
          </div>
        </div>
      </div>
    </div>



    <!-- Modal editar sobre -->
    <div class="modal fade" id="modalSobre" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content bg-dark text-light">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editar sobre</h5>
            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <div class="row">
              <div class="col-md-12">
                <textarea class="form-control" style="background-color: #333;border: none;" placeholder="Fale um pouco sobre voc??" aria-label="With textarea"></textarea>
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-mdb-dismiss="modal">
              Cancelar
            </button>
            <button type="button" class="btn btn-primary">Salvar</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Modal editar experiencia -->
    <div class="modal fade" id="modalExperiencia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content bg-dark text-light">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editar esperi??ncia</h5>
            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" id="addExp">


            <div class="row">
              <div class="col-md-12">
                <button type="button" onclick="adicionarEXP()" class="btn btn-primary">ADD</button>

              </div>
            </div>
            <hr>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-mdb-dismiss="modal">
              Cancelar
            </button>
            <button type="button" class="btn btn-primary">Salvar</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Modal editar skills -->
    <div class="modal fade" id="modalSkills" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content bg-dark text-light">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editar skills</h5>
            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" id="addSkil">


            <div class="row">
              <div class="col-md-12">

                <button type="button" onclick="adicionarSKIL()" class="btn btn-primary">ADD</button>

              </div>
            </div>
            <hr>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-mdb-dismiss="modal">
              Cancelar
            </button>
            <button type="button" class="btn btn-primary">Salvar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal editar thumb -->
    <div class="modal fade" id="modalThumb" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content bg-dark text-light">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editar thumbnail</h5>
            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <div class="row">
              <div class="col-md-12">
                <label>Altere sua imagem de capa</label>
                <br>
                <input type="file" class="form-control" style="background-color: #333;border: none;">
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-mdb-dismiss="modal">
              Cancelar
            </button>
            <button type="button" class="btn btn-primary">Salvar</button>
          </div>
        </div>
      </div>
    </div>




    <input style="margin-top: 50px;position: absolute" type="button" class="btn btn-primary" value="Gerar PDF" id="btnImprimir" onclick="CriaPDF()" />


    <div class="row">
      <div class="col-md-2">
      </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-4 cardsDir">
            <div class="card border-0 bg-dark text-white">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="d-flex flex-column align-items-center text-center">
                      <img class="userImage" src="<?php echo $usuario->imagemUsuario; ?>" alt="Admin" class="rounded-circle" width="150">

                      <div class="mt-3 ">
                        <h4 id="pegarNome"><?php echo $_SESSION['usuario']; ?></h4>
                        <p class="text-secondary mb-1">
                          <?php
                          if ($usuario->profissaoUsuario != "NULL") {
                            echo $usuario->profissaoUsuario;
                          } else {
                            echo "Sua principal fun????o no mercado (Ex: Full Stack)";
                          }
                          ?>
                        </p>
                        <p class="text-muted font-size-sm">
                          <div id="CEP">
                            <?php
                            if ($usuario->enderecoUsuario != "NULL") {
                              echo $usuario->enderecoUsuario;
                            } else {
                              echo "De onde voc?? ??? (Ex: Alegrete, RS, Brasil)";
                            }
                            ?>
                          </div>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2" style="position: absolute">
                    <button type="button" class="btn btn-outline-primary btn-floating" data-mdb-toggle="modal" data-mdb-target="#modalPerfil">
                      <i class="fas fa-pen"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card mb-3 border-0 bg-dark text-white">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-11">
                        <h3>Sobre</h3>
                      </div>
                      <div class="col-md-1">
                        <button type="button" class="btn btn-outline-primary btn-floating" data-mdb-toggle="modal" data-mdb-target="#modalSobre">
                          <i class="fas fa-pen"></i>
                        </button>
                      </div>
                    </div>
                    <div class="row">
                      <p class="text-secondary mb-1">
                        <div id="pegarSobre">
                          <?php
                          if ($usuario->sobreUsuario != "NULL") {
                            echo $usuario->sobreUsuario;
                          } else {
                            echo "Fale um poco sobre voc??!";
                          }
                          ?>
                        </div>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card mt-3 border-0 bg-dark text-white" style="height: 89%;">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-10">
                        <h3>Tecnologias</h3>
                      </div>
                      <div class="col-md-2">
                        <button type="button" class="btn btn-outline-primary btn-floating" data-mdb-toggle="modal" data-mdb-target="#modalSobre">
                          <i class="fas fa-pen"></i>
                        </button>
                      </div>
                    </div>
                    <div class="row">
                      <div style="height: 40px;"></div>

                      <div class="d-flex flex-row mb-3">
                        <div class="btn-primary iconsTec p-2">
                          <i class="fab fa-github-square fa-3x" style="margin-left: 9%;margin-top: 1%;"></i>
                        </div>

                        <div class="btn-primary iconsTec p-2">
                          <i class="fab fa-react-square fa-3x" style="margin-left: 9%;margin-top: 1%;"></i>
                        </div>

                        <div class="btn-primary iconsTec p-2">
                          <i class="fab fa-js-square fa-3x" style="margin-left: 9%;margin-top: 1%;"></i>
                        </div>

                        <div class="btn-primary iconsTec p-2">
                          <i class="fab fa-php-square fa-3x" style="margin-left: 9%;margin-top: 1%;"></i>
                        </div>

                        <div class="btn-primary iconsTec p-2">
                          <i class="fab fa-html5-square fa-3x" style="margin-left: 9%;margin-top: 1%;"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="row" style="margin-top: -11%;">
              <div class="col-md-6">
                <div class="card h-100 border-0 bg-dark text-white">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-10">
                        <h3 class="d-flex align-items-center mb-3">Skills</h3>
                      </div>
                      <div class="col-md-2">
                        <button type="button" class="btn btn-outline-primary btn-floating" data-mdb-toggle="modal" data-mdb-target="#modalSkills">
                          <i class="fas fa-pen"></i>
                        </button>
                      </div>
                    </div>
                    <div id="pegarSkill">
                      <?php
                      if ($usuario->skill[0]) {
                        $count = 0;
                        while ($count < sizeof($usuario->skill)) {

                          echo '<small>' . $usuario->skill[$count] . '</small>';

                          echo '<div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: ' . $usuario->valorSkill[$count] * 10 . '%" aria-valuenow="<?php echo $usuario->skill; ?>" aria-valuemin="0" aria-valuemax="10"></div>
                        </div>';

                          $count++;
                        }
                      }
                      ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card h-100 border-0 bg-dark text-white">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-10">
                        <h3 class="d-flex align-items-center mb-3">Experi??ncia</h3>
                      </div>
                      <div class="col-md-2">
                        <button type="button" class="btn btn-outline-primary btn-floating" data-mdb-toggle="modal" data-mdb-target="#modalExperiencia">
                          <i class="fas fa-pen"></i>
                        </button>
                      </div>
                    </div>

                    <div id="pegarExperiencia">
                      <?php
                      if ($usuario->experiencia[0]) {
                        $count = 0;
                        while ($count < sizeof($usuario->experiencia)) {

                          echo '<div class="row"> 
                        <small>' . $usuario->experiencia[$count] . '</small>
                        <hr class="btn-primary">
                        </div>';

                          $count++;
                        }
                      }
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card mt-3 border-0 bg-dark text-white" style="width: 100%; margin-bottom: 7%;">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row" style="margin-bottom: 20px;">
                      <div class="col-md-10">
                        <h3>Conex??es</h3>
                      </div>
                      <div class="col-md-2">
                        <button type="button" class="btn btn-outline-primary btn-floating" data-mdb-toggle="modal" data-mdb-target="#modalSobre">
                          <i class="fas fa-pen"></i>
                        </button>
                      </div>
                    </div>
                    <div class="row">
                    </div>
                    <div class="row">
                      <div class="col-md-1">
                        <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                          <img src="https://mdbootstrap.com/img/new/avatars/2.jpg" class="rounded-circle" height="25" alt="" loading="lazy" />
                        </a>
                      </div>
                      <div class="col-md-11">
                        <small>Xxxxxxxxxxxxxxx</small>
                      </div>
                    </div>
                    <hr class="btn-primary">

                    <div class="row">
                      <div class="col-md-1">
                        <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                          <img src="https://mdbootstrap.com/img/new/avatars/2.jpg" class="rounded-circle" height="25" alt="" loading="lazy" />
                        </a>
                      </div>
                      <div class="col-md-11">
                        <small>Xxxxxxxxxxxxxxx</small>
                      </div>
                    </div>
                    <hr class="btn-primary">

                    <div class="row">
                      <div class="col-md-1">
                        <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                          <img src="https://mdbootstrap.com/img/new/avatars/2.jpg" class="rounded-circle" height="25" alt="" loading="lazy" />
                        </a>
                      </div>
                      <div class="col-md-11">
                        <small>Xxxxxxxxxxxxxxx</small>
                      </div>
                    </div>
                    <hr class="btn-primary">

                    <div class="row">
                      <div class="col-md-1">
                        <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                          <img src="https://mdbootstrap.com/img/new/avatars/2.jpg" class="rounded-circle" height="25" alt="" loading="lazy" />
                        </a>
                      </div>
                      <div class="col-md-11">
                        <small>Xxxxxxxxxxxxxxx</small>
                      </div>
                    </div>
                    <hr class="btn-primary">

                    <div class="row">
                      <div class="col-md-1">
                        <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                          <img src="https://mdbootstrap.com/img/new/avatars/2.jpg" class="rounded-circle" height="25" alt="" loading="lazy" />
                        </a>
                      </div>
                      <div class="col-md-11">
                        <small>Xxxxxxxxxxxxxxx</small>
                      </div>
                    </div>
                    <hr class="btn-primary">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card mb-3 border-0 bg-dark text-white" style="width: 100%;">
              <div class="card-body">
                <div class="row">
                  <h3>Publica????es</h3>
                </div>
                <div class="row" style="margin-top: 2%;">
                  <div class="input-group">
                    <textarea class="form-control" style="background-color: #333;border: none;" placeholder="Escreva sua publica????o para o Feed" aria-label="With textarea"></textarea>
                    <button class="btn btn-outline-primary" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                      Publicar
                    </button>
                  </div>
                </div>
              </div>

            </div>
            <div class="row" style="margin-top: -4%;">
              <div class="col-md-1"></div>
              <div class="col-md-10">

                <?php
                if ($usuario->postPost[0]) {

                  $count = 0;
                  while ($count < sizeof($usuario->postPost)) {

                    echo '
                    <div class="card bg-dark text-light">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-11">
                        <h5 class="card-title">' . $_SESSION["usuario"] . '</h5>
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
                          <textarea class="form-control" style="background-color: #333;border: none;" placeholder="Escreva um coment??rio" aria-label="With textarea"></textarea>
                          <button class="btn btn-outline-primary" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                            Comentar
                          </button>
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
            </div>


          </div>
          <div class="col-md-1"></div>
        </div>
        <div class="col-md-2">
        </div>
      </div>

      <div class="row" style="margin-top: 5%;">
        <!-- Footer -->
        <footer class="text-center text-lg-start bg-dark text-muted">
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
      </div>
    </div>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
    <script type="text/javascript" src="./js/perfil.js"></script>
    <script type="text/javascript" src="./js/geraPDF.js"></script>

</body>







</html>
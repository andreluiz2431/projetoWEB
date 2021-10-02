<?php


include './classes/class_usuario.php';

$usuario = new Usuario();

$usuario->verificarLogado();
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

  <div class="container-fluid">
    <div class="row">

      <!-- Navbar testeeeeedee -->
      <nav class="navbar navbar-expand-lg navbar-light bg-dark text-white" style="position: fixed; z-index: 5;">
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
                <a class="nav-link" href="./feed.html">
                  <div style="color: white;">Feed</div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./perfil.html">
                  <div style="color: white;">Perfil</div>
                </a>
              </li>
            </ul>
            <!-- Left links -->
          </div>
          <!-- Collapsible wrapper -->

          <!-- Right elements -->
          <div class="d-flex align-items-center">

          </div>

          <div class="dropdown">

            <i class="fas fa-ellipsis-v" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false"></i>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="#">Configurações</a></li>
              <li><a class="dropdown-item" href="#">Sair</a></li>
            </ul>
          </div>

          <!-- Right elements-->
        </div>
        <!-- Container wrapper -->
      </nav>
      <!-- Navbar -->
    </div>


    <div class="row" style="margin-left: -2%;">
      <div class="col-md-1">
        <button type="button" class="btn btn-outline-primary btn-floating" data-mdb-toggle="modal" data-mdb-target="#modalThumb" style="position: absolute; margin-top: 16%; margin-left: 1%;">
          <!-- modalThumb -->
          <i class="fas fa-pen"></i>
        </button>
      </div>
      <div class="col-md-12">
        <img src="./img/perfil.gif" class="img-fluid" alt="Responsive image" style="height: 350px;width: 100%; object-fit: cover;">
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
                <input class="form-control" style="background-color: #333;border: none;" placeholder="Alterar seu endereço" aria-label="With textarea"></input>
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
                <textarea class="form-control" style="background-color: #333;border: none;" placeholder="Fale um pouco sobre você" aria-label="With textarea"></textarea>
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
            <h5 class="modal-title" id="exampleModalLabel">Editar esperiência</h5>
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
                      <img class="userImage" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">

                      <div class="mt-3 ">
                        <h4><?php echo $_SESSION['usuario']; ?></h4>
                        <p class="text-secondary mb-1">Full Stack Developer</p>
                        <p class="text-muted font-size-sm">Alegrete, RS, Brasil</p>
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
                      <p class="text-secondary mb-1">XXXXXXXXXXXXXXXXXXXXXXx</p>
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
                    <small>Web Design</small>
                    <div class="progress mb-3" style="height: 5px">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small>Website Markup</small>
                    <div class="progress mb-3" style="height: 5px">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small>One Page</small>
                    <div class="progress mb-3" style="height: 5px">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small>Mobile Template</small>
                    <div class="progress mb-3" style="height: 5px">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small>Backend API</small>
                    <div class="progress mb-3" style="height: 5px">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card h-100 border-0 bg-dark text-white">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-10">
                        <h3 class="d-flex align-items-center mb-3">Experiência</h3>
                      </div>
                      <div class="col-md-2">
                        <button type="button" class="btn btn-outline-primary btn-floating" data-mdb-toggle="modal" data-mdb-target="#modalExperiencia">
                          <i class="fas fa-pen"></i>
                        </button>
                      </div>
                    </div>
                    <div class="row">
                      <small>Xxxxxxxxxxxxxxx</small>
                      <hr class="btn-primary">
                    </div>
                    <div class="row">
                      <small>Xxxxxxxxxxxxxxx</small>
                      <hr class="btn-primary">
                    </div>
                    <div class="row">
                      <small>Xxxxxxxxxxxxxxx</small>
                      <hr class="btn-primary">
                    </div>
                    <div class="row">
                      <small>Xxxxxxxxxxxxxxx</small>
                      <hr class="btn-primary">
                    </div>
                    <div class="row">
                      <small>Xxxxxxxxxxxxxxx</small>
                      <hr class="btn-primary">
                    </div>
                    <div class="row">
                      <small>Xxxxxxxxxxxxxxx</small>
                      <hr class="btn-primary">
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
                        <h3>Conexões</h3>
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
                  <h3>Publicações</h3>
                </div>
                <div class="row" style="margin-top: 2%;">
                  <div class="input-group">
                    <textarea class="form-control" style="background-color: #333;border: none;" placeholder="Escreva sua publicação para o Feed" aria-label="With textarea"></textarea>
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
                <div class="card bg-dark text-light">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-11">
                        <h5 class="card-title">Card title</h5>
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
                          Some quick example text to build on the card title and make up the bulk of the
                          card's content.
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
                <hr>





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
    </div>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
    <script type="text/javascript" src="./js/perfil.js"></script>
</body>

</html>
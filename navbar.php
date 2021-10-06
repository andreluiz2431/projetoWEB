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
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center">

    </div>

    <div class="btn-group dropstart">

      <i class="fas fa-ellipsis-v" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">
        <span class="visually-hidden">Toggle Dropdown</span></i>

      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <li><a class="dropdown-item" href="./configuracao.php">Configurações</a></li>
        <li>
          <form method="POST" action="configuracao.php">
            <input type="hidden" name="conf" value="true"><button type="submit" class="dropdown-item" href="#">Sair</button>
          </form>
          <?php
          if (!empty($_POST["conf"])) {
            session_destroy();

            echo "<script>window.location.href= './configuracao.php';</script>";
          }
          ?>
        </li>
      </ul>
    </div>

    <!-- Right elements-->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
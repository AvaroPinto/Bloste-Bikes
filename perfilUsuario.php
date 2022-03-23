<?php
session_start();
    if (empty($_SESSION['usuarioRegistrado'])) {
        session_destroy();
        header("location: ./index.php");
    }else{
      $nombre = $_SESSION['usuarioRegistrado'];
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blostebikes";

    $correo = "";
    $contrasena = "";
    $telefono = "";
    
    $conexion = new mysqli($servername, $username, $password, $dbname);
    $seleccion = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombreUsuario = '$nombre'");

    if($registro = mysqli_fetch_array($seleccion)) {
      $nombre = $registro['nombreUsuario'];
      $correo = $registro['correo'];
      $contrasena = $registro['contrasena'];
      $telefono = $registro['telefono'];

      
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b04f9330e3.js" crossorigin="anonymous"></script>
    <title>Perfil Usuario</title>
    <link rel="shortcut icon" type="image/x-icon" href="./images/titleBarImage.ico" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script><!-- Dejamos puesto aqui el cdn de sweetalert -->
</head>
<body>
  <?php echo "<p style='color: white;'>p</p>";  ?>
<div class="container"  style="width: 70%;">
    <header>
      <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
  <!-- Container wrapper -->
  <div class="container">
    <!-- Navbar brand -->
    <a class="navbar-brand me-2" href="./index.php">
      <img
        src="./images/navLogo.png"
        height="100"
        alt="MDB Logo"
        loading="lazy"
        style="margin-top: -1px; border-radius: 10px;"
      />
    </a>

    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarButtonsExample"
      aria-controls="navbarButtonsExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Bicis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Componentes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Equipación</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Quienes Somos</a>
        </li>
      </ul>
      <!-- Left links -->
      <?php
        if (empty($_SESSION['usuarioRegistrado'])) {
            echo "
            <div class='d-flex align-items-center'>
            <a class='btn btn-link px-3 me-2' href='./login.php' role='button'>Login</a>
            <a class='btn btn-primary me-3' href='./registro.php' role='button'>Regístrate</a>
            </div>";
        }else{
            echo "
            <div class='d-flex align-items-center'>
            <a class='btn btn-primary px-3 me-2' href='./perfilUsuario.php' role='button'>Mi Cuenta</a>
            <a class='btn btn-danger px-3 me-2' href='./cerrarSesion.php' role='button'><i class='fa-solid fa-door-open'></i></a>
            </div>";
        }
    ?>
        <div class="d-flex align-items-center">
        <a
          class="btn btn-dark px-3"
          href="https://github.com/avaropinto"
          role="button"
          ><i class="fab fa-github"></i></a>
        </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
      </header>
      <section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Perfil Usuario</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="./images/profileImage.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3"><?php echo $nombre; ?></h5>
            <p class="text-muted mb-1">Usuario Bloste Premium</p>
            <div class="d-flex justify-content-center mb-2">
              <a class="btn btn-danger mt-3 mb-4" href="deleteUsuario.php" role="button">Eliminar Perfil</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nombre Usuario</p>
              </div>
              <div class="col-sm-6">
                <p class="text-muted mb-0"><?php echo $nombre; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-6">
                <p class="text-muted mb-0"><?php echo $correo; ?></p>
              </div>
              <div class="col-sm-3">
              <a class="btn btn-primary" href="updateUsuario.php" role="button">Editar</a>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Contraseña</p>
              </div>
              <div class="col-sm-6">
                <p class="text-muted mb-0">************</p>
              </div>
              <div class="col-sm-3">
              <a class="btn btn-primary" href="updateUsuario.php" role="button">Editar</a>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Movil</p>
              </div>
              <div class="col-sm-6">
                <p class="text-muted mb-0"><?php echo $telefono; ?></p>
              </div>
              <div class="col-sm-3">
              <a class="btn btn-primary" href="updateUsuario.php" role="button">Editar</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">Ultimos</span> Pedidos</p>
                <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

      <!-- Footer -->
      <footer class="text-center text-white" style="background-color: #f1f1f1;">
  <!-- Grid container -->
  <div class="container pt-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Google -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="mailto:alvaropintoarevalo@gmail.com"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="https://www.instagram.com/avaropinto_/?Subject=Bloste%20Bikes"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="https://www.linkedin.com/in/alvaropintoarevalo/"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-linkedin"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="https://github.com/AvaroPinto"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-dark" href="">Tronkis By Avaro</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
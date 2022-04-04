<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlosteBikes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="./images/titleBarImage.ico">
    <script src="https://kit.fontawesome.com/b04f9330e3.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<div class="container" style="width: 70%;">
    <header>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
  <!-- Container wrapper -->
        <div class="container">
    <!-- Navbar brand -->
    <a class="navbar-brand me-2" href="../index.php">
      <img
        src="../images/navLogo.png"
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
          <a class="nav-link" href="../vistas/vistaBicis.php">Bicis</a>
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
        <li class="nav-item">
          <a class="nav-link" href="../listaDeseos.php">Carrito</a>
        </li>
      </ul>
      <!-- Left links -->
      <?php
        if (empty($_SESSION['usuarioRegistrado'])) {
            echo "
            <div class='d-flex align-items-center'>
            <a class='btn btn-link px-3 me-2' href='../login.php' role='button'>Login</a>
            <a class='btn btn-primary me-3' href='../registro.php' role='button'>Regístrate</a>
            </div>";
        }else{
            echo "
            <div class='d-flex align-items-center'>
            <a class='btn btn-primary px-3 me-2' href='../perfilUsuario.php' role='button'>Mi Cuenta</a>
            <a class='btn btn-danger px-3 me-2' href='../cerrarSesion.php' role='button'><i class='fa-solid fa-door-open'></i></a>
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
</header>

</body>
<!-- Navbar -->
</html>
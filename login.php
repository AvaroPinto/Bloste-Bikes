<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="./images/titleBarImage.ico">
    <title>BlosteBikes-Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/b04f9330e3.js" crossorigin="anonymous"></script>
    <?php 
    
      session_start();

      if (!empty($_SESSION['usuarioRegistrado'])) {
        header("location: ./index.php");
      }
      echo "<p style='color: white;'>".$_SESSION['errorCode']."</p>";
      if ($_SESSION['errorCode']==0) {
        //no hacemos nada jeje
      }elseif ($_SESSION['errorCode']==1) {
        echo "<script>Swal.fire({icon: 'Error',title: 'Upss...',text: 'Error de credenciales, prueba de nuevo!'})</script>";
      }elseif ($_SESSION['errorCode']==3) {
        echo "<script>Swal.fire({icon: 'Error',title: 'Upss...',text: 'Email no valido, prueba de nuevo!'})</script>";
      }
      $_SESSION['errorCode']=0;
      
    ?>
</head>
<body>
<div class="container" style="width: 70%;">
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
      </header>
  <!-- Navbar -->
          <div class="cpntainer d-flex justify-content-center align-items-center h-100 pt-5 pb-5 bg-light">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img
                      src="./images/failLogin.jpeg"
                      alt="login form"
                      class="img-fluid" style="border-radius: 1rem 0 0 1rem; height: 100%;"
                    />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                      <form method="POST" action="./loginUsuario.php">
      
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <span class="h1 fw-bold mb-0">Login</span>
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Accede a tu cuenta</h5>
      
                        <div class="form-outline mb-4">
                          <input type="email" id="form2Example17" name="correo" class="form-control form-control-lg" required />
                          <label class="form-label" for="form2Example17">Email</label>
                        </div>
      
                        <div class="form-outline mb-4">
                          <input type="password" id="form2Example27" name="contrasena" class="form-control form-control-lg" max="16" required/>
                          <label class="form-label" for="form2Example27">Contraseña</label>
                        </div>
      
                        <div class="pt-1 mb-4">
                          <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                        </div>

                        <p class="mb-1 pb-lg-2" style="color: #393f81;">¿No tienes cuenta? <a href="registro.php" style="color: #393f81;">Regístrate aquí</a></p>
                        <a href="#!" class="small text-muted">Términos de uso falsos, </a>
                        <a href="#!" class="small text-muted">Política de Perro Chanche</a>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


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

</div>
</body>
</html>
<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlosteBikes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="./images/titleBarImage.ico">
</head>
<body>
  <div class="container"  style="width: 70%;">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0 margincito" style="margin-left: 250px;">
        <div class="container">
          <a class="navbar-brand" href="#!"><span style="color: #fff;">Bloste</span><span style="color: #fff;">Bikes</span></a>
          <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
          data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link" href="#!">Bicis</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#!">Componentes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#!">Equipación</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#!">Quienes Somos</a>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="btn dropdown-toggle nav-link" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php
                        if (empty($_SESSION['usuarioRegistrado'])) {
                          echo "Mi cuenta";
                        }else{
                          echo $_SESSION['usuarioRegistrado'];
                        }
                        ?>
                    </a>
                    <?php
                      if (empty($_SESSION['usuarioRegistrado'])) {
                        echo "<ul class='dropdown-menu' aria-labelledby='dropdownMenuButton1'>
                          <li><a class='dropdown-item' href='login.php'>Login</a></li>
                          <li><a class='dropdown-item' href='registro.php'>Registrarse</a></li>
                        </ul>";
                      }else{
                        echo "<ul class='dropdown-menu' aria-labelledby='dropdownMenuButton1'>
                          <li><a class='dropdown-item' href='login.php'>Perfil</a></li>
                          <li><a class='dropdown-item' href='login.php'>Pedidos</a></li>
                          <li><a class='dropdown-item' href='login.php'>Lista Deseos</a></li>
                          <li><a class='dropdown-item' href='cerrarSesion.php'>Cerrar Sesión</a></li>
                        </ul>";
                      }
                    ?>
                  </div>
                </li>
              </ul>
            </div>
          </div>
      </nav>
        
        <section>
          <div id="intro" class="bg-image vh-100">
            <img src="./images/header2.jpeg" style="width: 100%;">
            <div class="mask" style="background-color: rgba(250, 182, 162, 0.15);"></div>
          </div>
        </section>
      </header>  
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
<?php
  session_start();
  $_SESSION['errorCode']=0;
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
    <script src="https://kit.fontawesome.com/b04f9330e3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./CSS/style.css" />
    <link rel="stylesheet" href="./CSS/tarjetas.css" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<?php echo "<p style='color: white;'>p</p>";  ?>
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

<!-- Carousel de fotos -->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./images/carousel2.jpeg" class="d-block w-100 rounded" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Bicis completas</h5>
              <p>Elige una y a rodar.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./images/carousel3.jpeg" class="d-block w-100 rounded" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Selecciona Componentes</h5>
              <p>Crea la bici de tus sueños.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./images/header2.jpeg" class="d-block w-100 rounded" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Equípate</h5>
              <p>Y llega a lugares que nunca imaginaste.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  <!-- Carousel de fotos -->

  <!-- Tarjetas de iformacion -->

<section class="light">
	<div class="container py-2">
		<div class="h1 text-center text-dark" id="pageHeaderTitle">Para los expertos de verdad</div>

		<article class="postcard light green">
			<a class="postcard__img_link" href="./vistas/vistaBicis.php">
				<img class="postcard__img" src="./images/imgLogin.jpeg" alt="Image Title" />
			</a>
			<div class="postcard__text t-dark">
				<h1 class="postcard__title green"><a href="./vistas/vistaBicis.php">XC y DownHill</a></h1>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Nuestras bicicletas de cross-country son de alta tecnología para el touring, el entrenamiento y la competición. Si tu apodo es la eficiencia y si flipas por la velocidad. Nuestras bicis de gravity no tienen miedo de nada ni de nadie. Las líneas tremendas de descenso así que los saltos gordos son su hábitat natural. Entonces has hecho bien en venir si te gustan los recorridos rápidos y sucios!</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>Descenso</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>Salidas largas</li>
					<li class="tag__item play green">
						<a href="./vistas/vistaBicis.php"><i class="fas fa-play mr-2"></i>Pruebalas</a>
					</li>
				</ul>
			</div>
		</article>
		<article class="postcard light yellow">
			<a class="postcard__img_link" href="./vistas/vistaBicis.php">
				<img class="postcard__img" src="./images/ciclistis.jpeg" alt="Image Title" />
			</a>
			<div class="postcard__text t-dark">
				<h1 class="postcard__title yellow"><a href="./vistas/vistaBicis.php">Road Bike y Gravel</a></h1>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">La bicicleta de grava se siente muy bien en lugares donde la bicicleta de carretera clásica tiene problemas. Te ofrece la suavidad de marcha y la seguridad necesarias en todoterreno, lo que lo convierte en el proyectil ideal para cualquiera que quiera tener flexibilidad en su elección de rutas y dejar atrás las calles. Tambien tenemos bicis de carretera para la experiencia reina del ciclismo.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>Llaneo</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>Maratón y larga Distancia</li>
					<li class="tag__item play yellow">
						<a href="./vistas/vistaBicis.php"><i class="fas fa-play mr-2"></i>Pruebalas</a>
					</li>
				</ul>
			</div>
		</article>
	</div>
</section>

<!-- Tarjetas de iformacion -->

<!-- Acceso to wapos -->

<div>
<ul class="d-flex justify-content-center">
  <li class="booking-card" style="background-image: url(./images/bujes.png)">
    <div class="book-container">
      <div class="content">
        <button class="btn"><a href="./vistas/vistaProductos.php" class="text-white">Comprar</a></button>
      </div>
    </div>
    <div class="informations-container">
      <h2 class="title">Las mejores ruedas y bujes</h2>
      <p class="sub-title">Marcas de calidad</p>
      <p class="price"><svg class="icon" style="width:24px;height:24px" viewBox="0 0 24 24">
    <path fill="currentColor" d="M3,6H21V18H3V6M12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9M7,8A2,2 0 0,1 5,10V14A2,2 0 0,1 7,16H17A2,2 0 0,1 19,14V10A2,2 0 0,1 17,8H7Z" />
</svg>Desde 49,99 €</p>
      <div class="more-information">
        <div class="info-and-date-container">
          <div class="box info">
            <svg class="icon" style="width:24px;height:24px" viewBox="0 0 24 24">
      <path fill="currentColor" d="M11,9H13V7H11M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M11,17H13V11H11V17Z" />
  </svg>
            <p>Componentes con 2 años de garantía</p>
          </div>
          <div class="box date">
            <svg class="icon" style="width:24px;height:24px" viewBox="0 0 24 24">
      <path fill="currentColor" d="M19,19H5V8H19M16,1V3H8V1H6V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3H18V1M17,12H12V17H17V12Z" />
  </svg>
            <p>Temporada 2022/2023</p>
          </div>
        </div>
        <p class="disclaimer">Aquí podemos encontrar un buen EasterEgg en el cual no os enseño mucho de información pero aprovecho para deciros que Os quiero!</p>
        </div>
    </div>
  </li>
  <li class="booking-card" style="background-image: url(./images/bizzis.png);">
    <div class="book-container">
      <div class="content">
        <button class="btn"><a href="./vistas/vistaProductos.php" class="text-white">Comprar</a></button>
      </div>
    </div>
    <div class="informations-container">
      <h2 class="title">Equípate con la mejor ropa</h2>
      <p class="sub-title">Gobik, Castelli y Sportful</p>
      <p class="price"><svg class="icon" style="width:24px;height:24px" viewBox="0 0 24 24">
    <path fill="currentColor" d="M3,6H21V18H3V6M12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9M7,8A2,2 0 0,1 5,10V14A2,2 0 0,1 7,16H17A2,2 0 0,1 19,14V10A2,2 0 0,1 17,8H7Z" />
</svg>Desde 39,99 €</p>
      <div class="more-information">
        <div class="info-and-date-container">
          <div class="box info">
            <svg class="icon" style="width:24px;height:24px" viewBox="0 0 24 24">
      <path fill="currentColor" d="M11,9H13V7H11M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M11,17H13V11H11V17Z" />
  </svg>
            <p>Ropa con 2 años de garantía</p>
          </div>
          <div class="box date">
            <svg class="icon" style="width:24px;height:24px" viewBox="0 0 24 24">
      <path fill="currentColor" d="M19,19H5V8H19M16,1V3H8V1H6V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3H18V1M17,12H12V17H17V12Z" />
  </svg>
            <p>Temporada 2022/2023</p>
          </div>
        </div>
        <p class="disclaimer">Es muy importante llevar una equipación adecuada dependiendo de la disciplina que desarrollemos en la bicicleta. Siempre está bien ir bien abrigado.</p>
        </div>
    </div>
  </li>
  <li class="booking-card" style="background-image: url(./images/guantes.png);">
    <div class="book-container">
      <div class="content">
        <button class="btn"><a href="./vistas/vistaProductos.php" class="text-white">Comprar</a></button>
      </div>
    </div>
    <div class="informations-container">
      <h2 class="title">Guantes de protección</h2>
      <p class="sub-title">Verano, invierno, siempre protegido</p>
      <p class="price"><svg class="icon" style="width:24px;height:24px" viewBox="0 0 24 24">
    <path fill="currentColor" d="M3,6H21V18H3V6M12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9M7,8A2,2 0 0,1 5,10V14A2,2 0 0,1 7,16H17A2,2 0 0,1 19,14V10A2,2 0 0,1 17,8H7Z" />
</svg>Desde 19,99 €</p>
      <div class="more-information">
        <div class="info-and-date-container">
          <div class="box info">
            <svg class="icon" style="width:24px;height:24px" viewBox="0 0 24 24">
      <path fill="currentColor" d="M11,9H13V7H11M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M11,17H13V11H11V17Z" />
  </svg>
            <p>Garantía de 1 año</p>
          </div>
          <div class="box date">
            <svg class="icon" style="width:24px;height:24px" viewBox="0 0 24 24">
      <path fill="currentColor" d="M19,19H5V8H19M16,1V3H8V1H6V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3H18V1M17,12H12V17H17V12Z" />
  </svg>
            <p>Temporada 2022/2023</p>
          </div>
        </div>
        <p class="disclaimer">Aquí te doy un consejo de que siempre tienes que llevar guantes, porque lo primero que toca el suelo si te caes, son las manos y te puedes hacer un cristo.</p>
        </div>
    </div>
  </li>
  <li class="booking-card" style="background-image: url(./images/helmet.png);">
    <div class="book-container">
      <div class="content">
        <button class="btn"><a href="./vistas/vistaProductos.php" class="text-white">Comprar</a></button>
      </div>
    </div>
    <div class="informations-container">
      <h2 class="title">Cascos de calidad</h2>
      <p class="sub-title">ABUS, KASK y muchas más</p>
      <p class="price"><svg class="icon" style="width:24px;height:24px" viewBox="0 0 24 24">
    <path fill="currentColor" d="M3,6H21V18H3V6M12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9M7,8A2,2 0 0,1 5,10V14A2,2 0 0,1 7,16H17A2,2 0 0,1 19,14V10A2,2 0 0,1 17,8H7Z" />
</svg>Desde 79,99 €</p>
      <div class="more-information">
        <div class="info-and-date-container">
          <div class="box info">
            <svg class="icon" style="width:24px;height:24px" viewBox="0 0 24 24">
      <path fill="currentColor" d="M11,9H13V7H11M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M11,17H13V11H11V17Z" />
  </svg>
            <p>Durabilidad de 3 años</p>
          </div>
          <div class="box date">
            <svg class="icon" style="width:24px;height:24px" viewBox="0 0 24 24">
      <path fill="currentColor" d="M19,19H5V8H19M16,1V3H8V1H6V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3H18V1M17,12H12V17H17V12Z" />
  </svg>
            <p>Durabilidad y resistencia aseguradas</p>
          </div>
        </div>
        <p class="disclaimer">Siempre hay que llevar casco porque es el elemento que absorbe el impacto de nuestra cabe y nos puede salvar la vida en cualquier momento.</p>
        </div>
    </div>
  </li>
</ul>
      </div>

<!-- Acceso to wapos -->


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
<?php
session_start();
if (empty($_SESSION['usuarioRegistrado'])) {
  session_destroy();
  header("location: ./index.php");
} else {
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

if ($registro = mysqli_fetch_array($seleccion)) {
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
  <?php
  echo "<p style='color: white;'>" . $_SESSION['compraCode'] . "</p>";
  if ($_SESSION['compraCode'] == 1) {
    echo "<script>Swal.fire({position: 'center',icon: 'success',title: 'Tu pedido ha sido realizado',showConfirmButton: false,timer: 1500})</script>";
    $_SESSION['compraCode'] = 0;
  }
  ?>
  <?php include './elementosVisuales/header.php'; ?>

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
                <button type="button" class="btn btn-danger m-4" onclick="dualidad()">Eliminar Perfil</button>
              </div>
              <hr>
              <div class="row">
                <div class="col mt-3 mb-3">
                  <p class="mb-0">Carrito</p>
                </div>
                <div class="col mt-2">
                  <a class="btn btn-primary w-50" href="carrito.php" role="button">Ver</a>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col mt-3">
                  <p class="mb-0">Lista Deseos</p>
                </div>
                <div class="col mt-2">
                  <a class="btn btn-primary w-50" href="listaDeseos.php" role="button">Ver</a>
                </div>
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
                  <hr>
                  <?php
                  //aqui metemos toda la vaina del tema de los pedidos del usuario.
                  if ($listadoPedidos = mysqli_query($conexion, "SELECT * FROM pedidos WHERE usuario = '$nombre'")) {
                    while ($linea = mysqli_fetch_array($listadoPedidos)) {
                      //echo "articulo<br>";
                      $phpdate = strtotime($linea['fecha']);
                      $fechote = date('d-m-Y', $phpdate);
                      echo "<div class='row'>
                        <div class='col-sm-4'>
                          <p class='text-muted mb-0'>Fecha: <b>" . $fechote . "</b></p>
                        </div>
                        <div class='col-sm-4'>
                          <p class='text-muted mb-0'>Total: <b>" . number_format($linea['Importe'], 2, ',', '.') . " €</b></p>
                        </div>
                        <div class='col-sm-4'>
                          <form method='POST' action='./factura.php'>
                            <input id='facturitis' name='numeroPedidoFactura' type='hidden' value='" . $linea['IDPedido'] . "'>
                            <input id='facturitistra' name='precioPedidoFactura' type='hidden' value='" . $linea['Importe'] . "'>
                            <button class='btn btn-primary' href='updateUsuario.php' role='button' type='submit'>Descargar  <i class='far fa-file-alt'></i></button>
                          </form>
                        </div>
                      </div>";
                      echo "<hr>";
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
  </section>

  <?php include './elementosVisuales/footer.php'; ?>


  <script>
    function dualidad() {
      Swal.fire({
        title: 'Estas seguro de Eliminar tu usuario?',
        text: "La acción es irreversible!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Confirmar!'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Perfil eliminado!',
            'Tus datos han sido eliminados.',
            'success'
          )
          const myTimeout = setTimeout(myGreeting, 1500);

          function myGreeting() {
            window.location.href = "deleteUsuario.php";
          }
        }
      })
    }
  </script>
</body>

</html>
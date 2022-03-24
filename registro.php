<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlosteBikes-Registro</title>
    <link rel="shortcut icon" type="image/x-icon" href="./images/titleBarImage.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php 
    
      session_start();
      if (!empty($_SESSION['usuarioRegistrado'])) {
        header("location: ./index.php");
      }

      if (!empty($_SESSION['usuarioRegistrado'])) {
        header("location: ./index.php");
      }
      echo "<p style='color: white;'>".$_SESSION['errorCode']."</p>";
      if ($_SESSION['errorCode']==0) {
        //no hacemos nada jeje
      }elseif ($_SESSION['errorCode']==1) {
        echo "<script>Swal.fire({icon: 'Error',title: 'Upss...',text: 'No coinciden las contraseñas!'})</script>";
      }elseif ($_SESSION['errorCode']==2) {
        echo "<script>Swal.fire({icon: 'Error',title: 'Upss...',text: 'Usuario ya existente!'})</script>";
      }
      $_SESSION['errorCode']=0;
      
    ?>
</head>
<body>

<?php include './elementosVisuales/header.php'; ?>

        <div class="container h-100 bg-light pt-5 pb-4">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Registro Usuario</p>
      
                      <form class="mx-1 mx-md-4" action="registroUsuario.php" method="POST">
                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user-alt" style="font-size:30px; margin-right: 10px;"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="text" id="nombreUser" name="nombreUsuario" class="form-control" placeholder="Nombre Usuario" style="height: 50px;" required/>
                          </div>
                        </div>
                        <br>
                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="material-icons" style="font-size:30px; margin-right: 10px;">email</i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="email" id="emailUsuario" name="emailUsuario" class="form-control" placeholder="Email" style="height: 50px;" required/>
                          </div>
                        </div>
                        <br>
                        <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-phone" style="font-size:30px; margin-right: 10px;"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="phone" id="telefono" name="telUsuario" class="form-control" placeholder="Teléfono" style="height: 50px;" maxlength="9" required />
                          </div>
                        </div>
                        <br>
                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-key" style="font-size:30px; margin-right: 10px;"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="password" id="contrasenaUsuario" name="contrasenaUsuario" class="form-control" placeholder="Contraseña" style="height: 50px;" required/>
                          </div>
                        </div>
                        <br>
                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-keyboard" style="font-size:30px; margin-right: 10px;"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="password" id="contrasenaRepetida" name="contrasenaRepetida" class="form-control" placeholder="Repetir Contraseña" style="height: 50px;" required/>
                          </div>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <button type="submit" class="btn btn-primary btn-lg">Regístrate</button>
                        </div>
      
                      </form>
      
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
      
                      <img src="./images/imgRegiter.jpeg" class="img-fluid" alt="Sample image" style="border-radius: 15px;">
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <?php include './elementosVisuales/footer.php'; ?>


</div>
</body>
</html>
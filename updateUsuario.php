<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/actualiEstilo.css">
    <title>Editar Perfil</title>
    <link rel="shortcut icon" type="image/x-icon" href="./images/titleBarImage.ico">
    <?php 
    
      session_start();

    if (empty($_SESSION['usuarioRegistrado'])) {
        session_destroy();
        header("location: ./index.php");
    }
      
    ?>
</head>
<body>

<?php include './elementosVisuales/header.php'; ?>

<div class="container pt-5 pb-5 bg-light">
  <div class="bg-image h-100">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
          <div class="col-12 col-lg-9 col-xl-8">
            <div class="card" style="border-radius: 1rem;">
              <div class="row g-0">
                <div class="col-md-4 d-none d-md-block">
                  <img
                    src="https://mdbootstrap.com/img/Photos/Others/sidenav2.jpg"
                    alt="login form"
                    class="img-fluid" style="border-top-left-radius: 1rem; border-bottom-left-radius: 1rem;"
                  />
                </div>
                <div class="col-md-8 d-flex align-items-center">
                  <div class="card-body py-5 px-4 p-md-5">

                    <form action="gestionUsuario.php" method="POST">
                      <h4 class="fw-bold mb-4" style="color: #92aad0;">Editar Perfil de Usuario</h4>
                      <p class="mb-4" style="color: #45526e;">Puedes editar tus datos de usuario.</p>
                      <div class="form-outline mb-4">
                        <input type="email" id="form2Example2" class="form-control" name="correito" required/>
                        <label class="form-label" for="form2Example2">Email</label>
                      </div>

                      <div class="form-outline mb-4">
                        <input type="phone" id="form2Example2" class="form-control" name="telef" maxlength="9" required/>
                        <label class="form-label" for="form2Example2">Telefono</label>
                      </div>

                      <div class="form-outline mb-4">
                        <input type="password" id="form2Example2" class="form-control" name="contracontra" required/>
                        <label class="form-label" for="form2Example2">Contraseña Nueva</label>
                      </div>
                      <div>
                      <?php
                            if ($_SESSION['errorCode']==2) {
                              echo "<h5>Email ya en uso.</h5>";
                            }
                          ?>
                      </div>
                      <div class="d-flex justify-content-end pt-1 mb-4">
                        <button class="btn btn-primary btn-rounded" type="submit" style="background-color: #92aad0;">Mandar Datos</button>
                      </div>
                      <hr>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
                          </div>

<?php include './elementosVisuales/footer.php'; ?>

</body>
</html>
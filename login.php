<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlosteBikes-Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php 
    
      session_start();
      
    ?>
</head>
<body>
    <section class="vh-100" style="background-color: #9A616D;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
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
                          <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
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
                        
                        <div class="pt-1 mb-1">
                        <?php
                            if ($_SESSION['errorCode']==1) {
                              echo "<h5>Error de credenciales.</h5>";
                            }elseif ($_SESSION['errorCode']==3) {
                              echo "<h5>Usuario no encontrado.";
                            }
                          ?>
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
        </div>
      </section>
</body>
</html>
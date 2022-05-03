<?php
    session_start();
    if (empty($_SESSION['usuarioRegistrado'])) {
        header("location: ./index.php");
    }else{
      $nombre = $_SESSION['usuarioRegistrado'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="../images/titleBarImage.ico">
    <title>Direccion Pedido</title>
</head>
<body>
    <?php echo "<p style='color: white;'>p</p>";  ?>
    <?php include './elementosVisuales/header.php'; ?>
        <div class="container bg-light p-5">
        <form class="w-75 mx-auto bg-white p-5 rounded" method="POST" action="./resumenPedido.php">
            <div class="form-group mb-2"> <!-- Full Name -->
                <label for="full_name_id" class="control-label">Nombre y Apellidos</label>
                <input type="text" class="form-control" id="full_name_id" name="nombreDir" placeholder="Luis Perales" required>
            </div>    

            <div class="form-group mb-2"> <!-- Street 1 -->
                <label for="street1_id" class="control-label">Dirección</label>
                <input type="text" class="form-control" id="street1_id" name="direccionDir" placeholder="Dirección de entrega" required>
            </div>                     

            <div class="form-group mb-2"> <!-- City-->
                <label for="city_id" class="control-label">Ciudad</label>
                <input type="text" class="form-control" id="city_id" name="ciudadDir" placeholder="Parla" required>
            </div>     

            <div class="form-group mb-2"> <!-- City-->
                <label for="city_id" class="control-label">Comunidad</label>
                <input type="text" class="form-control" id="city_id" name="comunidadDir" placeholder="Madrid" required>
            </div>    

            <div class="form-group mb-2"> <!-- Zip Code-->
                <label for="zip_id" class="control-label">Código Postal</label>
                <input type="text" class="form-control" id="zip_id" name="codigoDir" placeholder="#####" required>
            </div>        

            <div class="form-group mt-5"> <!-- Submit Button -->
                <button class="btn btn-success w-100" type="submit">Resumen Pedido</button>
            </div>     

        </form>
        </div>
    <?php include './elementosVisuales/footer.php'; ?>
</body>
</html>
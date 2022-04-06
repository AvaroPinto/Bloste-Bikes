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
    <link rel="shortcut icon" type="image/x-icon" href="../images/titleBarImage.ico">
    <title>MTB</title>
    <link rel="stylesheet" href="../CSS/estiloProdutos.css">
    <link rel="stylesheet" href="../CSS/botones.css">
</head>
<body>
    <?php echo "<p style='color: white;'>p</p>";  ?>
    <?php
    
    include '../elementosVisuales/header.php'; 

    ?>
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="./vistaBicis.php">Bicicletas</a></li>
                        <li class="breadcrumb-item active" aria-current="page">MTB</li>
                    </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <div class="container" style="background-color: #eee;">
        <h2>Nuestras Bicicletas</h2>
        <div class="container d-flex justify-content-center">
            <form action="./road.php">
                <button class="btnn btn1 m-2">Carretera</button>
            </form>
            <form action="./mtb.php">
                <button class="btnn btn1 m-2">MTB</button>
            </form>
            <form action="./ebike.php">
                <button class="btnn btn1 m-2">E-Bike</button>
            </form>
            <form action="./fixie.php">
                <button class="btnn btn1 m-2">Fixie</button>
            </form>
        </div>
        <div class="row">

            <?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "blostebikes";

            $conexion = new mysqli($servername, $username, $password, $dbname);
            if($seleccion = mysqli_query($conexion, "SELECT * FROM productos WHERE tipoProducto = 'bicicleta' AND categoria='mtb'")){
                while($linea = mysqli_fetch_array($seleccion)){
                    
                    echo "
                        
                            <div class='col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3'>
                                <div class='product'><img src=".$linea['imagen']." alt='' class='rounded'>
                                    <ul class='d-flex align-items-center justify-content-center list-unstyled icons'>
                                        <li class='icon'><span class='fas fa-expand-arrows-alt'></span></li>
                                        <li class='icon mx-3'><span class='far fa-heart'></span></li>
                                        <li class='icon'><span class='fas fa-shopping-bag'></span></li>
                                    </ul>
                                </div>
                                <div class='tag bg-red'>Top Ventas</div>
                                <div id='nombre' class='title pt-4 pb-1'>".$linea['nombreProducto']."</div>
                                <div class='d-flex align-content-center justify-content-center'> <span class='fas fa-star'></span> <span class='fas fa-star'></span> <span class='fas fa-star'></span> <span class='fas fa-star'></span> <span class='fas fa-star'></span> </div>
                                <div class='price'>".number_format($linea['precio'], 2, ',', '.')." €</div>
                            </div>";
                        
                }
            }
            ?>
        </div> 
    </div>
    <?php include '../elementosVisuales/footer.php'; ?>
</body>
</html>
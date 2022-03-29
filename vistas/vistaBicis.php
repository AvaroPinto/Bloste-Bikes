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
    <title>Bicis</title>
    <link rel="stylesheet" href="../CSS/estiloProdutos.css">
    <link rel="stylesheet" href="../CSS/botones.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php echo "<p style='color: white;'>p</p>";  ?>
    <?php include '../elementosVisuales/header.php'; ?>
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Bicicletas</li>
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
        <div class="row" id="panel">

            <?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "blostebikes";

            $conexion = new mysqli($servername, $username, $password, $dbname);
            if($seleccion = mysqli_query($conexion, "SELECT * FROM productos WHERE tipoProducto = 'bicicleta'")){
                while($linea = mysqli_fetch_array($seleccion)){
                    //el href es opcional de momento el del ampliar producto
                    echo "
                        
                            <div class='col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3'>
                                <div class='product'><img src=".$linea['imagen']." alt='' class='rounded'>
                                    <ul class='d-flex align-items-center justify-content-center list-unstyled icons'>
                                        <li class='icon'><span class='fas fa-expand-arrows-alt base' id=".$linea['IDPro']."></span></li>
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
        <div class="row d-none" id="ampliarPro">
            <form method="POST" action="../listaDeseos.php">
                <h1 id="titulo"></h1>
                <div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-5">
            <div class="carousel slide" data-ride="carousel" id="carousel-1">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active"><img class="img-thumbnail w-100 d-block" src="https://i.imgur.com/U46TQz6.jpg" alt="Slide Image" loading="lazy"></div>
                    <div class="carousel-item"><img class="img-thumbnail w-100 d-block" src="https://i.imgur.com/YOWv57X.jpg" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="img-thumbnail w-100 d-block" src="https://i.imgur.com/gLYZpMo.jpg" alt="Slide Image"></div>
                </div>
                <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                <ol class="carousel-indicators">
                    <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-1" data-slide-to="1"></li>
                    <li data-target="#carousel-1" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
        <div class="col-md-7">
            <h4>Macbook air 8GB RAM/ 256GB SSD</h4>
            <div class="price"><span class="mr-2"><i class="fa fa-rupee text-success"></i>&nbsp;59,999</span><span class="mr-2 cut">65,000</span><span class="text-success">25% OFF</span></div>
            <div class="d-flex flex-row">
                <div class="icons mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></div><span>1200 ratings &amp; 564 reviews</span>
            </div>
            <div class="d-flex align-items-center mt-4 offers mb-1"><i class="fa fa-check-square-o mt-1"></i><span class="ml-1 font-weight-bold">Bank Offers</span><span class="ml-1">20% Instant Discount on SBI Credit Cards<br></span></div>
            <div class="d-flex align-items-center offers mb-1"><i class="fa fa-check-square-o mt-1"></i><span class="ml-1 font-weight-bold">Bank Offers</span><span class="ml-1">5% Unlimited Cashback on Axis Bank Credit Card<br></span></div>
            <div class="d-flex align-items-center offers mb-1"><i class="fa fa-check-square-o mt-1"></i><span class="ml-1 font-weight-bold">Bank Offers</span><span class="ml-1">Extra 5% off* with Axis Bank Buzz Credit Card<br></span></div>
            <div class="d-flex align-items-center offers"><i class="fa fa-check-square-o mt-1"></i><span class="ml-1 font-weight-bold">Bank Offers</span><span class="ml-1">20% Instant Discount on pay with&nbsp;&nbsp;google wallet<br></span></div>
            <div class="d-flex align-items-center mt-5 delivery"><i class="fa fa-map-marker"></i><span class="ml-2">Delivery by 23 Jul, Tuesday<br></span><span class="ml-2 mr-2">|<br></span><span class="ml-2 mr-2 text-success">FREE<br></span></div>
            <hr>
            <div class="d-flex align-items-center mt-2"> <label class="radio"> <input type="radio" name="ram" value="128GB" checked> <span>128GB</span> </label> <label class="radio"> <input type="radio" name="ram" value="256GB"> <span>256GB</span> </label> <label class="radio"> <input type="radio" name="ram" value="256GB"> <span>512GB</span> </label> </div>
            <div><span class="font-weight-bold">Seller:</span><span class="ml-2">Sargam Electronics</span></div>
            <div class="mt-3"><button class="btn btn-dark mr-2" type="button">ADD TO CART</button><button class="btn btn-success" type="button">BUY NOW</button></div>
        </div>
    </div>
</div>
                <button type="submit">jeje</button>
            </form>
        </div>
    </div>
    <?php include '../elementosVisuales/footer.php'; ?>
</body>
</html>

<script>
    var botones = document.querySelectorAll(".base");
    var productos = document.getElementById("panel");
    var formProducto = document.getElementById("ampliarPro");
    for (let i = 0; i < botones.length; i++) {
    botones[i].addEventListener("click", function () {
        alert(botones[i].getAttribute('id'));
        productos.classList.add("d-none");
        formProducto.classList.remove("d-none");
        document.getElementById("titulo").innerText=botones[i].getAttribute('id');
    });
}
</script>
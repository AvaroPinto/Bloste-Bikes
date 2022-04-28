<?php
session_start();
$_SESSION['errorCode'] = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../images/titleBarImage.ico">
    <title>Carretera</title>
    <link rel="stylesheet" href="../CSS/estiloProdutos.css">
    <link rel="stylesheet" href="../CSS/botones.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        #luces:hover {
            color: white;
        }
    </style>
</head>

<body>
    <?php echo "<p style='color: white;'>p</p>";  ?>
    <?php include '../elementosVisuales/header.php'; ?>
    <section style="background-color: #eee;" id="migotes">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="./vistaBicis.php">Bicicletas</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Ebike</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <div class="container" style="background-color: #eee;">
        <h2 id="titulao">Nuestras Bicicletas</h2>
        <div id="categoriasBici" class="container d-flex justify-content-center">
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
            if ($seleccion = mysqli_query($conexion, "SELECT * FROM productos WHERE tipoProducto = 'bicicleta' AND categoria='ebike'")) {
                while ($linea = mysqli_fetch_array($seleccion)) {
                    //el href es opcional de momento el del ampliar producto
                    echo "
                        
                            <div class='col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3'>
                                <div class='product'><img src=" . $linea['imagen'] . " alt='' class='rounded'>
                                    <ul class='d-flex align-items-center justify-content-center list-unstyled icons'>
                                        <li class='icon'><span class='fas fa-expand-arrows-alt base' id='" . $linea['nombreProducto'] . "'></span></li>
                                        <form method='POST' action='../gestionDeseos.php'>
                                            <input name='numId' type='hidden' value=" . $linea['IDPro'] . ">
                                            <li class='icon mx-3'><button id='luces' style='border:none; opacity:0,0; border-radius:50%; height:50px; width:50px;' class='far fa-heart bg-transparent' type='submit'></button></li>
                                        </form>
                                        <form method='POST' action='../anadirLista.php'>
                                            <input name='toCarro' type='hidden' value=" . $linea['IDPro'] . ">
                                            <li class='icon'><button id='luces' style='border:none; opacity:0,0; border-radius:50%; height:50px; width:50px;' class='fas fa-shopping-bag bg-transparent' type='submit'></button></li>
                                        </form>
                                    </ul>
                                </div>
                                <div class='tag bg-red'>Top Ventas</div>
                                <div class='title pt-4 pb-1'>" . $linea['nombreProducto'] . "</div>
                                <div id='" . $linea['descripcion'] . "' class='title pt-4 pb-1 d-none descBase'>" . $linea['descripcion'] . "</div>
                                <div id='" . $linea['imagen'] . "' class='title pt-4 pb-1 d-none imgBase'>" . $linea['imagen'] . "</div>
                                <div id='" . $linea['IDPro'] . "' class='title pt-4 pb-1 d-none IDBase'>" . $linea['IDPro'] . "</div>
                                <div id='" . number_format($linea['precio'], 2, ',', '.') . "' class='title pt-4 pb-1 d-none precioBase'>" . number_format($linea['precio'], 2, ',', '.') . "</div>
                                <div class='d-flex align-content-center justify-content-center'> <span class='fas fa-star'></span> <span class='fas fa-star'></span> <span class='fas fa-star'></span> <span class='fas fa-star'></span> <span class='fas fa-star'></span> </div>
                                <div class='price'>" . number_format($linea['precio'], 2, ',', '.') . " €</div>
                            </div>";
                }
            }
            ?>
        </div>
        <div class="row d-none" id="ampliarPro">
            <section style="background-color: #eee;">
                <div class="container py-5">
                    <div class="row">
                        <div class="col">
                            <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="./vistaBicis.php">Bicicletas</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="./ebike.php">E-Bike</a></li>
                                    <li id="miguitas" class="breadcrumb-item active" aria-current="page"></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-md-5">
                        <div class="container">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active"><img id="pictograma" class="img-thumbnail w-100 d-block" src="" alt="Slide Image" loading="lazy"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h4 id="titulo"></h4>
                        <div class="price"><span class="mr-2" id="dineros"></span><span class="text-success">Nuevas Unidades</span></div>
                        <div class="d-flex flex-row">
                            <div class="icons mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></div><span>Bicicleta Pepino</span>
                        </div>
                        <div class="d-flex align-items-center mt-4 offers mb-1"><span class="ml-1 font-weight-bold" id="descFinal"></span></div>
                        <hr>
                        <div class="d-flex align-items-center mt-2"> <label class="radio"> <input type="radio" name="ram" value="128GB" checked> <span>S&nbsp;</span> </label> <label class="radio"> <input type="radio" name="ram" value="256GB"> <span>M&nbsp;</span> </label> <label class="radio"> <input type="radio" name="ram" value="256GB"> <span>L&nbsp;</span> </label> </div>
                        <div><span class="font-weight-bold">Vendedor: </span><span class="ml-2">Industrias Paloma</span></div>
                        <div class="mt-3">
                            <form method="POST" action="../anadirLista.php" style="float: left;">
                                <input id="numId" name="toCarro" type="hidden" value="">
                                <button class="btn btn-dark m-1" type="submit">Añadir Carrito</button>
                            </form>
                            <form method="POST" action="../gestionDeseos.php" style="float: left;">
                                <input id="prodId" name="prodId" type="hidden" value="">
                                <input id="descId" name="descId" type="hidden" value="">
                                <input id="numIdt" name="numId" type="hidden" value="">
                                <button class="btn btn-success m-1" type="submit">Lista Deseos</button>
                            </form>
                            <button id="regreso" class="btn btn-info m-1" style="color: white;" type="button">VOLVER</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include '../elementosVisuales/footer.php'; ?>
</body>

</html>

<script>
    var volver = document.getElementById("regreso");
    var botones = document.querySelectorAll(".base");
    var descripciones = document.querySelectorAll(".descBase");
    var imagenes = document.querySelectorAll(".imgBase");
    var identificadores = document.querySelectorAll(".IDBase");
    var precios = document.querySelectorAll(".precioBase");
    var productos = document.getElementById("panel");
    var tarjetas = document.getElementById("categoriasBici");
    var titulacion = document.getElementById("titulao");
    var migajas = document.getElementById("migotes");
    var formProducto = document.getElementById("ampliarPro");
    for (let i = 0; i < botones.length; i++) {
        botones[i].addEventListener("click", function() {
            //alert(botones[i].getAttribute('id'));
            productos.classList.add("d-none");
            formProducto.classList.remove("d-none");
            tarjetas.classList.add("d-none");
            titulacion.classList.add("d-none");
            migajas.classList.add("d-none");
            document.getElementById("titulo").innerText = botones[i].getAttribute("id");
            document.getElementById("descFinal").innerText = descripciones[i].getAttribute("id");
            document.getElementById("pictograma").src = imagenes[i].getAttribute("id");
            document.getElementById("dineros").innerText = precios[i].getAttribute("id") + "€ ";
            document.getElementById("miguitas").innerText = botones[i].getAttribute("id");
            document.getElementById("prodId").value = botones[i].getAttribute("id");
            document.getElementById("numId").value = identificadores[i].getAttribute("id");
            document.getElementById("numIdt").value = identificadores[i].getAttribute("id");
            document.getElementById("descId").value = descripciones[i].getAttribute("id");
        });
        volver.addEventListener("click", function() {
            productos.classList.remove("d-none");
            formProducto.classList.add("d-none");
            tarjetas.classList.remove("d-none");
            titulacion.classList.remove("d-none");
            migajas.classList.remove("d-none");
        });
    }
</script>
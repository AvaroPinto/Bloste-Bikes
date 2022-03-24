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
            <form>
                <button class="btnn btn1 m-2">Carretera</button>
                <button class="btnn btn1 m-2">MTB</button>
                <button class="btnn btn1 m-2">E-Bike</button>
                <button class="btnn btn1 m-2">Fixie</button>
            </form>
        </div>
        
        <div class="row">
            <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
                <div class="product"> <img src="../images/productos/trekEjemplo.jpeg" alt="" class="rounded">
                    <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                        <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                        <li class="icon mx-3"><span class="far fa-heart"></span></li>
                        <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                    </ul>
                </div>
                <div class="tag bg-red">Best Selling</div>
                <div class="title pt-4 pb-1">Winter Check Shirt & Jacket</div>
                <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
                <div class="price">₹ 2000.0</div>
            </div>
            <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
                <div class="product"> <img src="../images/productos/trekEjemplo.jpeg" alt="" class="rounded">
                    <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                        <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                        <li class="icon mx-3"><span class="far fa-heart"></span></li>
                        <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                    </ul>
                </div>
                <div class="tag bg-warning">out of stock</div>
                <div class="title pt-4 pb-1">Yellow Skirt</div>
                <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
                <div class="price">₹ 4000.0</div>
            </div>
            <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
                <div class="product"> <img src="../images/productos/trekEjemplo.jpeg" alt="" class="rounded">
                    <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                        <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                        <li class="icon mx-3"><span class="far fa-heart"></span></li>
                        <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                    </ul>
                </div>
                <div class="tag bg-green">latest</div>
                <div class="title pt-4 pb-1"> White shirt & White short</div>
                <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
                <div class="price">₹ 5000.0</div>
            </div>
            <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
                <div class="product"> <img src="../images/productos/trekEjemplo.jpeg" alt="" class="rounded">
                    <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                        <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                        <li class="icon mx-3"><span class="far fa-heart"></span></li>
                        <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                    </ul>
                </div>
                <div class="title pt-4 pb-1">Men Shorts</div>
                <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
                <div class="price">₹ 1000.0</div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
                <div class="product"> <img src="../images/productos/trekEjemplo.jpeg" alt="" class="rounded">
                    <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                        <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                        <li class="icon mx-3"><span class="far fa-heart"></span></li>
                        <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                    </ul>
                </div>
                <div class="tag bg-red">Best Selling</div>
                <div class="title pt-4 pb-1">Denim Jumpsuit</div>
                <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
                <div class="price">₹ 3000.0</div>
            </div>
            <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
                <div class="product"> <img src="../images/productos/trekEjemplo.jpeg" alt="" class="rounded">
                    <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                        <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                        <li class="icon mx-3"><span class="far fa-heart"></span></li>
                        <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                    </ul>
                </div>
                <div class="tag bg-warning">out of stock</div>
                <div class="title pt-4 pb-1">Sexy Denim Shorts</div>
                <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
                <div class="price">₹ 5000.00</div>
            </div>
            <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
                <div class="product"> <img src="../images/productos/trekEjemplo.jpeg" alt="red dress" class="rounded">
                    <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                        <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                        <li class="icon mx-3"><span class="far fa-heart"></span></li>
                        <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                    </ul>
                </div>
                <div class="title pt-4 pb-1"> Princess Red Dress</div>
                <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
                <div class="price">₹ 10000.00</div>
            </div>
            <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
                <div class="product"> <img src="../images/productos/trekEjemplo.jpeg" alt="" class="rounded">
                    <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                        <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                        <li class="icon mx-3"><span class="far fa-heart"></span></li>
                        <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                    </ul>
                </div>
                <div class="tag bg-green">new</div>
                <div class="title pt-4 pb-1">White sandel</div>
                <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
                <div class="price">₹ 2000</div>
            </div>
            <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
                <div class="product"> <img src="../images/productos/trekEjemplo.jpeg" alt="" class="rounded">
                    <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                        <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                        <li class="icon mx-3"><span class="far fa-heart"></span></li>
                        <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                    </ul>
                </div>
                <div class="tag bg-green">new</div>
                <div class="title pt-4 pb-1">White sandel</div>
                <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
                <div class="price">₹ 2000</div>
            </div>
        </div>
    </div>
    <?php include '../elementosVisuales/footer.php'; ?>    
</body>
</html>
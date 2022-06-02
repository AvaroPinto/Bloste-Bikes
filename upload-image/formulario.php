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
    <title>Admin-Users</title>
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
    <?php include '../elementosVisuales/navAdmin.php'; ?>
    <h1>Inserción Productos</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleFormControlInput1">Nombre Producto</label>
            <input type="text" class="form-control" name="nameInsert" placeholder="Trek Pro Xaliber 9.8">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Categoría</label>
            <select class="form-control" id="exampleFormControlSelect1" name="seleccionCat">
                <option value="componentes">Componentes</option>
                <option value="productos">Bicicletas</option>
                <option value="equipacion">Equipaciones</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Imagen</label><br>
            <input type="file" name="my_image">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descripción</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Inserte una descripción del producto" name="descInsert"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Precio</label>
            <input type="number" class="form-control" name="precioInsert" placeholder="100€">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Marca</label>
            <input type="text" class="form-control" name="brandInsert" placeholder="Trek, Orbea, Merida...">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Sección</label>
            <select class="form-control" id="exampleFormControlSelect1" name="seccionInsert">
                <option value="road">Carretera</option>
                <option value="mtb">MTB</option>
                <option value="fixie">Fixie</option>
                <option value="ebike">E-Bike</option>
            </select>
        </div>
        <br>
        <input type="submit" name="submit" value="Insertar" class="btn btn-secondary w-100">
    </form>
    <br>
    <?php include '../elementosVisuales/footer.php'; ?>
</body>

</html>
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
    <h1>Administrar Compras</h1>
    <table class="table w-100 justify-content-center">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID-Venta</th>
                <th scope="col">Usuario</th>
                <th scope="col">Direccion</th>
                <th scope="col">Importe</th>
                <th scope="col">Factura</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "blostebikes";

            $conexion = new mysqli($servername, $username, $password, $dbname);
            if ($seleccion = mysqli_query($conexion, "SELECT * FROM pedidos")) {
                while ($linea = mysqli_fetch_array($seleccion)) {
                    echo "<tr>
                            <th scope='row'>" . $linea['IDPedido'] . "</th>
                            <td>" . $linea['nombreCli'] . "</td>
                            <td>" . $linea['direccionCli'] . "</td>
                            <td>" . number_format($linea['Importe'], 2, ',', '.') . "€</td>
                            <td>
                                <form method='POST' action='../factura.php'>
                                    <input id='facturitis' name='numeroPedidoFactura' type='hidden' value='" . $linea['IDPedido'] . "'>
                                    <input id='facturitistra' name='precioPedidoFactura' type='hidden' value='" . $linea['Importe'] . "'>
                                    <button class='btn btn-primary' href='updateUsuario.php' role='button' type='submit'>Descargar  <i class='far fa-file-alt'></i></button>
                                </form>
                            </td>";
                }
            }
            ?>
        </tbody>
    </table>
    <?php include '../elementosVisuales/footer.php'; ?>
</body>

</html>
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
    <h1>Administrar Usuarios</h1>
    <table class="table w-100 justify-content-center">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Usuario</th>
                <th scope="col">Correo</th>
                <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "blostebikes";

            $conexion = new mysqli($servername, $username, $password, $dbname);
            if ($seleccion = mysqli_query($conexion, "SELECT * FROM usuarios")) {
                while ($linea = mysqli_fetch_array($seleccion)) {
                    echo "<tr>
                            <th scope='row'>" . $linea['ID'] . "</th>
                            <td>" . $linea['nombreUsuario'] . "</td>
                            <td>" . $linea['correo'] . "</td>";
                    if ($linea['administrador'] == 1) {
                        echo "<td><button class='btn btn-primary' type='submit'>Administrador</button></td>";
                    } else {
                        echo "<td>
                                <form method='POST' action='../deleteAdmin.php'>
                                    <input name='identificacion' type='hidden' value=" . $linea['ID'] . ">
                                    <button class='btn btn-danger' type='submit'>Eliminar</button>
                                </form>
                            </td>
                        </tr>";
                    }
                }
            }
            ?>
        </tbody>
    </table>
    <?php include '../elementosVisuales/footer.php'; ?>
</body>

</html>
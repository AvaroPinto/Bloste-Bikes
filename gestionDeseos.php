<?php

    //ya tenemos el ID del producto para gestionar la lista de deseos.
    session_start();
    $nombre = $_SESSION['usuarioRegistrado'];
    $producto = $_REQUEST['numId'];

    //cosas de la BBDD
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blostebikes";

    $conexion = new mysqli($servername, $username, $password, $dbname);

    if($seleccion = mysqli_query($conexion, "SELECT * FROM productos WHERE IDPro = '$producto'")){
        while($linea = mysqli_fetch_array($seleccion)){
            $precio=$linea['precio'];
            $marca=$linea['marca'];
            $imagen=$linea['imagen'];
            $nombreProd=$linea['nombreProducto'];
            $categoria=$linea['categoria'];
            //insercion en la tabla de deseos para listar en la lista del usuario.
            mysqli_query($conexion, "INSERT INTO listaDeseos (usuario, IDProducto, MarcaProducto, PrecioProducto, imagen, nombrePro, categoria) VALUES ('$nombre', '$producto', '$marca', '$precio', '$imagen', '$nombreProd', '$categoria')");
            header("location: ./listaDeseos.php");
        }
    }

?>
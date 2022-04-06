<?php
    session_start();
    $eliminacion=$_REQUEST['toEliminar'];
    $usuario=$_SESSION['usuarioRegistrado'];

    //cosas de la BBDD
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blostebikes";

    $total=0;
    $totalProductos=0;

    $conexion = new mysqli($servername, $username, $password, $dbname);
    mysqli_query($conexion, "DELETE FROM carrito WHERE usuario = '$usuario' AND IDProducto='$eliminacion'");
    header("location: ./carrito.php");

?>
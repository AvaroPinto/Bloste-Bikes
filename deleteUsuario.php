<?php

    session_start();

    $usuario=$_SESSION['usuarioRegistrado'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blostebikes";
    
    $conexion = new mysqli($servername, $username, $password, $dbname);
    $seleccion = mysqli_query($conexion, "DELETE FROM usuarios WHERE nombreUsuario = '$usuario'");
    session_destroy();
    header("location: ../index.php");

?>
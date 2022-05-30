<?php

    session_start();

    $ident = $_REQUEST['identificacion'];
echo $ident;
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blostebikes";
    
    $conexion = new mysqli($servername, $username, $password, $dbname);
    $seleccion = mysqli_query($conexion, "DELETE FROM usuarios WHERE ID = '$ident'");
    header("location: ../vistas/adminUser.php");

?>
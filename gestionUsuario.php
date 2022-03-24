<?php

session_start();

$nombre=$_SESSION['usuarioRegistrado'];

$correo=$_REQUEST['correito'];
$contra=$_REQUEST['contracontra'];
$tele=$_REQUEST['telef'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blostebikes";

$conexion = new mysqli($servername, $username, $password, $dbname);
$seleccion = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");

if($registro = mysqli_fetch_array($seleccion)) {
    echo "encontrado";
    $_SESSION['errorCode']=2;
    header("location: ../updateUsuario.php");
}else{
    echo "no encontrado";
    mysqli_query($conexion, "UPDATE usuarios SET correo='$correo', contrasena='$contra', telefono='$tele' WHERE nombreUsuario='$nombre'");
    header("location: ../perfilUsuario.php");
}

?>
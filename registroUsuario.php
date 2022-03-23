<?php
/**
 * codigo de error 0 ningun problema
 * codigo de error 1 no coinciden las contraseñas
 * codigo de error 2 el usuario ya existe
 * codigo de error 3 usuario no encontrado
 */
session_start();
$_SESSION['errorCode']  = 0;

$user=$_REQUEST['nombreUsuario'];
$email=$_REQUEST['emailUsuario'];
$contrasena=$_REQUEST['contrasenaUsuario'];
$repetida=$_REQUEST['contrasenaRepetida'];
$telefono=$_REQUEST['telUsuario'];


//cosas de la BBDD
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blostebikes";

$conexion = new mysqli($servername, $username, $password, $dbname);
$seleccion = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombreUsuario = '$user' OR correo = '$email'");

if($registro = mysqli_fetch_assoc($seleccion)) {
    if ($contrasena===$repetida) {
        //echo "<h1>El usuario o el Email ya estan registrados.</h1>";
        $_SESSION['errorCode']=2;
        header("location: ../registro.php");
    }else{
        //echo "<h1>Parece que las contraseñas no coinciden. Prueba de nuevo.</h1>";
        $_SESSION['errorCode']=1;
        header("location: ../registro.php");
    }
} else {
    if ($contrasena===$repetida) {
        //echo "<h1>Usuario registrado correctamente.</h1>";
        $_SESSION['usuarioRegistrado']=$user;
        mysqli_query($conexion, "INSERT INTO usuarios (nombreUsuario, correo, contrasena,telefono) VALUES ('$user', '$email', '$contrasena', '$telefono')");
        header("location: ../index.php");
    }else{
        //echo "<h1>Parece que las contraseñas no coinciden. Prueba de nuevo.</h1>";
        $_SESSION['errorCode']=1;
        header("location: ../registro.php");
    }
}

//quitamos la seleccion de la base de datos
$seleccion->close();
?>
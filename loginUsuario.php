<?php
/**
 * codigo de error 0 ningun problema
 * codigo de error 1 no coinciden las contraseñas
 * codigo de error 2 el usuario ya existe
 * codigo de error 3 usuario no encontrado
 */
session_start();

$email = $_REQUEST['correo'];
$contrasenia = $_REQUEST['contrasena'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blostebikes";

$conexion = new mysqli($servername, $username, $password, $dbname);
$seleccion = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$email'");

if($registro = mysqli_fetch_array($seleccion)) {
    echo "usuario encontrado<br>";
    if ($contrasenia===$registro['contrasena']) {
        echo "todo en orden";
        $_SESSION['usuarioRegistrado']=$registro['nombreUsuario'];
        header("location: ../index.php");
    }else{
        echo "no coinciden las contras";
        $_SESSION['errorCode']=1;
        header("location: ../login.php");
    }
}else{
    echo "usuario no encontrado";
    $_SESSION['errorCode']=3;
    header("location: ../login.php");
}

?>
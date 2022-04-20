<?php
    session_start();
    if (empty($_SESSION['usuarioRegistrado'])) {
        header("location: ./login.php");
    }else{
        //ya tenemos el ID del producto para gestionar la lista de deseos.
        $nombre = $_SESSION['usuarioRegistrado'];
        $producto = $_REQUEST['toCarro'];
        echo $producto;
    
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
                if($comprobar = mysqli_query($conexion, "SELECT * FROM carrito WHERE IDProducto = '$producto' AND usuario='$nombre'")){
                    $tuplas=mysqli_num_rows($comprobar);
                    if ($tuplas>0) {
                        //si encontramos el articulo ya en el carrito lo que hacemos es eliminarlo de la tabla de deseos.
                        mysqli_query($conexion, "DELETE FROM listaDeseos WHERE usuario = '$nombre' AND IDProducto='$producto'");
                        header("location: ./carrito.php");
                    }else{
                        //si no lo encontramos, se hace la insercion en la tabla de carrito y eliminamos el articulo de la tabla deseos
                        mysqli_query($conexion, "INSERT INTO carrito (usuario, IDProducto, MarcaProducto, PrecioProducto, imagen, nombreProducto, categoria) VALUES ('$nombre', '$producto', '$marca', '$precio', '$imagen', '$nombreProd', '$categoria')");
                        header("location: ./carrito.php");
                        mysqli_query($conexion, "DELETE FROM listaDeseos WHERE usuario = '$nombre' AND IDProducto='$producto'");
                    }
                }
                //insercion en la tabla de deseos para listar en la lista del usuario.
            }
        }
    }
        
?>
<?php
    session_start();
    if (empty($_SESSION['usuarioRegistrado'])) {
        header("location: ./index.php");
    }else{
        $nombre = $_SESSION['usuarioRegistrado'];
    }

    $nombreFinal = $_REQUEST['nomJeje'];
    $direccionFinal = $_REQUEST['dirJeje'];
    $importeFinal = $_REQUEST['totalJeje'];
    $ultimoPedido = "";

    //cosas de la BBDD
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blostebikes";

    $total=0;
    $totalProductos=0;

    $conexion = new mysqli($servername, $username, $password, $dbname);

    $sql = "INSERT INTO pedidos (usuario, nombreCli, fecha, direccionCli, Importe) VALUES ('$nombre', '$nombreFinal', now(), '$direccionFinal', '$importeFinal')";

    //insercion en la base de datos del pedido

    if ($conexion->query($sql) === TRUE) {
        $ultimoPedido = $conexion->insert_id;
        //echo "New record created successfully. Last inserted ID is: " . $ultimoPedido;
    }

    //metemos los articulos en la base de datos de ventas del pedido insertado anteriormente
    if($seleccion = mysqli_query($conexion, "SELECT * FROM carrito WHERE usuario = '$nombre'")){
        while($linea = mysqli_fetch_array($seleccion)){
            echo "articulo<br>";
            $idPro= $linea['IDProducto'];
            $nomPro= $linea['nombreProducto'];
            $precPro= $linea['PrecioProducto'];
            $catePro = $linea['categoria'];
            $marcPro = $linea['MarcaProducto'];
            mysqli_query($conexion, "INSERT INTO ventas (IDPedido, IDProducto, Producto, Precio, Categoria, Marca) VALUES ('$ultimoPedido', '$idPro', '$nomPro', '$precPro', '$catePro', '$marcPro')");
        }
    }

    //hacemos el DELETE de los articulos del carrito para dejarlo vacio y hacemos la redireccion
    mysqli_query($conexion, "DELETE FROM carrito WHERE usuario = '$nombre'");
    header("location: ./perfilUsuario.php");
     
?>
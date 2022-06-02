<?php

$seleccion = $_REQUEST['seleccionCat'];
$nombreInsertar = $_REQUEST['nameInsert'];
$descInsertar = $_REQUEST['descInsert'];
$precioInsertar = $_REQUEST['precioInsert'];
$marcaInsertar = $_REQUEST['brandInsert'];
$seccInsertar = $_REQUEST['seccionInsert'];


if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
    echo "<pre>";
    print_r($_FILES['my_image']);
    echo "</prev>";

    $image_name= $_FILES['my_image']['name'];
    $image_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

if($error === 0){
    if($image_size > 125000){
        $em = "imagen demasiado grande!";
        header("location: formulario.php?error=$em");
    }else{
        $image_ex=pathinfo($image_name, PATHINFO_EXTENSION);
        $image_ex_lc=strtolower($image_ex);

        $allowed_exs=array("jpg", "jpeg", "png");

        if(in_array($image_ex_lc, $allowed_exs)){
            $new_image_name = uniqid("IMG-", true).'.'.$image_ex_lc;
            $image_upload_path = '../images/'.$seleccion.'/'.$new_image_name;
            move_uploaded_file($tmp_name, $image_upload_path);
        }else{
            $em = "no se pueden archivos de este tipo!";
            header("location: formulario.php?error=$em");
        }

    }
}else{
    $em = "error desconocido ocurrido!";
    header("location: formulario.php?error=$em");
}

}else{
    header("location: formulario.php");
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blostebikes";

if($seleccion=="productos"){
    $seleccion="bicicleta";
}

$conexion = new mysqli($servername, $username, $password, $dbname);
mysqli_query($conexion, "INSERT INTO productos (nombreProducto, descripcion, precio, imagen, tipoProducto, marca, categoria) VALUES ('$nombreInsertar', '$descInsertar', '$precioInsertar', '$image_upload_path', '$seleccion', '$marcaInsertar', '$seccInsertar')");

//mysqli_query($conexion, "INSERT INTO productos (nombreProducto, descripcion, precio, imagen, tipoProducto, marca, categoria) VALUES ('test', 'test', 500, '$image_upload_path', '$seleccion', 'test', 'test')");

header("location: formulario.php");

?>
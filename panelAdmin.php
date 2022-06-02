<?php
session_start();
if (empty($_SESSION['usuarioRegistrado'])) {
    session_destroy();
    header("location: ./index.php");
} else {
    $nombre = $_SESSION['usuarioRegistrado'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="./images/titleBarImage.ico">
    <script src="https://kit.fontawesome.com/b04f9330e3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./CSS/style.css" />
    <link rel="stylesheet" href="./CSS/tarjetas.css" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <?php echo "<p style='color: white;'>p</p>";  ?>
    <?php include './elementosVisuales/navAdmin.php'; ?>
    <h1>Admin</h1>
    <?php include './elementosVisuales/footer.php'; ?>
</body>

</html>
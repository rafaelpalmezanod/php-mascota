<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="img\Logo veterinaria pet shop rustico blanco y negro.png">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>    
<?php
    session_start();
    if(isset($_POST['actualizar'])) {
        include_once __DIR__ ."/process/actualizar_vacuna.php";
        (new Actualizar_vacuna)->actualizarvacuna($_SESSION["idVacuna"]);
    }
    include_once __DIR__ ."/consultar/update.vacuna.php";
    if(isset($_SESSION["idVacuna"])) {
        $vacuna = (new Update) -> readUser($_SESSION["idVacuna"]);
        $dataUser = mysqli_fetch_array($vacuna);
    }

?>
<form  method="post">
    <img src="img\Logo veterinaria pet shop rustico blanco y negro.png" alt="">
    <h1>ACTUALIZAR</h1>
    <input type="text" placeholder="Nombre" name="nombre" value="<?php echo($dataUser['nombre']) ?>">
    <input type="submit" name="actualizar" class="btn" value="Actualizar" >
</form>

</body>
</html>
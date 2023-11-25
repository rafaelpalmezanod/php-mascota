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
        (new actualizar_Macota )->actualizarMascota($_SESSION["$mascota"]);
    }
    include_once __DIR__ ."/consultar/update.mascota.php";
    if(isset($_SESSION["idmascota"])) {
        $mascota = (new Update) -> readMascota($_SESSION["$mascota"]);
        $dataMacota = mysqli_fetch_array($mascota);
    }

?>
<form  method="post">
    <img src="img\Logo veterinaria pet shop rustico blanco y negro.png" alt="">
    <h1>ACTUALIZAR MASCOTA</h1>
    <input type="text" placeholder="Nombre" name="nombre" value="<?php echo($dataMacota['nombre']) ?>">
    <input type="text" placeholder="Tipomascota" name="tipomascota" value="<?php echo($dataMacota['TipoMascota_id']) ?>">
    <input type="text" placeholder="Raza" name="raza" value="<?php echo($dataMacota['raza_id']) ?>">
    <input type="submit" name="actualizar" class="btn" value="Actualizar" >
</form>

</body>
</html>
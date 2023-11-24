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
        echo('ACtualiza perro');
        include_once __DIR__ ."./process\acualizar_usurio.php";
        (new actualizar_Usuario)->actualizarUsuario($_SESSION["idUser"]);
    }
    include_once __DIR__ ."/consultar/update.php";
    if(isset($_SESSION["idUser"])) {
        $user = (new Update) -> readUser($_SESSION["idUser"]);
        $dataUser = mysqli_fetch_array($user);
    }

?>
<form  method="post">
    <img src="img\Logo veterinaria pet shop rustico blanco y negro.png" alt="">
    <h1>ACTUALIZAR</h1>
    <input type="text" placeholder="Nombre" name="nombre" value="<?php echo($dataUser['nombre']) ?>">
    <input type="text" placeholder="Email" name="email" value="<?php echo($dataUser['email']) ?>">
    <input type="text" placeholder="Username" name="username" value="<?php echo($dataUser['username']) ?>">
    <input type="submit" name="actualizar" class="btn" value="Actualizar" >
    <?php 
        if(isset($_POST['actualizar'])) {
            header("location:formulario.php");
        }
    ?>
</form>

</body>
</html>

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
<form  method="post" action="..">
    <?php
    include_once __DIR__ ."./process\acualizar_usurio.php";
    (new actualizar_Usuario)->actualizarUsuario();
    ?>
    <img src="img\Logo veterinaria pet shop rustico blanco y negro.png" alt="">
    <h1>ACTUALIZAR</h1>
    <input type="text" placeholder="Nombre" name="nombre" >
    <input type="text" placeholder="Email" name="email" >
    <input type="text" placeholder="Username" name="username" >
    <input type="password" placeholder="Password" name="password" >
    <input type="submit" name="actualizar" class="btn" value="ACTUALIZAR" >
</form>

</body>
</html>

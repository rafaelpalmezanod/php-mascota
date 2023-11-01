<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<form  method="post" action="">
    <h1>REGISTRARSE</h1>
    <input type="text" placeholder="Nombre" name="nombre" required>
    <input type="text" placeholder="Email" name="email" required>
    <input type="text" placeholder="Username" name="username" required>
    <input type="password" placeholder="Password" name="password" required>
    <input type="submit" name="ingresar" class="btn" value="Iniciar Sesion" required>
</form>
<?php
    include_once __DIR__ ."/process/registro_usuario.php";
    (new RegistroUsuario)->validarRegistro();
?>
</body>
</html>

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
    <?php
    include_once __DIR__ ."/process/registro_usuario.php";
    (new RegistroUsuario)->validarRegistro();
    ?>
    <h1>REGISTRARSE</h1>
    <input type="text" placeholder="Nombre" name="nombre" >
    <input type="text" placeholder="Email" name="email" >
    <input type="text" placeholder="Username" name="username" >
    <input type="password" placeholder="Password" name="password" >
    <input type="submit" name="ingresar" class="btn" value="Registrame" >
    <input type="submit" name="login" class="btn" value="Iniciar Sesion">
</form>

</body>
</html>

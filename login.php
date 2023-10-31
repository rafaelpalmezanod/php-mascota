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
    <h1>LOGIN</h1>
    <label for="username">Username</label>
    <input name="user" type=" text" id="username">

    <label for="password">Password</label>
    <input name="password" type=" password" id="password" required>

    <div class="remember">
        <p>Recordar</p>
        <p>Olvide Contraseña</p>
    </div>

    <input type="submint" name="ingresar" class="btn" value="Iniciar Sesion">

    <?php
    include("controlador.php");
    include("conexion.php");
    ?>
    </form>
   

</body>
</html>
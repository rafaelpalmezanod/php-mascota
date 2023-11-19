<!DOCTYPE html>
<html lang="en">
<?php
    require_once(__DIR__."/conexion.php");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="img\Logo veterinaria pet shop rustico blanco y negro.png">
    <link rel="stylesheet" href="css\login.css">
</head>
<body>
    <form  method="post" action="">
    <img src="./img/Logo veterinaria pet shop rustico blanco y negro.png" alt="">
        <?php
            require_once(__DIR__."/process/login_usuario.php");
            echo (new Login_usuario)-> validarLogin();
        ?>
    <h1>LOGIN</h1>
    <label for="username">Username</label>
    <input name="username" type=" text" id="username" required>

    <label for="password">Password</label>
    <input name="password" type="password" id="password" required>

    <div class="remember">
        <p>Recordar</p>
        <p>Olvide Contraseña</p>
    </div>

    <input type="submit" name="ingresar" class="btn" value="Iniciar Sesion">
    <a href="registro.php" class="btn" value="">Registro</a>
    </form>
   

</body>
</html>
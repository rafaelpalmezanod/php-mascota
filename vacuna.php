<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="img\Logo veterinaria pet shop rustico blanco y negro.png">
    <link rel="stylesheet" href="css\registro.css">
</head>
<body>
<form  method="post" action="">
    <img src="./img/Logo veterinaria pet shop rustico blanco y negro.png" alt="">
    <?php
    include_once __DIR__ ."../process/registro_vacunas.php";
    (new RegistroVacunas) -> validarRegistro();
    ?>
    <h1>INGRESAR VACUNA</h1>
    <input type="text" placeholder="Nombre Vacuna" name="nombre" >
    <input type="submit" name="ingresar" class="btn" value="Ingresar" >
    
</form>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Mascota</title>
    <link rel="icon" href="img\Logo veterinaria pet shop rustico blanco y negro.png">
    <link rel="stylesheet" href="css\ingresarmascota.css">
</head>
<body>
<form  method="post" action="">
    <img src="./img/Logo veterinaria pet shop rustico blanco y negro.png" alt="">
    <h1>REGISTRO MASCOTA</h1>
    <input type="text" placeholder="Nombre" name="nombre" >
    <input type="date" placeholder="Email" name="fechanacimieno" >
    <input type="text" placeholder="Username" name="username" >
    <input type="text" placeholder="tipomascota" name="tipomascota" >
    <select name="tipomascota" id="">
        <option value=""></option>
        <option value="1">Gato</option>
        <option value="2">Perro</option>
        <option value="3">Pez</option>

    </select>

    <input type="text" placeholder="raza" name="raza
    " >

    <input type="submit" name="ingresar" class="btn" value="Registrame" >
</form>
    
</body>
</html>
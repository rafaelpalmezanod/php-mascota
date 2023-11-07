<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img\Logo veterinaria pet shop rustico blanco y negro.png">
    <link rel="stylesheet" href="css\inicio.css">
    <title>Document</title>
</head>
<body>
    <?php
     session_start();
      if(isset($_SESSION["username"]) and !empty($_SESSION["username"])){
    ?>
<main>
|<img src="img\Logo veterinaria pet shop rustico blanco y negro.png" alt="">
 <div><h1>BIENVENIDO <br>CUIDAMOS A TUS PELUDOS </h1></div>
<input type="submit" name="ingresar" class="btn" value="Ingresar Mascota">
<input type="submit" name="control" class="btn" value="Control Vacuna">
</main>
<?php
    }else{header("location:login.php");}
?>

</body>
</html>
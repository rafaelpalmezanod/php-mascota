<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img\Logo veterinaria pet shop rustico blanco y negro.png">
    <title>Document</title>
    <link rel="stylesheet" href="css\formulario.css">
</head>
<body>
<div class="container">
    <h1>Dashboard de vacunas</h1>
  <?php
  require_once(__DIR__ ."../controller/vacuna.controles.php");
  $vacunas = (new Vacunacontrol)-> read();

  if (isset($_POST["borrar"] )){ 
    (new Eliminarusuario)-> delearUsuario($_POST['borra']);
  }elseif (isset($_POST["editar"])){
    session_start();
    $_SESSION["idVacuna"] = $_POST["editar"];
    header('location:update.vacuna.php');
  }
  ?>
  <div class="header">
  <p class="text_row">ID</p>
  <p class="text_row">NOMBRE</p>         
  </div>
  <?php
    foreach ($vacunas as $vacuna) {
  ?>
    <form method="post">
      <div class="cont"> 
        <div class="cont__info">
          <p class="text_row"><?php echo  $vacuna['id']," ";?></p>
          <p class="text_row"><?php echo  $vacuna['nombre']," ";?></p>      
        </div> 
        <div class="cont__btn">
          <input type="submit" name="editar" value="<?php echo$vacuna['id'];?>">
          <input type="submit" name="borra" value="<?php echo$vacuna['id'] ;?>">
        </div>
      </div>
    </form>
  <?php
  }
  ?>
</body>
</html>

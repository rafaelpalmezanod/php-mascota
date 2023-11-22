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
  $users = (new Vacunacontrol)-> read();
  
  ?>
  <div class="header">
  <p class="text_row">ID</p>
  <p class="text_row">NOMBRE</p>         
  </div>
  <?php
    foreach ($vacuna as $vacuna) {
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
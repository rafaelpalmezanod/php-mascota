<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img\Logo veterinaria pet shop rustico blanco y negro.png">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>Dashboard de Usuarios</h1>
  <?php
  require_once(__DIR__ ."/controller\user.control.php");
  $users = (new UserControl)-> read();
  ?>
  <div style="display:flex; gap:2vh;" class="header">
  <p class="text_row">ID</p>
  <p class="text_row">NOMBRE</p>      
  <p class="text_row">EMAIL</p>   
  <p class="text_row">USERNAME</p>   
  <p class="text_row">PASSWORD</p>  
  <p class="text_row">ROLE_ID</p>    
</div>
<?php
  foreach ($users as $user) {
  ?>
    <form action="">

      <div style="display:flex; gap:2vh;" class="cont"> 
        <p class="text_row"><?php echo  $user['id']," ";?></p>
        <p class="text_row"><?php echo  $user['nombre']," ";?></p>      
        <p class="text_row"><?php echo  $user['email']," ";?></p>   
        <p class="text_row"><?php echo  $user['username']," ";?></p>   
        <p class="text_row"><?php echo  $user['Role_id']," ";?></p>  
      </div>

    </form>
  <?php
  }
  ?>
  
</body>
</html>
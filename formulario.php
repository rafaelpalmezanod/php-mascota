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
    <h1>Dashboard de Usuarios</h1>
  <?php
  require_once(__DIR__ ."/controller\user.control.php");
  $users = (new UserControl)-> read();

  if (isset ($_POST["borrar"] )){ 
    (new UserControl)-> delete($_POST);
  
  }
  
  ?>
  <div class="header">
  <p class="text_row">ID</p>
  <p class="text_row">NOMBRE</p>      
  <p class="text_row">EMAIL</p>   
  <p class="text_row">USERNAME</p>    
  <p class="text_row">ROLE_ID</p>    
</div>
<?php
  foreach ($users as $user) {
  ?>
    <form method="post">

      <div class="cont"> 
        <div class="cont__info">
        <p class="text_row"><?php echo  $user['id']," ";?></p>
        <p class="text_row"><?php echo  $user['nombre']," ";?></p>      
        <p class="text_row"><?php echo  $user['email']," ";?></p>   
        <p class="text_row"><?php echo  $user['username']," ";?></p>   
        <p class="text_row"><?php echo  $user['Role_id']," ";?></p>
        <form action="updae.php" method="post"> 
        </div> 
        <div class="cont__btn">
        <input type="submit"  name="editar" value="Editar<?php echo  $user['id']  ;?>">
  
        <input type="submit" name="borra" value=" Borrar<?php echo  $user['id'] ;?>">
        <label for=""></label>
        </div>
        </form>
        

        
       
      </div>

    </form>
  <?php
  }
  ?>
  
  
</body>
</html>
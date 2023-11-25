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
    <h1>Dashboard de Mascota</h1>
  <?php
  require_once(__DIR__ ."/controller/mascota.control.php");
    $Mascotas = (new Mascotacontrol)-> read();
    require_once(__DIR__ ."/controller/raza.control.php");
    $RAZAS = new Razacontrol;
    require_once(__DIR__ ."/controller/tipomascota.control.php");
    $Tipomascota = new TipoMascotacontrol;
    

  if (isset($_POST["borrar"] )){ 
    (new Eliminarusuario)-> delearUsuario($_POST['borrar']);
  }elseif (isset($_POST["editar"])){
    session_start();
    $_SESSION["idUser"] = $_POST["editar"];
    header('location:update.php');
  }
  
  ?>
  <div class="header" style="grid-template-columns: clamp(20px, 5vw, 150px) 14vw auto 20vw 16vw auto;">
  <p class="text_row">ID</p>
  <p class="text_row">NOMBRE</p>      
  <p class="text_row">FECHANACIMIENTO</p>   
  <p class="text_row">USERNAME</p>    
  <p class="text_row">TIPOMASCOTA</p>
  <p class="text_row">RAZA</p>
  </div>
  <?php
    foreach ($Mascotas as $Mascota) {
  ?>
    <form method="post">
      <div class="cont"> 
        <div class="cont__info">
          <p class="text_row"><?php echo  $Mascota['id']," ";?></p>
          <p class="text_row"><?php echo  $Mascota['nombre']," ";?></p>      
          <p class="text_row"><?php echo  $Mascota['FechaNacimiento']," ";?></p>   
          <p class="text_row"><?php echo  $Mascota['User_id']," ";?></p>   
          <p class="text_row"><?php echo $Tipomascota->getTipomascota($Mascota['TipoMascota_id']);?></p>
          <p class="text_row"><?php echo $RAZAS->getRaza($Mascota['Raza_id']);?></p>
        </div> 
        <div class="cont__btn">
          <input type="submit" name="editar" value="  <?php echo$Mascota['id'];?>">
        
          <input type="submit" name="borrar" value="  <?php echo$Mascota['id'] ;?>">
        </div>
      </div>

    </form>
  <?php
  }
  ?>
  
  
</body>
</html>
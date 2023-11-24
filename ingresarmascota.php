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
<?php
    // include_once __DIR__ ."/process/registrar_mascota.php";
    // (new RegistroMascota)->validarMacota();
    include_once __DIR__ ."/controller/tipoMascota.control.php";
    $tipoMascota = (new TipoMascotacontrol)->read();
    include_once __DIR__ ."/controller/raza.control.php";
    $tipoRaza = (new Razacontrol)->read();
?>
    <h1>INGRESAR MASCOTA</h1>
<form action="" method="post">
  <section class="informacion-general">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" />
    <?php 
      $consultar ="select * from user "
    ?>

    <label for="tipo-mascota">Tipo de mascota</label>
    <select name="tipo-mascota" id="tipo-mascota">
      <option value="">Seleccina Tipo Mascota</option>
      <?php 
       foreach ($tipoMascota as $mascota ) {
      ?>
        <option value="<?php echo $mascota['id']?>"><?php echo $mascota['nombre']?></option>
      <?php }?>
    </select>

    <label for="raza">Raza</label>
    <select name="raza" id="raza">
      <option value="">Seleccina raza</option>
      <?php 
       foreach ($tipoRaza as $Raza ) {
      ?>
        <option value="<?php echo $Raza['id']?>"><?php echo $Raza['nombre']?></option>
      <?php }?>
    </select>
  </section>

  <section class="informacion-adicional">
    <label for="fecha-nacimiento">Fecha de nacimiento</label>
    <input type="date" name="fecha-nacimiento" id="fecha-nacimiento" />
  </section>

  <input type="submit" name="ingresar" value="Agregar mascota" />
  <?php 
   if (isset($_POST["ingresar"])) {
      require_once __DIR__."/process/registrar_mascota.php";
   }
  ?>
</form>

    
</body>
</html>
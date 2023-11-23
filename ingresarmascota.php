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
    <h1>INGRESAR MASCOTA</h1>
<form action="agregar-mascota.php" method="post">
  <section class="informacion-general">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" />

    <label for="tipo-mascota">Tipo de mascota</label>
    <select name="tipo-mascota" id="tipo-mascota">
      <option value="perro">Perro</option>
      <option value="gato">Gato</option>
      <option value="ave">Ave</option>
    </select>

    <label for="raza">Raza</label>
    <input type="text" name="raza" id="raza" />
  </section>

  <section class="informacion-adicional">
    <label for="fecha-nacimiento">Fecha de nacimiento</label>
    <input type="date" name="fecha-nacimiento" id="fecha-nacimiento" />
  </section>

  <input type="submit" value="Agregar mascota" />
</form>

    
</body>
</html>
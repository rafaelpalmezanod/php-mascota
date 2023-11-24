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
    <body>
    <h1>Agregar Mascota</h1>
    <form action="agregar-mascota.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" required>

        <label for="fecha-nacimiento">Fecha de Nacimiento</label>
        <input type="datetime-local" name="fecha-nacimiento" required>

        <label for="user-id">Usuario</label>
        <select name="user-id" required>
            <!-- Aquí debes cargar dinámicamente los usuarios desde la base de datos -->
        </select>

        <label for="tipo-mascota-id">Tipo de mascota</label>
        <select name="tipo-mascota-id" required>
            <!-- Aquí debes cargar dinámicamente los tipos de mascotas desde la base de datos -->
        </select>

        <label for="raza-id">Raza</label>
        <select name="raza-id" required>
            <!-- Aquí debes cargar dinámicamente las razas desde la base de datos -->
        </select>

        <input type="submit" name="ingresar" value="Agregar mascota">
    </form>

    
</body>
</html>
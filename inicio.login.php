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
      if (isset($_SESSION["User_id"]) ){
        header("location: inicio.php");
      }
    ?>
<header>
    <div class="container">
      <a href="index.php" class="logo">
        <img src="img\Logo veterinaria pet shop rustico blanco y negro.png" alt="Logo de la veterinaria">
      </a>
      <nav>
        <ul>
          <li><a href="inicio.login.php">Atras</a></li>
          <li><a href="formulario.php">Control Usuario</a></li>
          <li><a href="formulario.mascota.php">Control Mascota</a></li>
          <li><a href="formulario.vacunas.php">Control Vacuna</a></li>
          <li><a href="vacuna.php">Ingresar Vacuna</a></li>
          <li><a href="ingresarmascota.php">Ingresar Mascota</a></li>

          
        </ul>
      </nav>
    </div>
  </header>

 <main>
 <section class="banner">
      <div class="container">
        <h1>CUIDANDO A TUS PELUDOS</h1>
        <p>Tu mejor amigo está en buenas manos</p>
      </div>

    </section>
    <section class="servicios">
      <div class="container">
        <h2>Nuestros servicios</h2>
        <ul>
          <li>-Consultas veterinarias-</li>
          <li>-Atención de urgencias-</li>
          <li>-Vacunaciones-</li>
          <li>-Desparasitación-</li>
          <li>-Cirugías-</li>
          <li>-Grooming-</li>
        </ul>
      </div>
    </section>

    <section class="galeria">
      <div class="container">
        <h2>Galería</h2>
        <div class="row">
          <div class="col-md-4">
            <img src="img\reducir-estres-de-mascotas-1.jpg" alt="Mascota 1">
          </div>
          <div class="col-md-4">
            <img src="img\guia-visitas-clinica-veterinaria-2.jpeg" alt="Mascota 2">
          </div>
          <div class="col-md-4">
            <img src="img\125505-600-338_grande.webp" alt="Mascota 3">
          </div>
        </div>
      </div>
    </section>

    
  </main>
 </main>
 <footer>
    <div class="container">
      <p>Copyright © 2023 Veterinaria San Juan del Cesar</p>
    </div>
  </footer>
 




</body>
</html>
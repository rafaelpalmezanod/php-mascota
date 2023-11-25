<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img\Logo veterinaria pet shop rustico blanco y negro.png">
    <link rel="stylesheet" href="css\inicio.css">
    <title>Document</title>
    <style>
       body, html {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        .bienvenida-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #fff; 
            justify-content: center;
            align-items: center;
            z-index: 1000;
            overflow: hidden;
        }
        .bienvenida-container img {
            max-width: 100%;
            max-height: 100%;
        }
    </style>
</head>
<body>
<div id="bienvenida" class="bienvenida-container">
        <img src="img\Logo veterinaria pet shop rustico blanco y negro.png" alt="Logo de la veterinaria">
    </div>
<header>
  
<?php 
      session_start();
      if (isset($_SESSION["User_id"]) ){
        header("location: inicio.php");
      }
    ?>
    <div class="container">
      <a href="index.php" class="logo">
        <img src="img\Logo veterinaria pet shop rustico blanco y negro.png" alt="Logo de la veterinaria">
      </a>
      <nav>
        <ul>
          <li><a href="inicio.php">Inicio</a></li>
          <li><a href="login.php">Iniciar Sesion</a></li>
          <li><a href="registro.php">Registrame</a></li>
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
 
  <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Muestra la pantalla de bienvenida
            document.getElementById("bienvenida").style.display = "flex";

            // Después de 5 segundos, oculta la pantalla de bienvenida
            setTimeout(function () {
                document.getElementById("bienvenida").style.display = "none";
            }, 5000); // 5000 milisegundos = 5 segundos
        });
    </script>


</body>
</html>
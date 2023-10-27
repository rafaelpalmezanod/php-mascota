<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once __DIR__ . "./vendor/autoload.php";
    use Dotenv\Dotenv;
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    require_once __DIR__ ."/conexion.php";
    $conect = (new conexion) -> conn();
    if (!($conect->connect_error)) {
        header("location: registro.php");   
    } 
    else {
        echo "error";
    }
    
    /*
    if ($dotenv) {
       echo"Conectado exitosamente a la base de DATOS";
    } else {
        echo "No se ha podido conectar a la Base de Datos";
    }*/
    ?>
</body>
</html>
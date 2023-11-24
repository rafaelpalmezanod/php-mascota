<?php
include_once(__DIR__."/../conexion.php");
include_once(__DIR__."/../model/Mascota.php");



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $fechaNacimiento = $_POST["fecha-nacimiento"];
    $userId = $_POST["user-id"];
    $tipoMascotaId = $_POST["tipo-mascota-id"];
    $razaId = $_POST["raza-id"];

    $sql = "INSERT INTO Mascota (nombre, FechaNacimiento, User_id, TipoMascota_id, Raza_id) 
            VALUES ('$nombre', '$fechaNacimiento', $userId, $tipoMascotaId, $razaId)";

    if ($conn->query($sql) === TRUE) {
        echo "Mascota agregada correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>


<?php
require_once(__DIR__ ."/../controller/mascota.control.php");


$result = new Mascotacontrol;
$modelMascota = new Mascota;

$modelMascota ->nombre = $_POST["nombre"];
$modelMascota ->fechaNacimiento = $_POST["fecha-nacimiento"];
$modelMascota ->User_id = 4;
$modelMascota ->TipoMascota_id = $_POST["tipo-mascota"];
$modelMascota ->raza_id = $_POST["raza"];

 $result -> crear($modelMascota);
?>
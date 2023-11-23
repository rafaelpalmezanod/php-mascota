<?php
include_once(__DIR__."/../conexion.php");
include_once(__DIR__."/..model/mascota.php");

class Mascotacontrol extends conexion{

    public function crear(){
        $conect =( new conexion) -> conn();
        $modelmascota = (new Mascota);
        $modelmascota -> nombre = $conect -> real_escape_string($_POST["nombre"]);
        $modelmascota ->fechaNacimiento = $conect -> real_escape_string($_POST["fechaNacimento"]);
        $modelmascota ->foto = $conect ->real_escape_string($_POST["foto"]);
        $modelmascota -> User_id ;
        $modelmascota -> TipoMascota_id ;
        $modelmascota -> raza_id ;
        $msql= "INSERT INTO Mascota ";

    }



}




?>
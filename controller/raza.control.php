<?php
include_once(__DIR__."/../conexion.php");
include_once(__DIR__."/../model/mascota.php");

class Razacontrol extends conexion{

    public function crear(){
        $conect =( new conexion) -> conn();
        $modelmascota = (new Raza);
        $modelmascota -> nombre = $conect -> real_escape_string($_POST["nombre"]);
        $msql= "INSERT INTO Raza (nombre) value ('$modelmascota->nombre')";
        $conect->query($msql);
        return $conect;
    }
    public function  read(){
        $conect =(new conexion)->conn();
        $msql = "SELECT * FROM Raza";
        $result = $conect->query($msql);
        return $result;

    }
    public function  getRaza($id){
        $conect =(new conexion)->conn();
        $msql = "SELECT nombre FROM Raza where id=$id";
        $result = $conect->query($msql);
        $row = $result->fetch_assoc();
        return $row["nombre"];
    }


}


?>
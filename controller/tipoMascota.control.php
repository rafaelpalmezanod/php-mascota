<?php
include_once(__DIR__."/../conexion.php");
include_once(__DIR__."/../model/mascota.php");

class TipoMascotacontrol extends conexion{

    public function crear(){
        $conect =( new conexion) -> conn();
        $modelmascota = (new Tipomascota);
        $modelmascota -> nombre = $conect -> real_escape_string($_POST["nombre"]);
        $msql= "INSERT INTO Tipomascota (nombre,EdadEquivaleteJoven,EdadEquivalenteAdulto,EdadAdulto) 
        value ('$modelmascota->nombre','$modelmascota->EdadEquivaleteJoven','$modelmascota->EdadEquivalenteAdulto','$modelmascota->EdadAdulto')";
        $conect->query($msql);
        return $conect;
    }
    public function  read(){
        $conect =(new conexion)->conn();
        $msql = "SELECT * FROM Tipomascota";
        $result = $conect->query($msql);
        return $result;

    }
    public function  getTipomascota($id){
        $conect =(new conexion)->conn();
        $msql = "SELECT nombre FROM TipoMascota where id=$id";
        $result = $conect->query($msql);
        $row = $result->fetch_assoc();
        return $row["nombre"];
    }


}


?>
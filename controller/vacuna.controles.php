<?php
include_once(__DIR__."/../conexion.php");
include_once(__DIR__."/../model/vacuna.php");

class Vacunacontrol extends conexion{


    public function crear(){
        $conect =(new conexion) ->conn();
        $modelvacuna = (new vacuna);
        $modelvacuna -> nombre = $conect -> real_escape_string($_POST['nombre']);
        $msql = "INSERT INTO  Vacuna (nombre) value ('$modelvacuna->nombre')";
        $conect->query($msql);
        $conect->close();
    }

    public function  read(){
        $conect =(new conexion)->conn();
        $msql = "SELECT id,nombre FROM vacuna";
        $result = $conect->query($msql);
        $vacuna =[];
        $conect->close();
        return $result;

    }






}

?>
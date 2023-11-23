<?php
include_once(__DIR__."/../conexion.php");
include_once(__DIR__."/../model/Vacuna.php");

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
        $vacunas =[];
        return $result;

    }
    public function update(){
        $conect = (new conexion)->conn();
       $modelvacuna = (new User);
       $modelvacuna->nombre=$_POST["nombre"];
       $msql = "UPDATE Vacuna (nombre) value ('$modelvacuna->nombre')";
       $conect->query($msql);
       $conect->close();
    }

    public function delete($id) {
        $conect = (new conexion)->conn();
        $msql = "DELETE FROM Vacuna WHERE id=$id";
        $conect->query($msql);
        $conect->close();
        
      }
}

?>
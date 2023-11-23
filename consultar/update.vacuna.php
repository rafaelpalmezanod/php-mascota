<?php
    include_once(__DIR__."/../conexion.php");
    include_once(__DIR__."/../model/vacuna.php");
    
    class Update extends conexion{
        public function readUser($id){
            $conect = (new conexion)->conn();
            $msql = "SELECT id, nombre FROM Vacuna WHERE id = '$id' ";
            $result = $conect->query($msql);
            $vacunas =[];        
            $conect->close(); 
            return $result; 
       }

    
    }
?>
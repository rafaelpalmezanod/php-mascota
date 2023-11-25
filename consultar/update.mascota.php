<?php
    include_once(__DIR__."/../conexion.php");
    include_once(__DIR__."/../model\mascota.php");
    
    class Update extends conexion{
        public function readMascota($id){
            $conect = (new conexion)->conn();
            $msql = "SELECT id, nombre,fechaNacimiento,User_id,TipoMascota_id,raza_id  FROM Mascota WHERE id = '$id' ";
            $result = $conect->query($msql);
            $mascota =[];        
            $conect->close(); 
            return $result; 
       }

    
    }
?>

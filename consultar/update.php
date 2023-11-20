<?php
    include_once(__DIR__."/../conexion.php");
    include_once(__DIR__."/../model\user.php");
    
    class Update extends conexion{
        public function readUser($id){
            $conect = (new conexion)->conn();
            $msql = "SELECT id, nombre,username,email,Role_id  FROM User WHERE id = '$id' ";
            $result = $conect->query($msql);
            $users =[];        
            $conect->close(); 
            return $result; 
       }

    
    }
?>

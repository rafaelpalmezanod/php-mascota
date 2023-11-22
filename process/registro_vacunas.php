<?php
require_once(__DIR__ ."/../conexion.php");
require_once(__DIR__ ."/../model/vacuna.php");
require_once(__DIR__ ."/../controller/vacuna.controles.php");


class RegistroVacunas extends conexion{

    public function validarRegistro(){
        if(isset($_POST['ingresar'])){
            if(empty($_POST['nombre'])){
                echo"campo vacio";
            }
            else{
                $conect = (new conexion)->conn();
                $nombre = $conect -> real_escape_string($_POST["nombre"]);
                $mysql = "SELECT * FROM Vacuna WHERE nombre = '$nombre'";
                $resul = $conect -> query($mysql);
                if($resul -> num_rows > 0){
                    echo"Datos en Uso";
                }
                else{
                    (new Vacunacontrol)->crear();
                }
                    
            }
        }

    }

    

}

    
       
    


    




?>
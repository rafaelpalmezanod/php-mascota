<?php
require_once(__DIR__ ."/../conexion.php");
require_once(__DIR__ ."/../model/vacuna.php");
require_once(__DIR__ ."/../controller/vacuna.controles.php");
class Actualizar_vacuna extends conexion{

    public function actualizarvacuna($id)
    {
        if(isset($_POST["actualizar"])){
            if(empty($_POST["nombre"])){
                echo "campo vacio";
            }else{
                $conect = (new conexion)->conn();
                $nombre = $conect -> real_escape_string($_POST["nombre"]);
                $mysql = "UPDATE Vacuna SET nombre='$nombre' WHERE id = $id;";
                $result = $conect->query($mysql);
                if ($result ===TRUE){
                    echo"Vacuna Actualizada con exito";
                }else{
                    echo "Error". $mysql . "<br>" . $conect->error;
                }

            }

        }

    }

}
?>
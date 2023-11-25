<?php
require_once(__DIR__."/../conexion.php");
require_once(__DIR__ ."/../model/mascota.php");
require_once(__DIR__ ."/../controller/mascota.control.php");

class actualizar_Macota extends conexion{
    public function actualizarMascota($id)
    {
        if (isset($_POST["actualizar"])) {
            if (empty($_POST["nombre"]) or empty($_POST["TipoMascota_id"]) or empty($_POST["raza_id"])) {
                echo "Campo vacío";
            } else {
                $conect = (new conexion)->conn();

                $nombre = $conect->real_escape_string($_POST["nombre"]);
                
            
                $tipoMascota = intval($_POST["tipo-mascota"]);
                $raza = intval($_POST["raza"]);

               
                $modelMascota = new Mascota();
                $modelMascota->TipoMascota_id = $tipoMascota;
                $modelMascota->raza_id = $raza;

               
                $mysql = "UPDATE Mascota SET nombre='$nombre', TipoMascota_id='$tipoMascota', raza_id='$raza' WHERE id = '$id'";
                $result = $conect->query($mysql);

                if ($result === TRUE) {
                    echo "Mascota actualizada con éxito";
                } else {
                    echo "Error: " . $mysql . "<br>" . $conect->error;
                }
                
            }
        }
    }
}

<?php
require_once(__DIR__."/../conexion.php");
require_once(__DIR__ ."/../model/user.php");
require_once(__DIR__ ."/../controller/user.control.php");

class actualizar_Usuario extends conexion{
    public function actualizarUsuario()
    {
        if (isset($_POST["actualizar"])) {
            if (empty($_POST["nombre"]) or empty($_POST["username"]) or empty($_POST["email"]) or empty($_POST["password"])) {
                echo "Campo vacío";
            } else {
                $conect = (new conexion)->conn();
                $id = $_POST["id"]; 
                $nombre = $conect->real_escape_string($_POST["nombre"]);
                $username = $conect->real_escape_string($_POST["username"]);
                $email = $conect->real_escape_string($_POST["email"]);
                $mysql = "UPDATE User SET nombre='$nombre', username='$username', email='$email' WHERE id=$id";

                if ($conect->query($mysql) === TRUE) {
                    echo "Usuario actualizado con éxito";
                } else {
                    echo "Error: " . $mysql . "<br>" . $conect->error;
                }
                
            }
        }
    }
}

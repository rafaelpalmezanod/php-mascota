<?php
require_once(__DIR__."/../conexion.php");
require_once(__DIR__ ."/../model/user.php");
require_once(__DIR__ ."/../controller/user.control.php");

class actualizar_Usuario extends conexion{
    public function actualizarUsuario($id)
    {
        if (isset($_POST["actualizar"])) {
            if (empty($_POST["nombre"]) or empty($_POST["username"]) or empty($_POST["email"])) {
                echo "Campo vacío";
            } else {
                $conect = (new conexion)->conn();
                // $id = $_POST["actualizar"];
                $nombre = $conect->real_escape_string($_POST["nombre"]);
                $username = $conect->real_escape_string($_POST["username"]);
                $email = $conect->real_escape_string($_POST["email"]);
                $mysql = "UPDATE User SET nombre='$nombre', username='$username', email = '$email' WHERE id = '$id'";
                $result = $conect->query($mysql);
                if ($result === TRUE) {
                    echo "Usuario actualizado con éxito";
                } else {
                    echo "Error: " . $mysql . "<br>" . $conect->error;
                }
                
            }
        }
    }
}

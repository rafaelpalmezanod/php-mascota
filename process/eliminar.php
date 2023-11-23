<?php
require_once(__DIR__ ."/../controller/user.control.php");

class Eliminarusuario extends conexion {


    public function delearUsuario($id) {
        $id = $_POST["id"];
        $user = new UserControl();
        $result  = $user -> delete($user);
        if ($result){
            header('Location:../formulario.php');
        }else{
            echo "Error";
        }
    }
}


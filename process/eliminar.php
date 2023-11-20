<?php
require_once(__DIR__ ."/../conexion.php");
require_once(__DIR__ ."/../model/user.php");
require_once(__DIR__ ."/../controller/user.control.php");

class Eliminarusuario extends conexion {


    public function delearUsuario($id) {
        if(isset($_POST["Borrar"])){
            if (isset($_POST['id'])){
                $id = $_POST['id'];
                $conect = (new conexion)->conn();
                $query = 'DELETE FROM user Where id =$id';
                $resultado =mysqli_query($conect, $query);
                if (mysqli_num_rows($resultado) > 0) {
                    echo'eliminado';
                }
    
                header('Location: index.php');
            }
        }
        
    }

}


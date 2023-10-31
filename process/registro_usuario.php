<?php
require_once(__DIR__ ."/../conexion.php");
require_once(__DIR__ ."/../model/user.php");
require_once(__DIR__ ."/../controller/user.control.php");
class RegistroUsuario extends conexion
{
    public function validarRegistro(){
        if (isset($_POST["ingresar"])) {
            if(empty($_POST["nombre"])or empty($_POST["username"]) or empty($_POST["email"])or empty($_POST["password"])){
                echo"campo vacio";
             }
             else{
                (new UserControl)->crear();
             }

        }   

    }

    public function validarUsuario(){
        if (isset($_POST["eliminar"])) {
            if(empty($_POST["id"])) {
                echo "Eliminado";
            }
        }  
    }

    public function validarPerfil(){
        if (isset($_POST["actualizar"])) {
            if(empty($_POST["nombre"])or empty($_POST["username"])or empty($_POST["email"])or empty($_POST["password"]))
            echo "Actualizacion Exitosa ";
        }
    }

}
?>
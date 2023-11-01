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
                $conect = (new conexion)->conn();
                $username = $conect -> real_escape_string($_POST["username"]);
                $email = $conect -> real_escape_string($_POST["email"]);
                $mysql = "SELECT * FROM User WHERE username =  '$username' or email =  '$email'";
                // $result = mysqli_query($conect,$mysql);
                $result = $conect -> query($mysql);
                if($result -> num_rows > 0){
                   echo"Datos en Uso";
                }
                else{
                    (new UserControl)->crear();
                }
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
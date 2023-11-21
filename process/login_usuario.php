<?php
require_once(__DIR__ ."/../conexion.php");
require_once(__DIR__ ."/../model/user.php");
require_once(__DIR__ ."/../controller/user.control.php");

class Login_usuario extends conexion
{
    public function validarLogin(){
        if(isset($_POST["ingresar"])){
            if(empty($_POST["username"]) or empty($_POST["password"])){
                echo"Campo vacio";
            } 
            else{
                $conect = (new conexion)->conn();
                $username = $conect -> real_escape_string($_POST['username']);
                $password = $conect -> real_escape_string($_POST['password']);
                $mysql = "SELECT * FROM User WHERE username =  '$username'" ;
                // $result = mysqli_query($conect,$mysql);
                $result = $conect -> query($mysql);
                if($result -> num_rows > 0){
                    $resultArray = mysqli_fetch_array($result);
                    $hash = $resultArray['password'];
                    if(password_verify($password, $hash)){
                        session_start();
                        $_SESSION["username"] = $username;
                        $_SESSION["Role"] = $resultArray["Role_id"];
                        $_SESSION["id"] = $resultArray["id"];
                        header("location: inicio.php");
                    }
                    else{
                        echo "contraseña invalida";
                    }
                }else{
                    echo "usuario no registrado";
                }

            }
        }
        if(isset($_POST["registro"])){
            header("location: inicio.login.php");
        }
    }
}

?>
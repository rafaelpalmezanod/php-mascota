<?php
include_once(__DIR__."/../conexion.php");
include_once(__DIR__."/../model\user.php");
 class UserControl extends conexion {
    

        
        // $this->conn();
        // $conect =(new conexion)->conn();

        // $conect = conexion::conn();
    

    public function crear(){
        $conect = (new conexion)->conn();
       $modelUser = (new User);
       $modelUser->nombre=$_POST["nombre"];
       $modelUser->email=$_POST["email"];
       $modelUser->password=$_POST["password"];
       $modelUser->username=$_POST["username"];
       $modelUser->role_id="1";
       $msql = "INSERT INTO User (nombre,username,email,password,Role_id) value ('$modelUser->nombre', '$modelUser->username', '$modelUser->email', '$modelUser->password', '$modelUser->role_id')";
       $conect->query($msql);
       $conect->close();
    }

}
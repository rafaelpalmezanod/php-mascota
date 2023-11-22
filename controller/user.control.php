<?php
include_once(__DIR__."/../conexion.php");
include_once(__DIR__."/../model\user.php");


 class UserControl extends conexion {
    public function crear(){
        $conect = (new conexion)->conn();
       $modelUser = (new User);
       $modelUser->nombre= $conect -> real_escape_string($_POST["nombre"]);
       $modelUser->email= $conect -> real_escape_string($_POST["email"]);
       $modelUser->password= $conect -> real_escape_string( password_hash($_POST["password"], PASSWORD_DEFAULT));
       $modelUser->username= $conect -> real_escape_string($_POST["username"]);
       $modelUser->role_id="1";
       $msql = "INSERT INTO User (nombre,username,email,password,Role_id) value ('$modelUser->nombre', '$modelUser->username', '$modelUser->email', '$modelUser->password', '$modelUser->role_id')";
       $conect->query($msql);
       
    }

    

    public function read(){
        $conect = (new conexion)->conn();
        $msql = "SELECT id, nombre,username,email,Role_id  FROM User";
        $result = $conect->query($msql);
        $users =[];
            
        $conect->close(); 
        return $result; 
    }
    // public function update($id)
    // {
    //     $conect = (new conexion)->conn();
    //     $modelUser = new User();

    //     $modelUser->nombre = $_POST["nombre"];
    //     $modelUser->email = $_POST["email"];
    //     $modelUser->password = $_POST["password"];
    //     $modelUser->username = $_POST["username"];
    //     $modelUser->role_id = "1"; 

    //     $msql = "UPDATE User SET nombre=?, username=?, email=?, password=?, Role_id=? WHERE id=?";
        
    //     $stmt = $conect->prepare($msql);
    //     $stmt->bind_param("sssssi", $modelUser->nombre, $modelUser->username, $modelUser->email, $modelUser->password, $modelUser->role_id, $id);    
    //     $stmt->execute();
    //     if ($stmt->affected_rows > 0) {
    //         echo "Usuario actualizado correctamente.";
    //     } else {
    //         echo "Error al actualizar el usuario.";
    //     }
    
    //     $stmt->close();
    //     $conect->close();
    // }
    
    
    
    public function update( $id ){
        $conect = (new conexion)->conn();
       $modelUser = (new User);
       $modelUser->nombre=$_POST["nombre"];
       $modelUser->email=$_POST["email"];
       $modelUser->password=$_POST["password"];
       $modelUser->username=$_POST["username"];
       $modelUser->role_id="1";
       $msql = "UPDATE User (nombre,username,email,password,Role_id) value ('$modelUser->nombre', '$modelUser->username', '$modelUser->email', '$modelUser->password', '$modelUser->role_id') WHERE id = '$id'";
       $conect->query($msql);
       $conect->close();
    }

    
    public function delete($id){
        $conect = (new conexion)->conn();
        $msql = "DELETE FROM User WHERE id = $id ";
        $result = $conect->query($msql);
        return $result;
       
    }



}
<?php 
include_once(__DIR__."/../conexion.php");
include_once(__DIR__."/../model/mascota.php");

class Mascotacontrol extends conexion{
    public function crear(Mascota $mascota ){
        $conect =( new conexion) -> conn();
        $nombre = $mascota->nombre;
        $fechaNacimiento =$mascota->fechaNacimiento;
        $User_id =$mascota->User_id;
        $TipoMascota_id = $mascota->TipoMascota_id;
        $raza_id = $mascota->raza_id;
        $msql= "INSERT INTO mascota (nombre,FechaNacimiento,User_id,TipoMascota_id,Raza_id) 
        values ('$nombre','$fechaNacimiento','$User_id','$TipoMascota_id','$raza_id')";
        $conect->query($msql);
        $conect->close();
    }
    public function  read(){
        $conect =(new conexion)->conn();
        $msql = "SELECT * FROM mascota";
        $result = $conect->query($msql);
        $conect->close();
        return $result;

    }

    public function update(Mascota $mascota) {
        $conect = (new conexion)->conn();
        $id = $mascota->id;
        $nombre = $mascota->nombre;
        $fechaNacimiento = $mascota->fechaNacimiento;
        $User_id = $mascota->User_id;
        $TipoMascota_id = $mascota->TipoMascota_id;
        $raza_id = $mascota->raza_id;
        $msql = "UPDATE mascota SET nombre = '$nombre',FechaNacimiento = '$fechaNacimiento'User_id = '$User_id',TipoMascota_id = '$TipoMascota_id',Raza_id = '$raza_id'WHERE id = '$id'";
        $conect->query($msql);
        $conect->close();
    }
    
    public function delete($id) {
        $conect = (new conexion)->conn();
        $msql = "DELETE FROM mascota WHERE id = '$id'";
        $conect->query($msql);
        $conect->close();
        return true;
    }
    


}

?>?
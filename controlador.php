<?php
if(empty($_POST["ingresar"])){
    if (empty($_POST ["user"])and empty(trim($_POST ["password"]))) {
        echo"PORFAVOR INGRESAR LOS DATOS";
    } else {
        # code...
    }
    
}
?>
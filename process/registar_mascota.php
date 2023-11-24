<?php
require_once(__DIR__ ."/../conexion.php");
require_once(__DIR__ ."/../model/vacuna.php");
require_once(__DIR__ ."/../controller\mascota.control.php");

    $sql = "SELECT m.id, m.nombre, m.FechaNacimiento, u.nombre as nombre_usuario, tm.nombre as tipo_mascota, r.nombre as raza 
            FROM Mascota m
            JOIN User u ON m.User_id = u.id
            JOIN TipoMascota tm ON m.TipoMascota_id = tm.id
            JOIN Raza r ON m.Raza_id = r.id";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<h1>Listado de Mascotas</h1>";
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Nombre</th><th>Fecha de Nacimiento</th><th>Usuario</th><th>Tipo de Mascota</th><th>Raza</th><th>Acciones</th></tr>";
    
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nombre"] . "</td>";
            echo "<td>" . $row["FechaNacimiento"] . "</td>";
            echo "<td>" . $row["nombre_usuario"] . "</td>";
            echo "<td>" . $row["tipo_mascota"] . "</td>";
            echo "<td>" . $row["raza"] . "</td>";
            echo "<td><a href='editar-mascota.php?id=" . $row["id"] . "'>Editar</a> | <a href='eliminar-mascota.php?id=" . $row["id"] . "'>Eliminar</a></td>";
            echo "</tr>";
        }
    
        echo "</table>";
    } else {
        echo "0 resultados";
    }
    
    $conn->close();
    ?>
    



?>
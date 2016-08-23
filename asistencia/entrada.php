<?php
include "conexion_folios.php";
include "verificar_session.php";
include "style.css";

//Toma el nombre y matricula del usuario
$results = $mysqli->query("SELECT matricula, nombre_usuario from usuarios WHERE id_usuario = '$id_usuario'");
while($row = $results->fetch_array())  
    {
    $matricula = $row["matricula"];
    $nombre_usuario = $row["nombre_usuario"];
    }

//Almacenado del folio
$results = $mysqli->query("INSERT INTO `asistencias` (`matricula`, `nombre_usuario`, `estatus`)  
            VALUES  
            ('$matricula', '$nombre_usuario', '1')");

header("location:confirmacion_entrada.php");

?>

     

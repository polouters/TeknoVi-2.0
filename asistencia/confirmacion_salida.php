<?php
include "conexion_folios.php";
include "verificar_session.php";
include "style.css";
 
//Toma el id del ultimo login efectuado por el usuario
$results = $mysqli->query("SELECT matricula from usuarios WHERE id_usuario = '$id_usuario'");
while($row = $results->fetch_array())  
    {
    $matricula = $row["matricula"];
    }
    
//Toma el la hora de registro de la entrada
$results = $mysqli->query("SELECT HOUR(`registro`) as hora, MINUTE(`registro`) as minuto from asistencias WHERE matricula = '$matricula'");
while($row = $results->fetch_array())   
    {
    $hora = $row["hora"];
    $minuto = $row["minuto"];
    }
?> 

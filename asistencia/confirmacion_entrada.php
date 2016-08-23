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
 
<!-- Texto resaltado con boostrap -->
<div class="centered">
<p class="lead">Entrada registrada a las <?php echo $hora." Horas y ".$minuto. " minutos"?></p>
</div>  
 
<Style>
.centered
{
    text-align:center;
    vertical-align: text-middle;
}
</Style> 

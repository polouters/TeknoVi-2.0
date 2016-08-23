<?php
include "conexion_folios.php";
include "verificar_session.php";
include "style.css";
 
$dia_actual = date("j"); //Dia del mes sin ceros iniciales
$mes_actual = date("n"); //Mes actual sin ceros iniciales
$year_actual = date("Y"); //Año actual con 4 digitos
?>
 
<!-- Texto resaltado con boostrap -->
<div class="centered">
<p class="lead">Estos son todas las asistencias registradas del dia de hoy</p>
</div>  

<!-- Texto resaltado con boostrap -->
<div class="centered">
<p class="lead">Entradas</p>
</div>  
 
<!-- Tabla boostrap con nombres de columna-->
<div class="container">
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Matricula</th>
        <th>Nombre</th>
        <th>Hora</th>
      </tr>
    </thead>
    <tbody>
    
<?php
//Toma el la hora de registro de la entrada
$results = $mysqli->query("SELECT matricula, nombre_usuario, HOUR(`registro`) as hora, MINUTE(`registro`) as minuto from asistencias WHERE DAY(`registro`) = $dia_actual AND MONTH(`registro`) = $mes_actual AND YEAR(`registro`) = $year_actual and estatus = 1");
while($row = $results->fetch_array())   
    {
    $matricula = $row["matricula"];
    $nombre_usuario = $row["nombre_usuario"];
    $hora = $row["hora"];
    $minuto = $row["minuto"];
    
    print '<tr>';
    echo "<td>".$matricula."</td>";
    echo "<td>".$nombre_usuario."</td>";
    echo "<td>".$hora.":".$minuto."</td>";
    print '</tr>';
    }
?>
 
    </tbody>
  </table>
</div>
 

<!-- Texto resaltado con boostrap -->
<div class="centered">
<p class="lead">Salidas</p>
</div>  
 
<!-- Tabla boostrap con nombres de columna-->
<div class="container">
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Matricula</th>
        <th>Nombre</th>
        <th>Hora</th>
      </tr>
    </thead>
    <tbody>
    
<?php
//Toma el la hora de registro de la entrada
$results = $mysqli->query("SELECT matricula, nombre_usuario, HOUR(`registro`) as hora, MINUTE(`registro`) as minuto from asistencias WHERE DAY(`registro`) = $dia_actual AND MONTH(`registro`) = $mes_actual AND YEAR(`registro`) = $year_actual and estatus = 2");
while($row = $results->fetch_array())   
    {
    $matricula = $row["matricula"];
    $nombre_usuario = $row["nombre_usuario"];
    $hora = $row["hora"];
    $minuto = $row["minuto"];
    
    print '<tr>';
    echo "<td>".$matricula."</td>";
    echo "<td>".$nombre_usuario."</td>";
    echo "<td>".$hora.":".$minuto."</td>";
    print '</tr>';
    }
?>
 
    </tbody>
  </table>
</div>

 
<Style>
.centered
{
    text-align:center;
    vertical-align: text-middle;
}
</Style>

        

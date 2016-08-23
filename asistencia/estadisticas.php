<?php
include "conexion_folios.php";
include "verificar_session.php";
include "style.css";
?>

<!-- Texto resaltado con boostrap -->
<div class="container">
  <p class="lead">Horas de entrada del personal</p>
</div>
 
<!-- Tabla boostrap con nombres de columna-->
<div class="container">
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Hora</th>
      </tr>
    </thead>
    <tbody>
 
    
<?php
$results = $mysqli->query("SELECT nombre_usuario, registro from asistencias WHERE estatus = 1");
while($row = $results->fetch_array())  
    {
    $nombre_usuario = $row["nombre_usuario"];
    $registro = $row["registro"];
    print '<tr>';
    echo "<td>".$nombre_usuario."</td>";
    echo "<td>".$registro."</td>";
    print '</tr>';
    }
 
echo "<br>";
?>
 
    </tbody>
  </table>
</div>



<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>



<!-- Texto resaltado con boostrap -->
<div class="container">
  <p class="lead">Horas de salida del personal</p>
</div>
 
<!-- Tabla boostrap con nombres de columna-->
<div class="container">
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Hora</th>
      </tr>
    </thead>
    <tbody>
 
    
<?php
$results = $mysqli->query("SELECT nombre_usuario, registro from asistencias WHERE estatus = 2");
while($row = $results->fetch_array())  
    {
    $nombre_usuario = $row["nombre_usuario"];
    $registro = $row["registro"];
    print '<tr>';
    echo "<td>".$nombre_usuario."</td>";
    echo "<td>".$registro."</td>";
    print '</tr>';
    }
 
echo "<br>";
?>
 
    </tbody>
  </table>
</div>

        

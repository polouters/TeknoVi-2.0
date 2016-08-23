<?php
//Muestra la lista de usuarios que que pueden ser modificados
include "conexion_folios.php";
include "verificar_session.php";
include "style.css";
?>
 
<!-- Texto resaltado con boostrap -->
<div class="container">
  <p class="lead">Acontinuacion se muestran los usuarios disponibles en el sistema que pueden ser modificados por usted</p>
</div>
 
<!-- Tabla boostrap con nombres de columna-->
<div class="container">
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Matricula</th>
        <th>Nombre</th>
        <th>Editar</th>
      </tr>
    </thead>
    <tbody>
 
    
<?php
//Toma todos los usuarios que pueden ser modificados en base al nivel de privilegios
$results = $mysqli->query("SELECT DISTINCT id_usuario, matricula, nombre_usuario, from usuarios WHERE prioridad > '1'");
while($row = $results->fetch_array())  
    {
    $id_referencia = $row["id_usuario"];
    $matricula = $row["matricula"];
    $nombre_usuario = $row["nombre_usuario"];
    
    print '<tr>';
    echo "<td>".$matricula."</td>";
    echo "<td>".$nombre_usuario."</td>";
    echo "<td><a href='editar_usuarios.php?id_referencia=".$id_referencia."'>Editar</a></td>";//Link para modificar, para cada usuario
    print '</tr>';
    }
?>
    </tbody>
  </table>
</div> 

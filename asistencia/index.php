<?php
include "conexion_folios.php";
include "verificar_session.php";
include "style.css";

//Toma el nombre del usuario
$results = $mysqli->query("SELECT nombre_usuario from usuarios WHERE id_usuario = '$id_usuario'");
while($row = $results->fetch_array())  
    {
    $nombre_usuario = $row["nombre_usuario"];
    }

echo "<br>";
?>

<!-- Texto resaltado con boostrap -->
<div class="centered">
<p class="lead">Welcome back <?php echo $nombre_usuario;?></p>
</div>

<?php
echo "<br>";
echo "<br>";
?>

<div class="centered">
<a href="entrada.php" class="btn btn-xl btn-success">Registrar entrada</a>
</div>

<?php
echo "<br>";
echo "<br>";
?>

<div class="centered">
<a href="salida.php" class="btn btn-xl btn-info">Registrar salida</a>
</div>

<Style>
.centered
{
    text-align:center;
    vertical-align: text-middle;
}

.btn-xl {
    padding: 18px 28px;
    font-size: 22px;
    border-radius: 8px;
}
</Style>

        

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
 
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
 
<?php
include "navigation.php";

//Revisa que el usuario tenga una session activa
 session_start();
 if(!isset($_SESSION['userid']))
 
{
//Si no hay session activa redirecciona al la pagina de login
    header("location:login.php");
    exit;
}
$id_usuario = $_SESSION['userid'];
 

/* En cada acceso a una pagina donde se invoque la verificacion de login, se toma el timestamp
de la tabla expirarsession y se compara con el timestamp actual, si la diferencia es menor
a 3600 (una hora) se hace update a la tabla expirarsession  con el timestamp actual y 
se le permite al usuario acceder al contenido, de ser el caso de que el tiempo exceda la marca
de 3600 la session sera terminada y se envia al usuaraio al login. */
 
//Toma el id del ultimo login efectuado por el usuario
$results = $mysqli->query("SELECT MAX(idexpiracion) as ultimo_login from expirarsession WHERE id_usuario = '$id_usuario'");
while($row = $results->fetch_array()) 
    {
    $ultimo_login = $row["ultimo_login"];
    }
//Toma el tiempo de la ultima actividad del usuaraio
$results = $mysqli->query("SELECT timestamp from expirarsession WHERE idexpiracion = '$ultimo_login'");
while($row = $results->fetch_array()) 
    {
    $timestamp = $row["timestamp"];
    }
   
$tiempo_actual = time();
$tiempo_inactivo = $tiempo_actual - $timestamp;
 
if ($tiempo_inactivo < 600)
    {
    mysql_query(" UPDATE expirarsession 
    SET timestamp = '$tiempo_actual' 
    WHERE idexpiracion = '$ultimo_login'");
    }
 
else
    {
    header("location:logout.php");
    }
?>

        

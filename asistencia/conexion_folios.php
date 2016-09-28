<?PHP
$conexion=mysql_connect("localhost","root","Juf13KpD");
$cosa=mysql_select_db("controldepersonal");
 
//Requerimiento para que funcione mysqli_query($link, $query);
$link = mysqli_connect('localhost', 'root', "Juf13KpD", 'controldepersonal');
mysqli_set_charset($link, "utf8");
 
$mysqli = new mysqli('localhost', 'root', "Juf13KpD", 'controldepersonal');
 
?> 

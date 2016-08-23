<?php
include "conexion_folios.php";
include "verificar_session.php";
include "style.css";
?>
 
<!-- Formularios HTML con elemento bootstrap como class -->
<div class = "container">
<div class="wrapper">
<form action="" method="post" class="registro">
<TABLE BORDER=0>
 
<TR>
    <TD>Matricula:<TD>
    <TD>
        <INPUT TYPE="text" NAME="matricula" VALUE="" class="form-control" SIZE="15">
    </TD>
 
<TR>
    <TD>Password:<TD>
    <TD>
        <INPUT TYPE="text" NAME="password" VALUE="" class="form-control" SIZE="20">
    </TD>
 
<TR>
    <TD>Nombre:<TD>
    <TD>
        <INPUT TYPE="text" NAME="nombre_usuario" VALUE="" class="form-control" SIZE="40">
    </TD>
 
<TR>
    <TD>
    <input type="submit" name="enviar" class="btn btn-lg btn-primary btn-block" value="Registrar"></div>
    </TD>
 
 
</TABLE>
</FORM>
 
<style>
.wrapper {     
    margin-top: 80px;
    margin-bottom: 20px;
}
 
.form-signin {
  max-width: 920px;
  padding: 30px 38px 66px;
  margin: 0 auto;  
  }
 
.form-signin-heading {
  text-align:center;
  margin-bottom: 30px;
}
 
.form-control {
  position: relative;
  font-size: 16px;
  height: auto;
  padding: 10px;
}
</style>
 
<?php
if(isset($_POST['enviar']))
    {
    $matricula = $_POST['matricula'];
    $password = $_POST['password'];
    $nombre_usuario = $_POST['nombre_usuario'];
    $prioridad = 2;
    
    
    //Almacenado del nuevo usuario en DB
    $results = $mysqli->query("INSERT INTO `usuarios` (`matricula`, `password`, `nombre_usuario`, `prioridad`, `fecha_creacion`) 
                             VALUES  
                            ('$matricula', '$password', '$nombre_usuario', '$prioridad', CURRENT_TIMESTAMP)");
    }
?>

        

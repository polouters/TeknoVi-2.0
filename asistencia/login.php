<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
 
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
 
<?php
include "style.css";
 
session_start();
include_once "conexion_folios.php";
 
function verificar_login($user,$password,&$result) {
    $sql = "SELECT * FROM usuarios WHERE matricula = '$user' and password = '$password'";
    $rec = mysql_query($sql);
    $count = 0;
 
    while($row = mysql_fetch_object($rec))
    {
        $count++;
        $result = $row;
    }
 
    if($count == 1)
    {
        return 1;
    }
 
    else
    {
        return 0;
    }
}
 
if(!isset($_SESSION['userid']))
{
    if(isset($_POST['login']))
    {
        if(verificar_login($_POST['user'],$_POST['password'],$result) == 1)
        {
            $_SESSION['userid'] = $result->id_usuario; //Asigna el id_usuario como llave se session
            
            $timestamp =time();
            //Almacena el timestamp de la session actual
            $results = $mysqli->query("INSERT INTO `expirarsession` (`id_usuario`, `timestamp`, `inicio`)  
                                      VALUES  
                                     ('$result->id_usuario', '$timestamp', '$timestamp')");
    
            header("location:index.php"); //Redireccion tras crear la session
        }
        else
        {
        ?>
        <div class="alert alert-warning alert-dismissible" role="error">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Su usuario o matricula estan incorrectos. Intente nuevamente.
        </div>
        <?php
        }
    }
?>
 
<div class = "container">
<div class="wrapper">
    <form action="" method="post" name="Login_Form" class="form-signin">  
        <div  class="col-xs-3">   
            <input type="text" class="form-control" name="user" placeholder="Matricula" required="" autofocus="" />
        </div>
        
        <div  class="col-xs-3">
            <input type="password" class="form-control" name="password" placeholder="Password" required=""/>  
        </div>
        
        <div class="col-xs-3">
        <button class="btn btn-lg btn-primary btn-block"  name="login" value="Login" type="Submit">Login</button>
        </div>
    </form>
 
<style>
 
.wrapper {     
    margin-top: 80px;
    margin-bottom: 20px;
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
 
input[type="text"] {
  margin-bottom: 0px;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}
 
input[type="password"] {
  margin-bottom: 20px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
 
.colorgraph {
  height: 7px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
</style>
<?php
} else {
    echo 'Su usuario ingreso correctamente.';
    echo '<a href="logout.php">Logout</a>';
}
?>

        

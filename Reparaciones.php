<?php
require_once __DIR__.'/raiz.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TeknoVi</title>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-primary navbar-fixed-top  bg-primary">
        <div class="container-fluid ">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll c-default" href="<?php echo url::getRaiz();?>">TeknoVi</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1 ">
                <ul class="nav navbar-nav navbar-right">
                     <li>
                        <a  class="c-default menu" href="<?php echo url::getRaiz();?>/index.php#about">Quienes somos?</a>
                    </li>
                    <li>
                        <a class="c-default menu" href="<?php echo url::getRaiz();?>/index.php#services">Servicios</a>
                    </li>
                   
                    <li>
                        <a class="c-default menu" href="<?php echo url::getRaiz();?>/index.php#contact">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>



    <section  id="about" class="p100">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <h2 class="section-heading c-primary" >Reparaciones</h2>
                    <i class="fa fa-5x fa-cog c-primary sr-icons "></i>
                    <hr class="primary">
                    <p class="text-muted text-justify">La tecnología se rompe cuando quiere, y a nadie le apetece estar dando vueltas por Vitoria buscando la tienda idónea para que le vendan o le arreglen su dispositivo. De ahí nace TeknoVi, una empresa que, con una llamada, te da consulta gratuita al momento y te lo arregla en tu casa. Si la reparación es para largo, nos lo llevamos con nosotros y, en un periodo  corto de tiempo, lo tienes como nuevo otra vez; Fácil y sencillo.<br><br>
                     </p>
                     <br><br><br><br>
         <div class="col-lg-6">
                    <h2 class="section-heading text-left" >Nuestros servicios mas solicitados:</h2>
                    <br>
                    <p class="text-muted text-left ">Limpieza del dispositivo o formateo <br>Reinstalación al gusto <br> Todo en uno (Formateo+reinstalacion) <br> </p>
                    </div>
         <div class="col-lg-6">
                    <h2 class="section-heading" >Algo más?</h2>
                    <br>
                    <p class="text-muted">Tienes alguna duda? O simplemente necesitas contratar alguno de nustros servicios?<br>Contacta con nosotros!</p> </div>
                </div>
                <div class="col-xs-12 text-center">
                    <a href="index.php#contact" class="page-scroll btn btn-primary btn-xl sr-button">Contacta con nosotros</a>
                </div>
            </div>
        </div>
        
    </section>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

</body>

</html>

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

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">TeknoVi</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                     <li>
                        <a class="page-scroll" href="#about">Quienes somos?</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Servicios</a>
                    </li>
                   
                    <li>
                        <a class="page-scroll" href="#contact">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                 <img class="imagenH" src="img/Logo_colores_sr2.png" alt="TeknoVi">
                <hr>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Más información</a>
            </div>
        </div>
    </header>

    <section  id="about" class="p100">
        <div class="container">
            <div class="row">
                <p class="text-center">
                    <h2 class="section-heading text-center">Nuestro objetivo: Mantenerte informado</h2>
                    <br>
                    <hr class="primary">
                    <br><br>
                    <p class="text-muted text-center paddingcentro"> Vemos constantemente comercios que, aunque su producto sea compentente y de calidad, tienen la necesidad de cerrar por el hecho de no vender lo suficiente. Uno de los motivos principales de que ocurra esto es por la falta de publicidad de la misma. Nosotros consideramos que la mejor manera de hacerse ver hoy en día es a través de la web, pero los costes de publicitarse en esta herramienta suelen ser altos.Por eso, y dirigido para esos comerciantes, nace TeknoVi, una empresa que crea aplicaciones web de calidad y ajustadas a las necesidades del consumidor de hoy en día. <br><br>Y si, aparte de crear webs para empresas te interesa resolver alguna duda relacionada con la informática o necesitas asesoramiento, aquí estamos para lo que quieras.
                    <br><br><br><br>
                    <a href="#services" class="page-scroll btn btn-primary btn-xl sr-button col-xs-12 col-md-4 col-md-offset-1">Nuestros servicios</a>
                    <br class="hidden-md hidden-lg"><br class="hidden-md hidden-lg"><br class="hidden-md hidden-lg"><br class="hidden-md hidden-lg">
                     <a href="#contact" class="page-scroll btn btn-primary btn-xl sr-button col-xs-12 col-md-4 col-md-offset-1">Contacta con nosotros</a>
                   

            </div>
        </div>
    </section>
    
    <section class="bg-primary p100" id="services" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Nuestros servicios</h2>
                    <hr class="light">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <div class="service-box">
                       <i class="fa fa-4x fa-gitlab  sr-icons"></i>
                        <a href="<?php echo url::getRaiz();?>/DAW.php" class="servicios"><h3>Desarrollo de Aplicaciones y Web</h3></a>

                        <p class="text-faded">Creamos todo tipo de aplicaciones  hechas a medida.</p>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-cog  sr-icons"></i>
                        <a href="<?php echo url::getRaiz();?>/Reparaciones.php" class="servicios"><h3> Reparaciones</h3></a>
                        <p class="text-faded">Si tu ordenador, movil, tablet u otro producto tecnológico necesita echar un vistazo, éste es tu sitio.</p>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-question  sr-icons"></i>
                        <a href="<?php echo url::getRaiz();?>/Dudas.php" class="servicios"><h3>Dudas</h3></a>
                        <p class="text-faded">Tienes alguna duda relacionada con el mundo de la tecnologia o no te decides con qué hosting quedarte para tu web? Consúltalo en nuestras redes! </p>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-shopping-bag  sr-icons"></i>
                        <a href="<?php echo url::getRaiz();?>/Shopper.php" class="servicios"><h3>Personal Shopper</h3></a>
                        <p class="text-faded">Si no te decides con qué comprar a nivel tecnológico, nosotros te asesoramos al mejor precio.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="p100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Servicio barato, rápido y eficaz </h2>
                    <hr class="primary">
                    <p>Tienes alguna duda? O simplemente necesitas contratar alguno de nustros servicios?<br>Contacta con nosotros!</p>
                </div>
                
                <div class="col-md-4 text-center">
                    <i class="fa fa-whatsapp fa-3x sr-contact"></i>
                    <p>681602265</p>
                </div>
                 <div class="col-md-4 text-center">AM
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>688888888</p>
                </div>
                <div class="col-md-4 text-center">PM
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>681602803</p>
                </div>
                <div class="col-md-2 col-lg-offset-1 text-center">
                	<i class="fa fa-facebook fa-3x sr-contact"></i>
                	<p><a href="https://www.facebook.com/TeknoVitoria/?notif_t=page_admin&notif_id=1471867389264873">
                	TeknoVi</a></p>
                </div>
                <div class="col-md-2 col-lg-offset-2 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:teknovi@outlook.es">info@teknovi.es</a></p>
                </div>
                <div class="col-md-2 col-lg-offset-2 text-center">
                    <i class="fa fa-instagram fa-3x sr-contact"></i>
                    <p><a href="https://www.instagram.com/teknovi_/">@TeknoVi_</a></p>
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

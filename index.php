  <?php 
    include_once('include/connection.php');

    $servidor = 'localhost';
    $user = 'root';
    $pass = '';
    $name = 'db_portfoliogame';
    conectar($servidor, $user, $pass, $name);

    include_once('fnctnsall.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Enigma Team | Portal</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.ico">
</head><!--/head-->

<body>

  <!--.preloader-->
  <!--div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div-->
  <!--/.preloader-->

  <header id="home">
    <div class="main-nav navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <h1><!--img class="img-responsive" src="images/logo.png" alt="logo"--></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll active"><a href="#home">Inicio</a></li>
            <li class="scroll"><a href="#project">Proyectos</a></li>
            <li class="scroll"><a href="#twitter">Nosotros</a></li> 
            <li class="scroll"><a href="#about-us">Enigma™</a></li>
            <li class="scroll"><a href="#portfolio">Portfolio</a></li>
            <li class="scroll"><a href="#contact">Contactános</a></li>       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(images/slider/2a32b2b191303fded7a6e1c2f70bc51ccd86b621.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">ENIGMA<span>™</span></h1>
            <p class="animated fadeInRightBig">desarrollo de software y videojuegos</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Empezar</a>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/ingenieria-software.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">ENIGMA<span>™</span></h1>
            <p class="animated fadeInRightBig">desarrollo de software y videojuegos</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Empezar</a>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/4.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">ENIGMA<span>™</span></h1>
            <p class="animated fadeInRightBig">desarrollo de software y videojuegos</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Empezar</a>
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>
    </div><!--/#home-slider-->
  </header><!--/#home-->

  <section id="project">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Proyectos Recientes</h2>
          <p>Enigma™, trabaja constantemente en el desarrollo de diversos proyectos, de manera colectiva e individualmente dentro del grupo, date una vuelta por esta seccion y mira lo mas reciente que hemos desarrollado.</p>
        </div>
      </div>
      <div class="blog-posts">
        <div class="row">
          <?php damepost(); ?>                
        </div>
        <!--div class="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
          <a href="#" class="btn-loadmore"><i class="fa fa-repeat"></i> Load More</a>
        </div-->
      </div>
    </div>
  </section><!--/#blog-->

  <section id="twitter" class="parallax">
    <div>
      <a class="twitter-left-control" href="#twitter-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="twitter-right-control" href="#twitter-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="twitter-icon text-center">
              <h4>Sobre Nosotros</h4>
            </div>
            <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <p>Enigma™ es el grupo de desarrollo de videojuegos pertenecientes a la universidad continental formado en julio del 2015</span> </a></p>
                </div>
                <div class="item">
                  <p>Enigma cuenta con un grupo de esudiantes con habilidades diversas, capaces de complementarse para el desarrollo de diversos proyectos<a href="#"><span></span></a></p>
                </div>
              </div>                        
            </div>                    
          </div>
        </div>
      </div>
    </div>
  </section><!--/#twitter-->

  <section id="team" style="margin-top:100px">
    <div class="container">
      <div class="team-members">
        <div class="row">
          <?php dameparticipantes(); ?>
        </div>
        <div class="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
          <a href="team.php" class="btn-loadmore"><i class="fa fa-repeat"></i> Conocer a todos</a>
        </div>
      </div>            
    </div>
  </section><!--/#team-->

<style>
  .cortar{
  width:100%;
  height:120px;
  text-overflow:ellipsis;
  overflow:hidden; 
}
</style>

  <?php include_once('footerpage.php'); ?>
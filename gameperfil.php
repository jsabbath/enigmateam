<?php 

  $idamegame = $_SESSION['codigo'] = $_POST['codcod'];
  
  include_once('include/connection.php');

  $servidor = 'localhost';
  $user = 'root';
  $pass = '';
  $name = 'db_portfoliogame';
  conectar($servidor, $user, $pass, $name);

   
  $idamegame = $_SESSION['codigo'] = $_POST['codcod'];

  $consulta_mysql="
      SELECT
        *
      from 
      tb_game
      where tb_game.intidgame = '$idamegame';
      ";
      $resultado_consulta_mysql=mysql_query($consulta_mysql);
      while($registro = mysql_fetch_array($resultado_consulta_mysql)){
         $namegame = $registro['nvchnombre'];
         $descripcion = $registro['nvchdescripcion'];
         $pitch = $registro['nvchlinkspot'];
   }



function screenshootforgame(){
  $idamegame = $_SESSION['codigo'] = $_POST['codcod'];//codgio de consulta
  $consulta_mysql="
      SELECT tb_screenshoot.img 
        from tb_screenshoot 
      where idgamename = '$idamegame';
      ";
      $resultado_consulta_mysql=mysql_query($consulta_mysql);
      while($registro = mysql_fetch_array($resultado_consulta_mysql)){
        echo '<div data-wow-duration="1000ms" data-wow-delay="300ms">
                <img src="images/game/'.$registro['img'].'" data-wow-duration="1000ms" data-wow-delay="300ms">
              </div>';
   }
}


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

  <link rel="stylesheet" type="text/css" href="./slick/slick.css">
  <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">


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
    <div class="main-nav navbar-fixed-top"  style="border-bottom: solid 5px white">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <h1><img class="img-responsive" src="images/logo.png" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll"><a href="#home">Home</a></li>
            <li class="scroll"><a href="#services">Service</a></li> 
            <li class="scroll"><a href="#about-us">About Us</a></li>                     
            <li class="scroll"><a href="#portfolio">Portfolio</a></li>
            <li class="scroll active"><a href="#team">Team</a></li>
            <li class="scroll"><a href="#blog">Blog</a></li>
            <li class="scroll"><a href="#contact">Contact</a></li>       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->	

  
  <br>
  <br>
  <section id="blog">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2><?php echo $namegame; ?></h2>
          <div style='height: 10px;border-bottom: 3px solid gray;margin-bottom: 40px;'></div>
          <div style='text-align: left;'><?php echo $descripcion; ?></div>
        </div>
      </div>
      <div class="row" style="margin-bottom: -100px">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2 style='text-transform: uppercase;'>Capturas de Pantalla</h2>
          <div style='height: 10px;border-bottom: 3px solid gray;margin-bottom: 40px;'></div>
          <!--style slider horizontal-->
            <style type="text/css">
              * {
                box-sizing: border-box;
              }

              .slider {
                  width: 100%;
                  margin-top: 0px;
              }

              .slick-slide {
                margin: 0px 20px;
              }

              .slick-slide img {
                width: 100%;
              }

              .slick-prev:before,
              .slick-next:before {
                  color: gray;
              }
            </style><!-- ENDstyle slider horizontal-->
        </div>
      </div>
      <div class="variable slider" style="margin-top: 100px" data-wow-duration="1000ms" data-wow-delay="300ms">
            <?php screenshootforgame(); ?>
      </div>
      <br>
      <br>
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2 style='text-transform: uppercase;'>Video</h2>
          <div style='height: 10px;border-bottom: 3px solid gray;margin-bottom: 40px;'></div>
          <?php echo $pitch; ?>
        </div>
      </div>
    </div>
    
    <br>
<?php include('footerpage.php'); ?>

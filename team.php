<?php 
  include_once('include/connection.php');

  $servidor = 'localhost';
  $user = 'root';
  $pass = '';
  $name = 'db_portfoliogame';
  conectar($servidor, $user, $pass, $name);

  function dameparticipantes(){
          $consulta_mysql="
          SELECT 
          *
          from tb_persona
          ORDER BY `tb_persona`.`nvchapellido` ASC
          ";
          $resultado_consulta_mysql=mysql_query($consulta_mysql);
          while($registro = mysql_fetch_array($resultado_consulta_mysql)){
              echo "
          <form action='perfil.php' method='POST' style='margin:10px'>   
            <div class='col-sm-3' style='margin-bottom:50px'>
              <div class='team-member wow flipInY' data-wow-duration='1000ms' data-wow-delay='300ms'>
                <div class='member-image'>
                  <img class='img-responsive' src='images/team/".$registro['nvchphoto']."' alt='' style='height:250px; width:250px; margin:0 auto; border-radius:50%'>
                </div>
                <div class='member-info'>
                  <input type='text' class='hidden' value='".$registro['intidpersona']." ' name='codigo'>
                  <h3 style='text-transform:uppercase'>".$registro['nvchnombres']."</h3>
                  <h4 style='text-transform:uppercase'>".$registro['nvchapellido']."</h4>
                  <!--p>CEO, cargo skills</p-->
                </div>
                <div class='social-icons'>
                  <ul>
                    <li><a class='facebook' href='#'><i class='fa fa-facebook'></i></a></li>
                    <li><a class='twitter' href='#'><i class='fa fa-twitter'></i></a></li>
                    <!--li><a class='googleplus' href='#'><i class='fa fa-googleplus'></i></a></li-->
                    <!--li><a class='dribbble' href='#''><i class='fa fa-dribbble'></i></a></li>
                    <li><a class='rss' href='#'><i class='fa fa-rss'></i></a></li-->
                  </ul>
                </div>
                <br>
                <input type='submit' class='btn' value='Saber más' style='background-color: #E91E63;color: white;text-transform: uppercase;padding-right: 20px;padding-left: 20px; margin-top:-15px'>      
              </div>
            </div>
          </form>
              ";
        }
    }

  function damepost(){
      $consulta_mysql="
          SELECT
            tb_game.intidgame,
            tb_game.nvchnombre,
            tb_game.nvchdescripcion,
            tb_game.nvchbanner,
            tb_game.nvchfecha
          from 
          tb_game
          limit 4
          ";
          $resultado_consulta_mysql=mysql_query($consulta_mysql);
          while($registro = mysql_fetch_array($resultado_consulta_mysql)){
             echo "
              <form action='' method='POST'>
                <div class='col-sm-4 wow fadeInUp' data-wow-duration='1000ms' data-wow-delay='400ms' style='margin-bottom:30px'>
                  <div class='post-thumb'>
                    <a href='#'><img class='img-responsive' src='images/blog/1.jpg' alt=''></a> 
                    <div class='post-meta'>
                      <span><i class='fa fa-comments-o'></i> 3 Comments</span>
                      <span><i class='fa fa-heart'></i> 0 Likes</span> 
                    </div>
                    <div class='post-icon'>
                      <i class='fa fa-pencil'></i>
                    </div>
                  </div>
                  <div class='entry-header'>
                    <h3><a href='#'>".$registro['nvchnombre']."</a></h3>
                    <span class='date'>".$registro['nvchfecha']."</span>
                    <!--span class='cetagory'>in <strong>Photography</strong></span-->
                  </div>
                  <div class='entry-content'>
                    <p>".$registro['nvchdescripcion']."</p>
                  </div>
                </div>
              </form>
              " ;
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
  <section id="twitter" class="parallax">
    <div>
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="twitter-icon text-center">
              <h4>Enigma TM</h4>
            </div>
            <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active wow fadeIn" data-wow-duration="500ms" data-wow-delay="300ms">
                  <p>Enigma es el grupo de desarrollo de videojuegos pertenecientes a la UC</span> </a></p>
                </div>
                <div class="item">
                  <p>Enigma cuenta con un grupo de estudiantes con habilidades diversas<a href="#"><span></span></a></p>
                </div>
              </div>                        
            </div>                    
          </div>
        </div>
      </div>
    </div>
  </section><!--/#twitter-->

  <section id="team">
  <br><br><br><br>
    <div class="container">
      <div class="row">
        <!--div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Enigma TM</h2>
          <p>Te presentamos a los integrantes de Enigma TM.</p>
        </div-->
      </div>
      <div class="team-members">
        <div class="row">
          <?php dameparticipantes(); ?>
        </div>
      </div>            
    </div>
  </section><!--/#team-->

  <section id="blog">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Proyectos Recientes</h2>
          <p>Enigma TM, trabaja constantemente en el desarrollo de diversos proyectos, de manera colectiva e individualmente dentro del grupo, date una vuelta por esta seccion y mira lo mas reciente que hemos desarrollado.</p>
        </div>
      </div>
      <div class="blog-posts">
        <div class="row">
          <?php damepost(); ?>                  
        </div>
        <div class="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
          <a href="#" class="btn-loadmore"><i class="fa fa-repeat"></i> VER MÁS</a>
        </div>                
      </div>
    </div>
  </section><!--/#blog-->

 <?php include_once('footerpage.php'); ?>
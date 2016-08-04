<?php 
  $_SESSION["usuarioid"] = $_POST['codigo'];

  include_once('include/connection.php');

  $servidor = 'localhost';
  $user = 'root';
  $pass = '';
  $name = 'db_portfoliogame';
  conectar($servidor, $user, $pass, $name);

    function dameparticipantes(){
      	$iduser = $_SESSION["usuarioid"] = $_POST['codigo'];

          $consulta_mysql="
          SELECT 
          *
          from tb_persona where intidpersona = '$iduser';
          ";
          $resultado_consulta_mysql=mysql_query($consulta_mysql);
          while($registro = mysql_fetch_array($resultado_consulta_mysql)){
              echo "
		          <div class='col-sm-5'>
		            <div class='team-member wow flipInY' data-wow-duration='1000ms' data-wow-delay='300ms'>
		              <div class='member-image'>
		                <img style='width:200px; margin: 0 auto' class='img-responsive' src='images/team/1.jpg' alt=''>
		              </div>
		              <div class='member-info'>
		                <h3 style='text-transform:uppercase'>".$registro['nvchnombres']."</h3>
		                <h4 style='text-transform:uppercase; '>".$registro['nvchapellido']."</h4>
		                <p>	
		                	<label for=''>Dirección: ".$registro['nvchdireccion']."</label><br>
		                	<label for=''>e-mail: ".$registro['nvchcorreo']."</label><br>
		                	<label for=''>Cel: ".$registro['nvchphone']."</label>
		                </p>
		              </div>
		              <div class='social-icons'>
		                <ul>
		                  <li><a style='border-radius:50%; background-color:#425592;' class='facebook' href='".$registro['nvchfcbk']."'><i class='fa fa-facebook'></i></a></li>
		                  <li><a style='border-radius:50%; background-color: #32beed;' class='twitter' href='".$registro['nvchtwttr']."'><i class='fa fa-twitter'></i></a></li>
		                  <!--li><a class='googleplus' href='#'><i class='fa fa-googleplus'></i></a></li-->
		                  <!--li><a class='dribbble' href='#''><i class='fa fa-dribbble'></i></a></li>
		                  <li><a class='rss' href='#'><i class='fa fa-rss'></i></a></li-->
		                </ul>
		              </div>
		              <div>
		              	<input type='submit' value='Detalles' class='btn-loadmore' style='width:100%'>
		              </div>
		            </div>
		          </div>
		              ";
        }
    }

    function dameskills(){
      	$iduser = $_SESSION["usuarioid"] = $_POST['codigo'];
          $consulta_mysql="
			SELECT
			  *
			FROM
			  tb_skillme
			 where 
			 intidpersona = '$iduser';
          ";
          $resultado_consulta_mysql=mysql_query($consulta_mysql);
          while($registro = mysql_fetch_array($resultado_consulta_mysql)){
              echo "
	            <div class='single-skill wow fadeInDown' data-wow-duration='1000ms' data-wow-delay='300ms'>
	              <p class='lead'>
					".$registro['nvchskillname']."
	              </p>
	              <div class='progress'>
	                <div class='progress-bar progress-bar-primary six-sec-ease-in-out' role='progressbar'  aria-valuetransitiongoal='".$registro['nvchporcentaje']."'>
	                ".$registro['nvchporcentaje']."%
	                </div>
	              </div>
	            </div>
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

  <section  id="mesklls"  style="margin-top: -50px">
  
  <br>

    <div class="container">
      <div class="team-members">
        <div class="row">
          <?php dameparticipantes(); ?>
	      <div class="col-sm-7">
	          <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
	          	<?php dameskills(); ?>
	          </div>
	      </div>
        </div>
      </div>            
    </div>
  </section><!--/#team-->


  <section id="twitter" class="parallax">
    <div>
      <a class="twitter-left-control" href="#twitter-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="twitter-right-control" href="#twitter-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="twitter-icon text-center">
              <!--i class="fa fa-twitter"></i-->
              <h4>Enigma TM</h4>
            </div>
            <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <p>Enigma es el grupo de desarrollo de videojuegos pertenecientes a la UC</span> </a></p>
                </div>
                <div class="item">
                  <p>Enigma cuenta con un grupo de estudiantes con habilidades diversas<a href="#"><span></span></a></p>
                </div>
                <div class="item">
                  <p>Enigma TM, Siempre innovando...<a href="#"><span></span></a></p>
                </div>
                <div class="item">
                  <p>Enigma TM, siempre creando...<a href="#"><span></span></a></p>
                </div>
                <div class="item">
                  <p>Enigma TM, siempre investigando...<a href="#"><span></span></a></p>
                </div>
              </div>                        
            </div>                    
          </div>
        </div>
      </div>
    </div>
  </section><!--/#twitter-->

  <section id="blog">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Mis proyectos recientes </h2>
          <p>Esta es la lista de proyectos recientes los cuales desarrolle y/o participe.</p>
        </div>
      </div>
      <div class="blog-posts">
        <div class="row">
        	<?php damepost(); ?>   
        </div>
        <div class="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
          <a style='border: 2px solid #1f9cd2;' href="#" class="btn-loadmore"><i class="fa fa-repeat"></i> Deseo ver todos</a>
        </div>                
      </div>
    </div>
  </section><!--/#blog-->

<?php include_once('footerpage.php'); ?>
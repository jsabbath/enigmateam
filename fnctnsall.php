<?php 
//fnctnsall.php
  function dameparticipantes(){
          $consulta_mysql="
          SELECT 
          *
          from tb_persona
          limit 3
          ";
          $resultado_consulta_mysql=mysql_query($consulta_mysql);
          while($registro = mysql_fetch_array($resultado_consulta_mysql)){
              echo "
              <div class='col-sm-4'>
                <div class='team-member wow flipInY' data-wow-duration='1000ms' data-wow-delay='300ms'>
                  <div class='member-image'>
                    <img style='width:200px; margin: 0 auto' class='img-responsive' src='images/team/1.jpg' alt=''>
                  </div>
                  <div class='member-info'>
                    <h3 style='text-transform:uppercase'>".$registro['nvchnombres']."</h3>
                    <h4 style='text-transform:uppercase; '>".$registro['nvchapellido']."</h4>
                    <p>
                      <label for=''>e-mail: ".$registro['nvchcorreo']."</label><br>
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
              <form action='gameperfil.php' method='POST'>
                <div class='col-sm-4 wow fadeInUp' data-wow-duration='1000ms' data-wow-delay='400ms' style='margin-bottom:30px'>
                  <div class='post-thumb'>
                    <img class='img-responsive' src='images/blog/1.jpg' alt=''>
                    <div class='post-meta'>
                      <span><i class='fa fa-comments-o'></i> 3 Comments</span>
                      <span><i class='fa fa-heart'></i> 0 Likes</span> 
                    </div>
                    <div class='post-icon'>
                      <i class='fa fa-pencil'></i>
                    </div>
                  </div>
                  <div class='entry-header'>
                    <input type='hidden' value='".$registro['intidgame']."' name='codcod'>
                    <h3 style='color:#028fcc'>".$registro['nvchnombre']."</h3>
                    <span class='date'>".$registro['nvchfecha']."</span>
                    <!--span class='cetagory'>in <strong>Photography</strong></span-->
                  </div>
                  <div class='entry-content'>
                    <p>".$registro['nvchdescripcion']."</p>
                  </div>
                  <div>
                    <input type='submit' value='Detalles' class='btn-loadmore' style='width:100%'>
                  </div>
                </div>
              </form>
              " ;
          }
  }

 ?>
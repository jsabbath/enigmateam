<?php 
//fnctnsall.php
  function dameparticipantes(){
          $consulta_mysql="
          SELECT 
          *
          from tb_persona
          limit 4
          ";
          $resultado_consulta_mysql=mysql_query($consulta_mysql);
          while($registro = mysql_fetch_array($resultado_consulta_mysql)){
              echo "
              <div class='col-sm-3'>
                <div class='team-member wow flipInY' data-wow-duration='1000ms' data-wow-delay='300ms'>
                  <div class='member-image'>
                    <img style='height:250px; width:250px; margin:0 auto; border-radius:50%;' class='img-responsive' src='images/team/".$registro['nvchphoto']."' alt=''>
                  </div>
                  <div class='member-info'>
                    <h3 style='text-transform:uppercase'>".$registro['nvchnombres']."</h3>
                    <h4 style='text-transform:uppercase; '>".$registro['nvchapellido']."</h4>
                    <p>
                      <label for=''><span class='glyphicon glyphicon-envelope' aria-hidden='true'></span> ".$registro['nvchcorreo']."</label><br>
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
          tb_game.nvchfecha,
          tb_screenshoot.img
        FROM
          tb_game INNER join tb_screenshoot
          on tb_screenshoot.idgamename = tb_game.intidgame
        group by tb_game.intidgame
        LIMIT 4
          ";
          $resultado_consulta_mysql=mysql_query($consulta_mysql);
          while($registro = mysql_fetch_array($resultado_consulta_mysql)){
             echo "
              <form action='gameperfil.php' method='POST'>
                <div class='col-sm-4 wow fadeInUp' data-wow-duration='1000ms' data-wow-delay='400ms' style='margin-bottom:30px'>
                  <div class='post-thumb'>
                    <img class='img-responsive' src='images/game/".$registro['img']."' alt=''>
                    <div class='post-meta'>
                      <!--span><i class='fa fa-comments-o'></i> 3 Comments</span>
                      <span><i class='fa fa-heart'></i> 0 Likes</span--> 
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
                  <div class='entry-content cortar'>
                    ".$registro['nvchdescripcion']."
                  </div>
                  <div>
                    <input style='transition: all .5s' type='submit' value='Detalles' class='btn-loadmore' style='width:100%'>
                  </div>
                </div>
              </form>
              " ;
          }
  }

 ?>
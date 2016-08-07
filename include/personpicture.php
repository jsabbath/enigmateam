<?php 
	include('panelheader.php'); 
	
	include_once('connection.php');
	$servidor = 'localhost';
	$user = 'root';
	$pass = '';
	$name = 'db_portfoliogame';
	conectar($servidor, $user, $pass, $name);


	function damelasfoto(){
		$consulta_mysql="
		    SELECT
			  tb_persona.nvchapellido,
			  tb_persona.nvchnombres,
			  tb_persona.nvchphoto
			FROM
			  tb_persona
		    ";
		    $resultado_consulta_mysql=mysql_query($consulta_mysql);
		    while($registro = mysql_fetch_array($resultado_consulta_mysql)){
		        echo "
	              <div class='col-sm-3' style='margin-top: 30px; margin-bottom: 30px;'>
	                <div class='team-member wow flipInY' data-wow-duration='1000ms' data-wow-delay='300ms'>
	                  <div class='member-image'>
	                    <img style='height:170px; width: 170px; border-radius: 50%; margin: 0 auto' class='img-responsive' src='../images/team/".$registro['nvchphoto']."' alt=''>
	                  </div>
	                  <div class='member-info'>
	                    <h5 style=''>".$registro['nvchnombres']." ".$registro['nvchapellido']."</h5>
	                  </div>
	                </div>
	              </div>      
		        ";
		    }
	}


	function damecombopersonas(){
		$consulta_mysql="
		    SELECT
			  tb_persona.intidpersona,
			  tb_persona.nvchapellido,
			  tb_persona.nvchnombres
			FROM
			  tb_persona
		    ";
		    $resultado_consulta_mysql=mysql_query($consulta_mysql);
		    while($registro = mysql_fetch_array($resultado_consulta_mysql)){
		        echo "
		              <option style='text-transform:uppercase' value='".$registro['intidpersona']."'>
		              	".$registro['nvchnombres']." ".$registro['nvchapellido']."
		              </option>
		        ";
		    }
	}


	function codigorandom(){
		$caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890"; //posibles caracteres a usar
		$numerodeletras=50; //numero de letras para generar el texto
		$cadena = ""; //variable para almacenar la cadena generada
		for($i=0;$i<$numerodeletras;$i++)
		{
		    $cadena .= substr($caracteres,rand(0,strlen($caracteres)),1); /*Extraemos 1 caracter de los caracteres 
		entre el rango 0 a Numero de letras que tiene la cadena */
		}
		echo $cadena;
	}
?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">	
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
					<li class="active">Tables</li>
				</ol>
			</div><!--/.row-->
			<br>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">Foto de Perfil</div>
						<div class="panel-body">
							<div class="col-md-6">
								<form action="subirfoto.php" method="post" class="pure-form pure-form-stacked" style="margin-bottom:30px;" enctype="multipart/form-data">
									<label for="">Persona</label><br>
									<select name="intidpersona" id="" class="form-control">
										<?php damecombopersonas(); ?>
									</select>
									<br>
				                    <label for="">Seleccionar foto</label>
				                    <input style='text-transform: uppercase;' class="form-control" type="file" name="nvchnombres" value="<?php codigorandom(); ?>" style="width:100%;" required />
				                    <!--label for=""><?php codigorandom(); ?></label-->
				                    <br>
				                    <button type="submit" class="btn btn-primary">Guardar</button>
				                </form>
							</div>
						</div>
					</div>
				</div><!-- /.col-->
			</div><!-- /.row -->
	</div><!--/.main-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">	
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">Perfiles existentes</div>
						<div class="panel-body">
							<div class="col-md-12">
								<?php damelasfoto(); ?>
							</div>
						</div>
					</div>
				</div><!-- /.col-->
			</div><!-- /.row -->
	</div><!--/.main-->

<?php include_once('panelfooter.php'); ?>
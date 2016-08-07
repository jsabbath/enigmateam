<?php 
	require_once 'connection.php';
	$servidor = 'localhost';
	$user = 'root';
	$pass = '';
	$name = 'db_portfoliogame';
	conectar($servidor, $user, $pass, $name);

	$id = $_POST['intidpersona'];
	$foto = $_FILES["foto"]["name"];

	$ruta = $_FILES["foto"]["tmp_name"];
	$destino = "../images/team/".$foto;

	copy($ruta, $destino);//copear la imagen

	mysql_query("UPDATE tb_persona SET nvchphoto = $foto WHERE intidpersona = $id;");
	
	header("location: personpicture.php");

?>
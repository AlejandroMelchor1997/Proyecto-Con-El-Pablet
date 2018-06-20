<?php
	$id_mensaje = $_REQUEST['id_mensaje'];
	$id_emisor = $_REQUEST['id_usuario'];

	//conexion (segura por encima de la raiz del servidor)
	include('c:\xampp\seguridad\mysql.inc.php');

	//SELECCIONAMOS LA BASE DE DATOS CON LA QUE VAMOS A TRABAJAR
	mysqli_select_db($conexion, 'game-in') or die ('<p>Imposible conectar</p>');

	$sql = "UPDATE mensajes SET ID_USUARIO_EMISOR = 0 WHERE ID_USUARIO_EMISOR = '$id_emisor' AND ID_MENSAJE = '$id_mensaje'";
	$resultado = mysqli_query($conexion, $sql) or die (mysqli_error($conexion));
	
	header("Location:enviados.php");
?>

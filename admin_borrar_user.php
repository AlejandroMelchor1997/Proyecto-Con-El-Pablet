<?php 
	
	$usuarios = $_REQUEST['seleccion'];

	$nomBBDD = "game-in";

		//conexion (segura por encima de la raiz del servidor)
	include('c:\xampp\seguridad\mysql.inc.php');

		//SELECCIONAMOS LA BASE DE DATOS CON LA QUE VAMOS A TRABAJAR
	mysqli_select_db($conexion, $nomBBDD) or die ('<p>Imposible conectar</p>');


	//FOR QUE RECORRA EL ARRAY DE LOS usuarios SELECCIONADOS
	foreach ($usuarios as $value) {

		$sql2 = "DELETE FROM inscripcion WHERE id_usuario = (SELECT id_usuario FROM usuarios WHERE usuario = '$value')";

		$resultado2 = mysqli_query($conexion, $sql2);
		
		//SACO TODAS LAS FILAS DE LA TABLA INSCRIPCION
		$sql = "DELETE FROM usuarios WHERE usuario = '$value'";

		//EJECUTO LA SENTENCIA
		$resultado = mysqli_query($conexion, $sql);

		

	}

	header("Location:administrador.php");


?>
<?php

	//RECOGEMOS LOS DATOS
$nombre = strtolower($_REQUEST['nombre']);
$apellido_1 = strtolower($_REQUEST['apellido_1']);
$apellido_2 = strtolower($_REQUEST['apellido_2']);
$usuario = strtolower($_REQUEST['usuario']);
$email = $_REQUEST['email'];
$contrasena = $_REQUEST['contrasena'];
$validar_contrasena = $_REQUEST['validar_contrasena'];
$fecha_nac = $_REQUEST['fecha_nac'];
$descripcion = $_REQUEST['descripcion'];

		//RECOOGEMOS EL ARRAY DE JUEGOS
$juegos = $_REQUEST['juegos'];

		//DESCRRIPCION

$nomBBDD = "game-in";

	//SI NO FALTA NINGUN DATO ENTRAMOS
	//if(isset($_REQUEST['usuario'], $_REQUEST['usuario'], $_REQUEST['usuario'], $_REQUEST['usuario'], $_REQUEST['usuario'], $_REQUEST['usuario']))
if ($nombre != "" && $apellido_1 != "" && $apellido_2 != "" && $usuario != "" && $email != "" && $contrasena != "" && $validar_contrasena != "" && $fecha_nac != "" ){
	
	
		//conexion (segura por encima de la raiz del servidor)
	include('c:\xampp\seguridad\mysql.inc.php');

		//SELECCIONAMOS LA BASE DE DATOS CON LA QUE VAMOS A TRABAJAR
	mysqli_select_db($conexion, $nomBBDD) or die ('<p>Imposible conectar mai friend</p>');

		//PASAMOS EL USUARIO A MINUSCULAS
		//$usuario = strtolower($usuario);

			//COMPROBAMOS SI EXISTE EN LA BASE DE DATOS
	$sql = "SELECT * FROM usuarios WHERE usuario='".$usuario."'";

			//EJECUTO LA SENTENCIA
	$resultado = mysqli_query($conexion, $sql);

	if (mysqli_num_rows($resultado) == 0) {
		
				//SACO TODAS LAS FILAS DE LA TABLA USUARIOS
		$sql = "SELECT * FROM usuarios";

				//EJECUTO LA SENTENCIA
		$resultado = mysqli_query($conexion, $sql);

				//CUENTO EL NUMERO DE FILAS QUE SALE
		$filas = mysqli_num_rows($resultado);

				//EL ID DE USUARIO SIEMPRE VA A SER UNO MAS DEL NUMERO DE FILAS

				//HAY QUE DEPURAR PARA QUE NO REPITA NUMEROS Y NO CASQUE
		$id_usuario = $filas + 1;

				//HACEMOS LA SENTENCIA PARA INSERTAR EL USUARIO
		$sql = "INSERT INTO usuarios VALUES ('$id_usuario','$nombre','$apellido_1','$apellido_2','$usuario', '$email','$contrasena','$fecha_nac', '$descripcion')";

				//EJECUTO LA SENTENCIA
		$resultado = mysqli_query($conexion, $sql);

				//Usuarios
				//--------------------------------------------------------------
				//Inscripciones

				//FOR QUE RECORRA EL ARRAY DE LOS JUEGOS SELECCIONADOS
		foreach ($juegos as $value) {
					//SACO TODAS LAS FILAS DE LA TABLA INSCRIPCION
			$sql = "SELECT * FROM inscripcion";

					//EJECUTO LA SENTENCIA
			$resultado = mysqli_query($conexion, $sql);

					//CUENTO EL NUMERO DE FILAS QUE SALE
			$filas_inscripcion = mysqli_num_rows($resultado);

					//HAY QUE DEPURAR PARA QUE NO REPITA NUMEROS Y NO CASQUE
			$id_inscripcion = $filas_inscripcion + 1;

					//NUEVA SENTENCIA PARA LOS JUEGOS
			$sql = "INSERT INTO inscripcion VALUES('$id_inscripcion', '$id_usuario', '$value')";

					//EJECUTO LA SENTENCIA
			$resultado = mysqli_query($conexion, $sql);
		}

		?>
		
		<!DOCTYPE html>
		<html>
		<head>
			<title>Game-In</title>
			<meta charset="utf-8">
			
			<!-- ESTO ES PROPIO DE BOOSTRAP, ES NECESARIO PAR QUE FUNCIONE EL RESTO DE COSAS -->
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
			
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
			<!-- HASTA AQUI -->

			<!-- CSS PROPIO -->
			<link rel="stylesheet" type="text/css" href="css/css_index.css">
			<!-- -->

		</head>
		<body>	

			<header>
				<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
					<a class="navbar-brand" href="index_visitors.html">Game-In</a>
				</nav>
			</header>
			<div align="center" style="margin-top: 10%;">

				<h1 align="center" style="color: white">Gracias Por Unirte a Nuestra Comunidad</h1>
				<h3 align="center" style="color: white">El siguiente paso es que vayas a tu perfil para poder completar el registro con tus datos de juego</h3>

				<a href="form_login.php"><button class="btn btn-outline-success my-2 my-sm-0" type="button" style="background-color: rgba(40, 167, 69, 0.8)  !important; color: white;">Entrar</button></a>
			</div>

		</body>
		</html>


		<?php

	}
	else {
		echo "ESTE USUARIO YA EXISTE";
	}		
}
else {
	?>
	<h2 align="center" style="color: white;">No puede haber campos sin rellenar</h2>
	<?php
	include 'form_registro.php';
	
	
	
}

?>

<?php
	
	//RECOGEMOS LOS DATOS
		$nombre = $_REQUEST['usuario'];
		$apellido_1 = $_REQUEST['apellido_1'];
		$apellido_2 = $_REQUEST['apellido_2'];
		$usuario = $_REQUEST['usuario'];
		$email = $_REQUEST['email'];
		$contrasena = $_REQUEST['contrasena'];
		$validar_contrasena = $_REQUEST['validar_contrasena'];
		$fecha_nac = $_REQUEST['fecha_nac'];

		//DESCRRIPCION

		$nomBBDD = "game-in1";

	//SI NO FALTA NINGUN DATO ENTRAMOS
	if ($nombre != "" && $apellido_1 != "" && $apellido_2 != "" && $usuario != "" && $email != "" && $contrasena != "" && $validar_contrasena != "" && $fecha_nac != "" ){
		
		//COMPROBAMOS SI LA CONTRASEÑA ES LA MISMA
		if ($contrasena == $validar_contrasena) {
			
			//conexion (segura por encima de la raiz del servidor)
			include('c:\xampp\seguridad\mysql.inc.php');

			//SELECCIONAMOS LA BASE DE DATOS CON LA QUE VAMOS A TRABAJAR
			mysqli_select_db($conexion, $nomBBDD) or die ('<p>Imposible conectar mai friend</p>');

			//PASAMOS EL USUARIO A MINUSCULAS
			$usuario = strtolower($usuario);

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
				$sql = "INSERT INTO usuarios VALUES ('$id_usuario','$nombre','$apellido_1','$apellido_2','$usuario', '$email','$contrasena','$fecha_nac')";

				//EJECUTO LA SENTENCIA
				$resultado = mysqli_query($conexion, $sql);

				?>
				
					<!DOCTYPE html>
					<html>
					<head>
						<title>Game-In</title>
						<meta charset="utf-8">
						
						<!-- ESTO ES PROPIO DE BOOSTRAP, ES NECESARIO PAR QUE FUNCIONE EL RESTO DE COSAS -->
							<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
					  
					  		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
						<!-- HASTA AQUI -->

					  	<!-- CSS PROPIO -->
					  		<link rel="stylesheet" type="text/css" href="../css_php/css_registro.css">
					  	<!-- -->

					</head>
					<body>	

						<header>
							<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
								<a class="navbar-brand" href="../HTML/inicio.html">Game-In</a>
							</nav>
						</header>
						<div align="center" style="margin-top: 10%;">

							<h1 align="center" style="color: white">Gracias Por Unirte a Nuestra Comunidad</h1>
							<h3 align="center" style="color: white">El siguiente paso es que vayas a tu perfil para poder completar el registro con tus datos de juego</h3>

							<a href="../HTML/inicio.html"><button class="btn btn-outline-success my-2 my-sm-0" type="button" style="background-color: rgba(40, 167, 69, 0.8)  !important; color: white;">Entrar</button></a>
						</div>

					</body>
					</html>


				<?php

			}
			else {
				echo "ESTE USUARIO YA EXISTE";
			}
		}
		else{
			echo "LA CONTRASEÑA ES DISTINTA";
		}		
	}
	else {
		echo "TIENEN QUE ESTAR TODOS LOS CAMPOS RELLENOS";
	}

?>

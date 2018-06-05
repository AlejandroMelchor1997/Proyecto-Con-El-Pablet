<?php

	//RECOGEMOS LOS DATOS
	$email = $_REQUEST['email'];
	$contrasena = $_REQUEST['contrasena'];

	$nomBBDD = "game-in1";	

	//SI ESTÁN RELLENOS EMPEZAMOS CON EL CODIGO
	if ($email != "" && $contrasena != "") {

		//conexion (segura por encima de la raiz del servidor)
		include('c:\xampp\seguridad\mysql.inc.php');

		//SELECCIONAMOS LA BASE DE DATOS CON LA QUE VAMOS A TRABAJAR
		mysqli_select_db($conexion, 'game-in') or die ('<p>Imposible conectar mai friend</p>');

		//VAMOS A COMPROBAR SI EL CORREO EXISTE
		$sql = 'SELECT * FROM usuarios WHERE EMAIL = $email';

		//EJECUTO LA SENTENCIA
		$resultado = mysqli_query($conexion, $sql);

		//CUENTO EL NUMERO DE FILAS QUE SALE
		//$filas = mysqli_num_rows($resultado);

		//SI EL CORREO ES IGUAL AL DE LA BBDD ENTRA
		if ($resultado = $email) {
			//SELECCIONAMOS LA PASS
			$sql = 'SELECT contrasena FROM usuarios WHERE email = $email';

			//EJECUTO LA SENTENCIA
			$resultado = mysqli_query($conexion, $sql);

			//SI LA CONTRASEÑA ES IGUAL A LA DE LA BASE DE DATOS ENTRA
			if ($resultado = $contrasena) {
				
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
							<h1 align="center" style="color: white">Bienvenido</h1>

							<a href="HTML/inicio.html"><button class="btn btn-outline-success my-2 my-sm-0" type="button" style="background-color: rgba(40, 167, 69, 0.8)  !important; color: white;">Entrar</button></a>
						</div>

					</body>
					</html>


				<?php

			}
			else {
				echo "CONTRASEÑA INCORRECTA";
			}
		}
		else {
			echo "CORREO ERRONEO";
		}
	}	

?>
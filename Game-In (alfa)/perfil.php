<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<!-- ESTO ES PROPIO DE BOOSTRAP, ES NECESARIO PAR QUE FUNCIONE EL RESTO DE COSAS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<!-- HASTA AQUI -->

	<link rel="stylesheet" type="text/css" href="css/css_index.css">

	

</head>
<body>
	<?php 

	session_start();
	
	if (!isset($_SESSION['usuario'])) {

		header("Location:form_login.php");

	} else{
		//SI LA SESION EXISTE SACA SU VALOR PARA MOSTRARLO
		$nombre_sesion = $_SESSION['usuario'];
	}
	?>
	<header>
		<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
			<a class="navbar-brand" href="index_login.php">Game-In</a>

			<!-- ESTO NO SE PARA QUE VALE -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!-- HASTA AQUI -->

			<!--Desplegable de los juegos -->
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="#">Foro</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Busqueda de jugadores
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">CS-GO</a>
						<a class="dropdown-item" href="#">League of legends</a>
						<a class="dropdown-item" href="#">PUBG</a>
					</div>
				</li>
			</ul>
			<!-- Hasta aqui -->
		</nav>
	</header>

	<!-- CREAMOS EL CONTAINER FLUID PARA QUE OCUPE TODO EL ANCHO DE LA PAGINA -->
	<!-- Y DENTRO CREAMOS OTRO PARA QUE NO OCUPE TODO EL ANCHO Y NOS DEJE UNOS MARGENES -->
	<div class="container-fluid">
		<div class="12-col">
			<!-- DIV QUE OCUPARA LA MITAD DE LA PANTALLA -->
			<div class="info_texto col-6 row" style="margin-left: 25%">
				<div class="col-12">
					<h2 align="center"><?php echo $nombre_sesion ?></h2><br/>

					<?php

					//conexion (segura por encima de la raiz del servidor)
					include('c:\xampp\seguridad\mysql.inc.php');

					//SELECCIONAMOS LA BASE DE DATOS CON LA QUE VAMOS A TRABAJAR
					mysqli_select_db($conexion, 'game-in') or die ('<p>Imposible conectar</p>');
				
					//VAMOS A COMPROBAR SI EL USUARIO EXISTE
					$sql = "SELECT * FROM usuarios WHERE USUARIO = '$nombre_sesion'";

					//EJECUTO LA SENTENCIA
					$resultado = mysqli_query($conexion, $sql) or die (mysqli_error($conexion));

					//LO TRANSFORMO A UN ARRAY
					while($array = mysqli_fetch_assoc($resultado)){
						?>
						Nombre: 
						<?php
							echo $array["NOMBRE"];
						?>
						<br/>Apellidos: 
						<?php
							echo $array["APELLIDO_1"]." ".$array["APELLIDO_2"];
						?>
						<br/>Descripcion:
						<?php
							echo $array["DESCRIPCION"];
						?>
						<br/><br/><br/>
						<?php
					}

					?>

				
				
					<a href="modif_perf.html"><button class="btn btn-outline-success my-2 my-sm-0" type="button" style="background-color: grey; color: white;">Modificar perfil</button><a>	
					</div>
				</div>
			</div>
		</div>


	</body>
	</html>
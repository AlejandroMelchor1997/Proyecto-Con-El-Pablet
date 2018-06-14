<!DOCTYPE html>
<html>
<head>
	<title>Game-In</title>
	<meta charset="utf-8">

	<!-- ESTO ES PROPIO DE BOOSTRAP, ES NECESARIO PAR QUE FUNCIONE EL RESTO DE COSAS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<!-- HASTA AQUI -->

	<!-- CSS PROPIO -->
	<link rel="stylesheet" type="text/css" href="css/css_index.css">
	<!-- -->

</head>
<body>	

	<?php 

		session_start();

		if (!isset($_SESSION['usuario'])) {

			header("Location:form_login.php");
			
		}
	?>
	<header>
		<nav class="navbar navbar-expand-lg navbar-fixed-top navbar-dark bg-dark">
			<a class="navbar-brand" href="index_visitors.html">Game-In</a>

			<!-- ESTO NO SE PARA QUE VALE -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!-- HASTA AQUI -->

			<div class="collapse navbar-collapse" id="navbarSupportedContent">

				<!-- APARTADOS DE LA BARRA -->
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="#">Foro</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Busqueda de jugadores
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="form_registro.html">CS-GO</a>
							<a class="dropdown-item" href="form_registro.html">League of legends</a>
							<a class="dropdown-item" href="form_registro.html">PUBG</a>
						</div>
					</li>
				</ul>
				<!-- HASTA AQUI -->

				<form class="form-inline my-2 my-lg-0">
					<a class="nav-link" href="form_login.html"><button class="btn btn-outline-success my-2 my-sm-0" type="button">Login</button></a>

					<a class="nav-link" href="form_registro.html"><button class="btn btn-outline-success my-2 my-sm-0" type="button">Sign-Up</button></a>
				</form>
			</div>
		</nav>
	</header>
	<div align="center" style="margin-top: 10%;">
		<h1 align="center" style="color: white"><?php echo "Bienvenido ".$_SESSION['usuario']. "<br>"?>
		</h1>

		<a href="index_login.php"><button class="btn btn-outline-success my-2 my-sm-0" type="button" style="background-color: rgba(40, 167, 69, 0.8)  !important; color: white;">Entrar</button></a>
	</div>

</body>
</html>
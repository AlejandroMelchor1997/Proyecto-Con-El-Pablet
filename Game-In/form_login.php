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
  		<link rel="stylesheet" type="text/css" href="css/css_index.css">
  	<!-- -->

</head>
<body>	
	
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
							<a class="dropdown-item" href="form_registro.php">CS-GO</a>
							<a class="dropdown-item" href="form_registro.php">League of legends</a>
							<a class="dropdown-item" href="form_registro.php">PUBG</a>
						</div>
					</li>
				</ul>
				<!-- HASTA AQUI -->

				<form class="form-inline my-2 my-lg-0">
					<a class="nav-link" href="form_login.php"><button class="btn btn-outline-success my-2 my-sm-0" type="button">Login</button></a>

					<a class="nav-link" href="form_registro.php"><button class="btn btn-outline-success my-2 my-sm-0" type="button">Sign-Up</button></a>
				</form>
			</div>
		</nav>
	</header>

	<!--<div class="contenedor_tabla" align="center">-->
		<table align="center" class="tabla_php">
			<form action="login_controller.php" method="POST" class="contenido_tabla">

				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr>
					<td></td><td></td> <td>USUARIO:</td><td><input type="text" name="usuario"></td><td></td><td></td>
				</tr>
				<tr>
					<td></td><td></td> <td>CONSTRASEÑA:</td><td><input type="password" name="password"></td><td></td><td></td>
				</tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr>
					<td colspan="6" align="center"><input type="submit" value="Send"><input type="reset" value="Reset"></td>
				</tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
			</form>
		</table>
	<!--</div>-->

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>In-Game</title>
	<meta charset="utf-8">
	
	<!-- ESTO ES PROPIO DE BOOSTRAP, ES NECESARIO PAR QUE FUNCIONE EL RESTO DE COSAS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<!-- HASTA AQUI -->

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

	<!-- CSS PROPIO -->
	<link rel="stylesheet" type="text/css" href="css/css_index.css">
	<!-- -->

</head>
<body>	
	
	<header>
		<nav class="navbar navbar-expand-lg navbar-fixed-top navbar-dark bg-dark">
			<a class="navbar-brand" href="index_visitors.html">In-Game</a>

			<!-- ESTO NO SE PARA QUE VALE -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!-- HASTA AQUI -->

			<div class="collapse navbar-collapse" id="navbarSupportedContent">

				<!-- APARTADOS DE LA BARRA -->
				<ul class="navbar-nav mr-auto">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Busqueda de jugadores
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="form_registro.php">CS-GO</a>
							<a class="dropdown-item" href="form_registro.php">League of legends</a>
							<a class="dropdown-item" href="form_registro.php">OverWatch</a>
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

	<section>
		<!-- CREAMOS EL CONTAINER FLUID PARA QUE OCUPE TODO EL ANCHO DE LA PAGINA -->
		<div class="container-fluid">
			<!-- CONTENEDOR EN EL QUE LE DECIMOS QUE VA A OCUPAR LAS DOCE COLUMNAS DE LA PAGINA -->
			<div class="col-lg-12 col-md-12">
				<div class="row">
					<div class="info_web">
						<h2>Inserta tus datos para poder disfrutar de la WEB</h2>
					</div>
					<br/>
				</div>
				<div class="row">
					<div class="col-lg-3"></div>
					<div class="col-lg-6">
						<form action="login_controller.php" method="POST" class="info_texto">
							<div class="form-row">
								<div class="form-group col-md-12 was-validated">
									<label for="user">Usuario</label>
									<input type="text" class="form-control" id="usuario_id" name="usuario" placeholder="Usuario" required="">
									<div class="invalid-feedback">
										Usuario vacío
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 was-validated">
									<label for="password">Password</label>
									<input type="password" class="form-control" id="contrasena_id" name="password" placeholder="Password" required="">
									<div class="invalid-feedback">
										Password vacía
									</div>
								</div>
							</div>	 
							
							<div class="form-row">
								<div class="form-group col-md-12">
									<input class="btn btn-dark" type="submit" value="Send">
									<input class="btn btn-dark" type="reset" value="Reset">
								</div>	
							</div>
						</form>

					</div>
					<div class="col-lg-3"></div>
				</div>
			</div>
		</div>
	</section>

</body>
</html>
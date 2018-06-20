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
	
	<script type="text/javascript">
		
		function verificar(){
			
			var nombre = document.getElementById("nombre_id");
			var nompattern = /^[a-zA-Z]+$/;
			if(!(nompattern.test(nombre.value))){
				alert('nombre solo puede contener letras');
				return false;
			}
				
			var apellido1 = document.getElementById("apellido_1_id");	
			if (!(nompattern.test(apellido1.value))) {
				alert('Primer apellido solo puede contener letras');
				return false;
			}

			var apellido2 = document.getElementById("apellido_2_id");	
			if (!(nompattern.test(apellido2.value))) {
				alert('Segundo apellido solo puede contener letras');
				return false;
			}

			var mail = document.getElementById("email_id").value;    
      		var emailPattern = /^[a-zA-Z0-9._-]+\@[a-zA-Z0-9_-]+\.[a-zA-Z]{2,4}$/;  
	        if( !(emailPattern.test(mail))){
				alert("Error, formato de mail incorrecto");
				return false
			}

			var pass1 = document.getElementById("contrasena_id").value;
			var pass2 = document.getElementById("validar_contrasena_id").value;
			var passpattern = /^[a-zA-Z0-9]{6,12}$/;
			if( !(passpattern.test(pass1))){
				alert("Error, formato de contraseña incorrecto: Tiene que tener entre 6 y 12 caracteres y letras y numeros");
				return false
			}
			if (pass1 != pass2) {
				alert("Error al confirmar contraseña");
				return false
			}

			var suma = 0;
			var los_cboxes = document.getElementsByName('juegos[]'); 
			for (var i = 0, j = los_cboxes.length; i < j; i++) {

				if(los_cboxes[i].checked == true){
					suma++;
				}
			}

			if(suma == 0){
				alert('Debe seleccionar al menos un juego');
				return false;
			}

		}

</script>

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

	<!-- CREAMOS EL SECCTION PARA AGRUPAR TODO LO QUE NO ES BARRA DE NAVEGACION -->
	<section>
		<!-- CREAMOS EL CONTAINER FLUID PARA QUE OCUPE TODO EL ANCHO DE LA PAGINA -->
		<div class="container-fluid">
			<!-- CONTENEDOR EN EL QUE LE DECIMOS QUE VA A OCUPAR LAS DOCE COLUMNAS DE LA PAGINA -->
			<div class="col-lg-12 col-md-12">
				<div class="row">
					<div class="info_web">
						<h2>Registrate en GAME-IN para disfrutar de todo el contenido de la Web!!!!</h2>
					</div>

					<br/>
				</div>
				<div class="row">
					<div class="col-lg-3"></div>
					<div class="col-lg-6 col-md-12 col-sm-12" class="tabla_php">
						<form onsubmit="return verificar();" action="register_controller.php" method="POST" class="info_texto" >

							<div class="form-row">
								<div class="form-group col-md-12 was-validated"><span class="glyphicon glyphicon-user"></span>
									<label for="nombre_id">Nombre</label>
									<input type="text" class="form-control" id="nombre_id" name="nombre" placeholder="Nombre" required="">
									
									<div class="invalid-feedback">
										Nombre vacío<span class="glyphicons glyphicons-remove"></span>
									</div>
								</div>
							</div>  
							<div class="form-row">  
								<div class="form-group col-md-6 was-validated">
									<label for="apellidos">Primer Apellido</label>
									<input type="text" class="form-control" id="apellido_1_id" name="apellido_1" placeholder="Primer Apellido" required="">
									<div class="invalid-feedback">
										Primer Apellido vacío
									</div>
								</div>
								<div class="form-group col-md-6 was-validated">
									<label for="apellidos">Segundo Apellido</label>
									<input type="text" class="form-control" id="apellido_2_id" name="apellido_2" placeholder="Segundo Apellido" required="">
									<div class="invalid-feedback">
										Segundo Apellido vacío
									</div>
								</div>
							</div> 
							<div class="form-row">
								<div class="form-group col-md-6 was-validated">
									<label for="user">Usuario</label>
									<input type="text" class="form-control" id="usuario_id" name="usuario" placeholder="Usuario" required="">
									<div class="invalid-feedback">
										Usuario vacío
									</div>
								</div>

								<div class="form-group 	col-md-6 was-validated">
									<label for="email">Email</label>
									<input type="email" class="form-control" id="email_id" name="email" placeholder="ejemplo@ejemplo.com" required="">
									<div class="invalid-feedback">
										Email vacío
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6 was-validated">
									<label for="password">Password</label>
									<input type="password" class="form-control" id="contrasena_id" name="contrasena" placeholder="Password: ejemplo (password123)" required="">
									<div class="invalid-feedback">
										Password vacía
									</div>
								</div>

								<div class="form-group col-md-6 was-validated">
									<label for="confirmPassword">Confirmar Password</label>
									<input type="password" class="form-control" id="validar_contrasena_id" name="validar_contrasena" placeholder="Confirmar Password: ejemplo (password123)" required="">
									<div class="invalid-feedback">
										Confirmar Password vacía
									</div>
								</div>
							</div>	

							<div class="form-row">
								<div class="form-group col-md-6 was-validated">
									<label for="fechaNac">Fecha Nacimiento</label>
									<input type="date" class="form-control" id="fecha_nac_id" name="fecha_nac" required="">
									<div class="invalid-feedback">
										Seleccionar fecha de nacimiento
									</div>
								</div>

								<div class="form-group col-md-6 was-validated">
									<label for="juegos">Juegos</label><br>
									<input type="checkbox" name="juegos[]" value='1' checked="checked">CS-GO
									<input type="checkbox" name="juegos[]" value='2'>LOL 
									<input type="checkbox" name="juegos[]" value='3'>OverWatch
									<div class="invalid-feedback">
										Seleccionar al menos un juego
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 was-validated">
									<label for="nombre">Descripción</label>
									<input type="text" class="form-control" id="descripcion_id" name="descripcion" placeholder="Descripción" required="">
									<div class="invalid-feedback">
										Escribir descripcion
									</div>
								</div>
							</div>   
							<div class="form-row">
								<div class="form-group col-md-12">
									<input class="btn btn-dark" type="submit" value="Send"><input class="btn btn btn-dark" type="reset" value="Reset">
								</div>	
							</div>	


						</form>
					</div>
					<div class="col-lg-3"></div>
				</div>  	
			</div>
		</div>
		<!-- AQUÍ FALTA EL FOOTER, ESTÁ EN OTRO ARCHIVO, PORQUE HAY QUE TRATARLO -->
			<!--<footer>
				inffo y cosas
			</footer>-->
		</section>

	</body>
	</html>
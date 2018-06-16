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

	<!-- ABRO JAVASCRIPT PARA VALIDAR EL FORMULARIO -->
	<!-- <script type="text/javascript">
		function validarFormulario(){
			alert("HOLA QUE TAL");

			//RECOJO LOS DATOS
			var nombre = document.getElementById('nombre_id').value;
			alert("nombre");
			var apellido_1 = document.getElementById('apellido_1_id').value;
			var apellido_2 = document.getElementById('apellido_2_id').value;
			var usuario = document.getElementById('usuario_id').value;
			var email = document.getElementById('email_id').value;
			var contrasena = document.getElementById('contrasena_id').value;
			var validar_contrasena = document.getElementById('validar_contrasena_id').value;
			var fecha_nac = document.getElementById('fecha_nac_id').value;

			//VALIDAMOS QUE LOS CAMPOS NO ESTEN EN BLANCO
			if (nombre == " " || apellido_1 == " " || apellido_2 == " " || usuario == " " || contrasena == " " || validar_contrasena == " " || fecha_nac== " ") {
				alert("TODOS LOS CAMPOS SON OBLIGATORIOS");
			} else{

			}

/*
			if(nombre.length>20){
				alert("El nombre no puede contener mas de 20 caracteres");
			}
			if(apellido_1.length>50){
				alert("Los apellidos no pueden sobrepasar los 50 caracteres");
			}
			if(apellido_2.length>50){
				alert("Los apellidos no pueden sobrepasar los 50 caracteres");
			}
*/
		}

		/*function validaNombre(){
			var nombre = document.getElementById('nombre').value;

			if (nombre == " "){
				alert("TODOS LOS CAMPOS SON OBLIGATORIOS");
			}
		}*/
	</script>-->

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
					<table align="center" class="tabla_php">
						<form onsubmit="return validarFormulario()" action="register_controller.php" method="GET" class="contenido_tabla" >

							<!-- FALTA EL CORREO Y UNA DESCRIPCION -->
							<tr><td></td></tr>
							<tr><td></td></tr>
							<tr>
								<td></td><td></td><td>NOMBRE:</td><td><input type="text" id="nombre_id" name="nombre" onblur="validaNombre()"></td><td></td><td></td>
							</tr>
							<tr>
								<td></td><td></td><td>PRIMER APELLIDO:</td><td><input type="text" id="apellido_1_id" name="apellido_1"></td><td></td><td></td>
							</tr>
							<tr>
								<td></td><td></td>	<td>SEGUNDO APELLIDO:</td><td><input type="text" id="apellido_2_id" name="apellido_2"></td><td></td><td></td>
							</tr>
							<tr>
								<td></td><td></td>	<td>USUARIO:</td><td><input type="text" id="usuario_id" name="usuario"></td><td></td><td></td>
							</tr>
							<tr>
								<td></td><td></td> <td>E-MAIL:</td><td><input type="text" id="email_id" name="email"></td><td></td><td></td>
							</tr>
							<tr>
								<td></td><td></td> <td>CONSTRASEÑA:</td><td><input type="password" id="contrasena_id" name="contrasena"></td><td></td><td></td>
							</tr>
							<tr>
								<td></td><td></td> <td>VALIDAR CONSTRASEÑA:</td><td><input type="password" id="validar_contrasena_id" name="validar_contrasena"></td><td></td><td></td>
							</tr>
							<tr>
								<td></td><td></td> <td>FECHA NACIMIENTO:</td><td><input type="date" id="fecha_nac_id" name="fecha_nac">
							</tr>
							<tr>
								<td></td><td></td> <td>DESCRIPCION:</td><td><input type="text" id="descripcion_id" name="descripcion"></td><td></td><td></td>
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
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
			<a class="navbar-brand" href="HTML\entrada_sin_registro.html">Game-In</a>
		</nav>
	</header>

	<!--<div class="contenedor_tabla" align="center">-->
		<table align="center" class="tabla_php">
			<form action="registro_2.php" method="GET" class="contenido_tabla">

				<!-- FALTA EL CORREO Y UNA DESCRIPCION -->
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr>
					<td></td><td></td><td>NOMBRE:</td><td><input type="text" name="nombre"></td><td></td><td></td>
				</tr>
				<tr>
					<td></td><td></td><td>PRIMER APELLIDO:</td><td><input type="text" name="apellido_1"></td><td></td><td></td>
				</tr>
				<tr>
					<td></td><td></td>	<td>SEGUNDO APELLIDO:</td><td><input type="text" name="apellido_2"></td><td></td><td></td>
				</tr>
				<tr>
					<td></td><td></td>	<td>USUARIO:</td><td><input type="text" name="usuario"></td><td></td><td></td>
				</tr>
				<tr>
					<td></td><td></td> <td>E-MAIL:</td><td><input type="text" name="email"></td><td></td><td></td>
				</tr>
				<tr>
					<td></td><td></td> <td>CONSTRASEÑA:</td><td><input type="password" name="contrasena"></td><td></td><td></td>
				</tr>
				<tr>
					<td></td><td></td> <td>VALIDAR CONSTRASEÑA:</td><td><input type="password" name="validar_contrasena"></td><td></td><td></td>
				</tr>
				<tr>
					<td></td><td></td> <td>FECHA NACIMIENTO:</td><td><input type="date" name="fecha_nac"></td><td></td><td></td>
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
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<table>
			<form action="crearUsuario.php" method="GET">
				<tr>
					<td>USUARIO:</td><td><input type="text" name="usuario"></td>
				</tr>
				<tr>
					<td>CONSTRASEÑA:</td><td><input type="password" name="contrasena"></td>
				</tr>
				<tr>
					<td>VALIDAR CONSTRASEÑA:</td><td><input type="password" name="validarContrasena"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="crear"><input type="reset" value="borrar"></td>
				</tr>
			</form>
		</table>

		<?php
			//si se han instroducido valores hacemos cosas
			if(isset($_REQUEST['usuario']) && isset($_REQUEST['contrasena'])) {
				//obtenemos los datos enviados
				$usuario = strtolower($_REQUEST['usuario']).'@localhost';
				$contrasena = $_REQUEST['contrasena'];
				//$validarConstraseña = $_REQUEST['validarConstraseña'];

				//conexion segura con la base de datos
				include('c:\xampp\seguridad\mysql.inc.php');

				//NO NECESITAMOS CONECTAR ASI A LA BASE DE DATOS (Porque solo vamos a crear un usuario en esa base de datos, no vamos a usarla)
				
				//comprobamos si ya existe el usuario
				//$sql = "SELECT * FROM mysql.user WHERE USER=".$usuario;

				$sql = "CREATE USER ".$usuario." IDENTIFIED BY '".$contrasena."'";

				//ejecutamos la sentencia, quito el or die para que me saga lo de usuario ya existe
				mysqli_query($conexion, $sql); // or die ("NO ENTRO AQUI MOZO");

				//comprobamos si se ejecuta con exito
				if (mysqli_errno($conexion) == 0) {
					//concedemos permisos al nuevo usuario
					$sql2 = "GRANT SELECT, UPDATE, INSERT, DELETE ON alejandro2.* TO ".$usuario;

					//ejecutamos la consulta
					mysqli_query($conexion, $sql2);

					if (mysqli_errno($conexion) == 0) 
						echo "<p>USUARIO <b>".$usuario."</b> CREADO CON EXITO</p>";
					else 
						echo "ERROR AL ASIGNAR PRIVILEGIOS";
					
				}
				else if (mysqli_errno($conexion) == 1396) {
						echo "USUARIO YA EXISTE";
				} 
				else {
					echo "<p>Error de ejecucion N#".mysqli_errno($conexion)."</p>";
					echo "<p>Mensaje del servidor: ".mysqli_error($conexion)."</p>";
				}
				
				//cerramos la conexion
				mysqli_close($conexion);
			}
			
		?>

	</body>
</html>
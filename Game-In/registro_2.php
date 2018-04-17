<?php
	
	//RECOGEMOS LOS DATOS
		$nombre = $_REQUEST['usuario'];
		$apellido_1 = $_REQUEST['apellido_1'];
		$apellido_2 = $_REQUEST['apellido_2'];
		$usuario = $_REQUEST['usuario'];
		$contrasena = $_REQUEST['contrasena'];
		$validar_contrasena = $_REQUEST['validar_contrasena'];
		$fecha_nac = $_REQUEST['fecha_nac'];

		//DESCRRIPCION Y EMAIL

		$nomBBDD = "game-in";

	//SI NO FALTA NINGUN DATO ENTRAMOS
	if ($nombre != "" && $apellido_1 != "" && $apellido_2 != "" && $usuario != "" && $contrasena != "" && $validar_contrasena != "" && $fecha_nac != "" ){
		
		//COMPROBAMOS SI LA CONTRASEÑA ES LA MISMA
		if ($contrasena == $validar_contrasena) {
			
			//conexion (segura por encima de la raiz del servidor)
				include('c:\xampp\seguridad\mysql.inc.php');

			//SELECCIONAMOS LA BASE DE DATOS CON LA QUE VAMOS A TRABAJAR
			mysqli_select_db($conexion, 'game-in') or die ('<p>Imposible conectar mai friend</p>');

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
				$sql = "INSERT INTO usuarios VALUES ('$id_usuario','$nombre','$apellido_1','$apellido_2','$usuario','$contrasena','$fecha_nac')";

				//EJECUTO LA SENTENCIA
				$resultado = mysqli_query($conexion, $sql);

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

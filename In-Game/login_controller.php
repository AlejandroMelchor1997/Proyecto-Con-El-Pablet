<?php

		//RECOGEMOS LOS DATOS
	$usuario = $_REQUEST['usuario'];
	$contrasena = $_REQUEST['password'];

	$nomBBDD = "game-in";	

	//SI ESTÁN RELLENOS EMPEZAMOS CON EL CODIGO
	if ($usuario != "" && $contrasena != "") {

			//conexion (segura por encima de la raiz del servidor)
		include('c:\xampp\seguridad\mysql.inc.php');

			//SELECCIONAMOS LA BASE DE DATOS CON LA QUE VAMOS A TRABAJAR
		mysqli_select_db($conexion, 'game-in') or die ('<p>Imposible conectar</p>');
		
			//VAMOS A COMPROBAR SI EL USUARIO EXISTE
		$sql = "SELECT * FROM usuarios WHERE USUARIO = '$usuario'";

			//EJECUTO LA SENTENCIA
		$resultado = mysqli_query($conexion, $sql) or die (mysqli_error($conexion));

			//CUENTO EL NUMERO DE FILAS QUE SALE
		//$registro = mysqli_fetch_assoc($resultado);

			//SI EL CORREO ES IGUAL AL DE LA BBDD ENTRA
		if (mysqli_num_rows($resultado) == 1) {
				//SELECCIONAMOS LA PASS
		
			$sql = "SELECT CONTRASENA FROM usuarios WHERE USUARIO = '$usuario'";

				//EJECUTO LA SENTENCIA
			$resultado = mysqli_query($conexion, $sql);
			$array = mysqli_fetch_assoc($resultado);
			$contra = $array['CONTRASENA'];
			echo $contra;
			echo $contrasena;
				//SI LA CONTRASEÑA ES IGUAL A LA DE LA BASE DE DATOS ENTRA
			if ($contrasena == $contra) {

				session_start();
				$_SESSION['usuario'] = $usuario;
				header("Location:bienvenida.php");

			}else {
				echo ("CONTRASEÑA INCORRECTA");
				header("Location:form_login.php");
			}
			
		} else {
			echo ("USUARIO ERRONEO");
			header("Location:form_login.php");
		}
		
	} else {
		echo ("INTRODUCE USUARIO Y CONTRASEÑA");
		header("Location:form_login.php");
	}	

?>
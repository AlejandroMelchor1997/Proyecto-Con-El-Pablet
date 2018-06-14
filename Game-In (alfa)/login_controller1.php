<?php 
	try{
		// no funciona porque falta el driver PDO
		$base = new PDO('mysqli:host=localhost; dbname = game-in','root','');

		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql="SELECT * FROM usuarios WHERE usuario = :usuario AND contrasena= :password";

		$resultado = $base->prepare($sql);

		$usuario = htmlentities(addslashes($_POST['usuario']));

		$password = htmlentities(addslashes($_POST['password']));

		$resultado->bindValue('usuario',$usuario);

		$resultado->bindValue('password',$password);

		$resultado->execute();

		$registro = $resultado->rowCount();

		if ($registro != 0) {
			
			echo "<h2>logueadoooooooo<h2>";

		}else{

			header('location:form_login.html');

		}

	}catch (Exception $e){

		die ("Error: ". $e->getMessage());

	}
?>
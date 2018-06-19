<?php
	
	//conexion (segura por encima de la raiz del servidor)
	include('c:\xampp\seguridad\mysql.inc.php');

	//SELECCIONAMOS LA BASE DE DATOS CON LA QUE VAMOS A TRABAJAR
	mysqli_select_db($conexion, 'game-in') or die ('<p>Imposible conectar</p>');

	$mensaje = $_REQUEST['mensaje'];
	//$id_emidor = $_REQUEST['id'];
	$emi = $_POST['emi'];
	$rec = $_POST['rec'];

	//SACAMOS TODOS LOS MENSAJES QUE TENEMOS Y SUMAMOS UNO PARA SACAR EL ID
	$sql4 = "SELECT * FROM MENSAJES";

	//EJECUTO LA SENTENCIA
	$resultado4 = mysqli_query($conexion, $sql4);

	//CUENTO EL NUMERO DE FILAS QUE SALE
	$filas = mysqli_num_rows($resultado4);

	//HAY QUE DEPURAR PARA QUE NO REPITA NUMEROS Y NO CASQUE
	$id_mensaje = $filas + 1;

	$sql5 = "INSERT INTO MENSAJES VALUES ('$id_mensaje', '$emi', '$rec', '$mensaje')";
	//EJECUTO LA SENTENCIA
	$resultado4 = mysqli_query($conexion, $sql5);

	header("Location:mensajes.php");

?>
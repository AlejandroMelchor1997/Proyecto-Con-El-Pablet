<?php
	
	//conexion (segura por encima de la raiz del servidor)
	include('c:\xampp\seguridad\mysql.inc.php');

	//SELECCIONAMOS LA BASE DE DATOS CON LA QUE VAMOS A TRABAJAR
	mysqli_select_db($conexion, 'game-in') or die ('<p>Imposible conectar</p>');

	$men = $_REQUEST['respuesta'];
	//$id_emidor = $_REQUEST['id'];
	$id_emisor = $_POST['rec'];
	$id_sesion = $_POST['emi'];

	//SACAMOS TODOS LOS MENSAJES QUE TENEMOS Y SUMAMOS UNO PARA SACAR EL ID
	$sql4 = "SELECT * FROM MENSAJES";

	//EJECUTO LA SENTENCIA
	$resultado4 = mysqli_query($conexion, $sql4);

	//CUENTO EL NUMERO DE FILAS QUE SALE
	$filas = mysqli_num_rows($resultado4);

	//HAY QUE DEPURAR PARA QUE NO REPITA NUMEROS Y NO CASQUE
	$id_mensaje = $filas + 1;

	$sql5 = "INSERT INTO MENSAJES VALUES ('$id_mensaje', '$id_sesion', '$id_emisor', '$men')";
	//EJECUTO LA SENTENCIA
	$resultado4 = mysqli_query($conexion, $sql5);

	header("Location:mensajes.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>In-Game</title>
	
	<!-- ESTO ES PROPIO DE BOOSTRAP, ES NECESARIO PAR QUE FUNCIONE EL RESTO DE COSAS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<!-- HASTA AQUI -->

	<link rel="stylesheet" type="text/css" href="css/css_index.css">

	

</head>
<body>
	<?php 

	session_start();
	
	if (!isset($_SESSION['usuario'])) {

		header("Location:form_login.php");

	} else{
		//SI LA SESION EXISTE SACA SU VALOR PARA MOSTRARLO
		$nombre_sesion = $_SESSION['usuario'];
		
		$usuario = $_REQUEST['usuario'];

		//conexion (segura por encima de la raiz del servidor)
    include('c:\xampp\seguridad\mysql.inc.php');

    //SELECCIONAMOS LA BASE DE DATOS CON LA QUE VAMOS A TRABAJAR
    mysqli_select_db($conexion, 'game-in') or die ('<p>Imposible conectar</p>');
        

    //SACO SU ID
    $sql = "SELECT ID_USUARIO FROM USUARIOS WHERE USUARIO = '$nombre_sesion'";
    $resultado = mysqli_query($conexion, $sql) or die (mysqli_error($conexion));
    $array = mysqli_fetch_assoc($resultado);

    $id_usuario_sesion = $array['ID_USUARIO'];

    $sql2 = "SELECT LEIDO FROM mensajes WHERE ID_USUARIO_RECEPTOR = '$id_usuario_sesion'";
    $resultado2 = mysqli_query($conexion, $sql2) or die (mysqli_error($conexion));
    $cont = 0;
    while ($array2 = mysqli_fetch_assoc($resultado2)){
      $bool = $array2['LEIDO'];
      if ($bool == "no") {
        $cont = 1;
      }
    }
	}
	?>
	<header>
		<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
			<a class="navbar-brand" href="index_login.php">In-Game</a>

			<!-- ESTO NO SE PARA QUE VALE -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!-- HASTA AQUI -->

			<!--Desplegable de los juegos -->
			<ul class="navbar-nav mr-auto">
				<?php 
		          if ($_SESSION['usuario'] =='admin') {
		            echo '<li class="nav-item">
		                    <a class="nav-link" href="administrador.php">Administrador</a>
		                  </li>';
		          }
		        ?>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Busqueda de jugadores
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">CS-GO</a>
						<a class="dropdown-item" href="#">League of legends</a>
						<a class="dropdown-item" href="#">OverWatch</a>
					</div>
				</li>
			</ul>
			<?php  
		      if ($cont == 1) {
		        echo '<a href="recibidos.php"><img src="img/mail.svg" style="width: 50px;"></a>';
		      }
		      ?>
			<!-- Hasta aqui -->
			<div style="float: right;">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><img src="img/usuario.png" width="40"></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="perfil.php">Perfil</a>
              <a class="dropdown-item" href="mensajes.php">Mensajes</a>
              <a class="dropdown-item" href="despedida.php">Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
		</nav>
	</header>

	<section>
	<!-- CREAMOS EL CONTAINER FLUID PARA QUE OCUPE TODO EL ANCHO DE LA PAGINA -->
	<!-- Y DENTRO CREAMOS OTRO PARA QUE NO OCUPE TODO EL ANCHO Y NOS DEJE UNOS MARGENES -->
	<div class="container-fluid">
		<div class="12-col">
			<!-- DIV QUE OCUPARA LA MITAD DE LA PANTALLA -->
			<div class="info_texto col-6 row" style="margin-left: 25%">
				<div class="col-12">
					<h2 align="center"><?php echo $usuario ?></h2><br/>

					<?php


					//conexion (segura por encima de la raiz del servidor)
					include('c:\xampp\seguridad\mysql.inc.php');

					//SELECCIONAMOS LA BASE DE DATOS CON LA QUE VAMOS A TRABAJAR
					mysqli_select_db($conexion, 'game-in') or die ('<p>Imposible conectar</p>');
				
					//VAMOS A SACAR EL USUARIO Y SUS JUEGOS
					$sql = "SELECT * FROM usuarios WHERE USUARIO = '$usuario'";

					//EJECUTO LA SENTENCIA
					$resultado = mysqli_query($conexion, $sql) or die (mysqli_error($conexion));

					//LO TRANSFORMO A UN ARRAY
					while($array = mysqli_fetch_assoc($resultado)){
						?>
						Nombre: 
						<?php
							echo $array["NOMBRE"];
						?>
						<br/>Apellidos: 
						<?php
							echo $array["APELLIDO_1"]." ".$array["APELLIDO_2"];
						?>
						<br/>Descripcion:
						<?php
							echo $array["DESCRIPCION"];
							$id = $array["ID_USUARIO"];
						?>
						<br/><br/><br/>
						<?php

							$sql2 = "SELECT * FROM inscripcion WHERE id_usuario = '$id'";
							//EJECUTO LA SENTENCIA
							$resultado2 = mysqli_query($conexion, $sql2) or die (mysqli_error($conexion));

							?>
							Juegos:
									<br/>
							<?php
							while($array2 = mysqli_fetch_assoc($resultado2)){
								if($array2["ID_JUEGO"] == "1"){
									?><img src="./img/csgo_logo.jpg" alt="CS-GO" class="img_portada img-responsive img-fluid" width="50px"><?php
								} elseif ($array2["ID_JUEGO"] == "2") {
									?><img src="./img/lol_logo.jpg" alt="LOL" class="img_portada img-responsive img-fluid" width="50px"><?php
								} else{
									?><img src="./img/ow_logo.jpg" alt="OW" class="img_portada img-responsive img-fluid" width="50px"><?php
								}
								
							}
							?>
							<br/><br/><br/>
							<?php


					}

					?>

				
					<form action="mensaje_correo.php" method="POST">
						<input type="submit" value="Enviar Mensaje" class="btn btn-dark">	
						<input type="hidden" name="usuario" value="<?php echo $usuario;?>"/>					
					</form>
					<!--<?php //echo '<a href="mensaje_correo.php?usuario='.$usuario.'"><button class="btn btn-outline-success my-2 my-sm-0" type="button" style="background-color: grey; color: white;">Enviar Mensaje</button><a>' ?> -->
					</div>
				</div>
			</div>
		</div>

		</section>

		
	</body>
	</html>
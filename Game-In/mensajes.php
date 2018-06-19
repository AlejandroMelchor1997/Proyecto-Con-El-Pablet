<!DOCTYPE html>
<html>
<head>
	<title>GAME-iN</title>
  <meta charset="utf-8">

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
	}
	?>
	<header>
   <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="index_login.php">Game-In</a>

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
            <a class="dropdown-item" href="search_csgo.php">CS-GO</a>
            <a class="dropdown-item" href="search_lol.php">League of legends</a>
            <a class="dropdown-item" href="search_ow.php">Overwatch</a>
          </div>
        </li>
      </ul>
      <!-- PONEMOS AQUI MARGIN RIGHT PARA QUE NO SE EXPANDA LA PAGINA CON EL DESPLEGABLE -->
      <div style="float: right;">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><img src="img/usuario.png" width="40"></a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="perfil.php">Perfil</a>
              <!--<a class="dropdown-item" href="mensajes.php">Mensajes</a>-->
              <a class="dropdown-item" href="despedida.php">Logout</a>
            </div>
          </li>
        </ul>
      </div>
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
					<div class="col-lg-2 col-md-12">
						
					</div>
					<div class="col-lg-8 col-md-12">
						<div class="info_texto" >
							<h3>MENSAJES</h3>
						</div>
						<div class="info_texto">

							<table align="center" class="tabla_php">
								<tr>
									<td><a href="enviados.php">ENVIADOS</td><td><a href="recibidos.php">RECIBIDOS</td>
								</tr>
							</table>
						</div>
					</div>

					<div class="col-lg-2 col-md-12">
						
					</div>
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
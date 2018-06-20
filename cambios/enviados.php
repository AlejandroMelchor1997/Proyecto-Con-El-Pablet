<!DOCTYPE html>
<html>
<head>
	<title>In-Game</title>
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
      /*else{
        $cont = 0;
      }*/
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

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- APARTADOS DE LA BARRA -->
      <ul class="navbar-nav mr-auto">
       <?php 
       if ($_SESSION['usuario'] =='admin') {
        echo '<li class="nav-item">
        <a class="nav-link" href="administrador.php">Administrador</a>
        </li>';
      }
      ?>
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
    <?php  
    if ($cont == 1) {
      echo '<a href="recibidos.php"><img src="img/mail.svg" style="width: 50px;"></a>';
    }
    ?>
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

<section>
  <!-- CREAMOS EL CONTAINER FLUID PARA QUE OCUPE TODO EL ANCHO DE LA PAGINA -->
  <div class="container-fluid">
   
   <!-- CONTENEDOR EN EL QUE LE DECIMOS QUE VA A OCUPAR LAS DOCE COLUMNAS DE LA PAGINA -->
   <div class="col-lg-12 col-md-12">

    <div class="row">
     <div class="info_web"><h3> MENSAJES </h3></div>
   </div>

   <div class="row">
     <div class="col-lg-2 col-md-12">
      
     </div>
     <div class="col-lg-8 col-md-12">
      
      <div class="info_texto">

        <div class="row">
          <div class="col-lg-3">Receptor</div><div class="col-lg-5">Mensaje</div><div class="col-lg-2">Fecha</div>
        </div>
        <hr>



        <?php
							//conexion (segura por encima de la raiz del servidor)
        include('c:\xampp\seguridad\mysql.inc.php');

							//SELECCIONAMOS LA BASE DE DATOS CON LA QUE VAMOS A TRABAJAR
        mysqli_select_db($conexion, 'game-in') or die ('<p>Imposible conectar</p>');

							//SACAMOS EL ID DEL USUARIO DE LA SESION
        $sql = "SELECT ID_USUARIO FROM USUARIOS WHERE usuario = '$nombre_sesion'";

							//EJECUTO LA SENTENCIA
        $resultado = mysqli_query($conexion, $sql) or die (mysqli_error($conexion));

							//LO TRANSFORMO A UN ARRAY
        $array = mysqli_fetch_assoc($resultado);
        $id_sesion = $array['ID_USUARIO'];
        

							//SACO LA INFO DE LOS MENSAJES
        $sql2 = "SELECT * FROM MENSAJES WHERE ID_USUARIO_EMISOR = '$id_sesion' ORDER BY FECHA DESC";
        
							//EJECUTO LA SENTENCIA
        $resultado2 = mysqli_query($conexion, $sql2) or die (mysqli_error($conexion));
        
							//SACAMOS TODO CON UN WHILE
        
        ?>

        <?php
        while($array2 = mysqli_fetch_assoc($resultado2)){
          $id_receptor = $array2['ID_USUARIO_RECEPTOR'];

          $sql3 = "SELECT USUARIO FROM USUARIOS WHERE ID_USUARIO = '$id_receptor'";
												//EJECUTO LA SENTENCIA
          $resultado3 = mysqli_query($conexion, $sql3) or die (mysqli_error($conexion));
          while($array3 = mysqli_fetch_assoc($resultado3)){
           $usuario = $array3['USUARIO'];
           $mensaje = $array2['MENSAJE'];
           $fecha = $array2['FECHA'];
           $id_mensaje = $array2['ID_MENSAJE'];
           ?>		

           <div class="row">
            <div class="col-lg-3"><?php echo $usuario; ?></div>
            <div class="col-lg-5"><?php echo $mensaje; ?></div>
            <div class="col-lg-2"><?php echo $fecha; ?></div>
            <div class="col-lg-2">
              <a href="borrar_mensaje_enviado.php?id_mensaje='.$id_mensaje.'&id_usuario='.$id_sesion.'">
                <img src="img/trashcan.svg">
              </a>
            </div>	
          </div>
          <hr>    
          <?php    
        }	
      }
      
      
      ?>
      
      

      <a href="mensajes.php" style="color: white;"><img src="img/arrow-left.svg">Volver</a>

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
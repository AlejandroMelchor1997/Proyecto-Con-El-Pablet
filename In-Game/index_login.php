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
              <a class="dropdown-item" href="mensajes.php">Mensajes</a>
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
    <div class="contenedor col-lg-12 col-md-12">
      <!-- CONTENEDOR EN EL QUE LE DECIMOS QUE VA A OCUPAR LAS DOCE COLUMNAS DE LA PAGINA -->
      <div class="col-lg-12 col-md-12">
        <div class="row">
          <div class="info_web">
            <h5>En esta página web lo que puedes hacer es ponerte en contacto con jugadores de CS:GO, LOL y OverWatch, para echarte unas partidas y conocer gente nueva<br/>
            Todos sabemos que es mejor no jugar con los famosos rusos flamers del counter, asi que esperemos que te guste!</h5>
          </div>

          <br/>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-12">
            <div class="info_texto" >
              <a class="enlaces" href="search_csgo.php">CS-GO</a>
            </div>

            <div class=" info_foto">
              <a href="search_csgo.php"><img src="./img/csgo_logo.jpg"  alt="CS-GO" class="img_portada img-responsive img-fluid"></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-12 ">
            <div class="info_texto">
              <a class="enlaces" href="search_lol.php">League of Legends</a>
            </div>

            <div class=" info_foto">
              <a href="search_lol.php"><img src="./img/lol_logo.jpg"  alt="LOL" class="img_portada img-responsive img-fluid"></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-12">
            <div class="info_texto">
              <a class="enlaces" href="search_ow.php">Overwatch</a>
            </div>

            <div class="info_foto">
              <a href="search_ow.php"><img src="./img/ow_logo.jpg"  alt="Overwatch" class="img_portada img-responsive img-fluid"></a>
            </div>
          </div>
        </div>  
      </div>
    </div>
    <!-- AQUÍ FALTA EL FOOTER, ESTÁ EN OTRO ARCHIVO, PORQUE HAY QUE TRATARLO -->
      <!--<footer>
        inffo y cosas
      </footer>-->
    </section>

    <footer>
    
    <!--Footer Links-->
    <div class="container-fluid">
      <div class="col-lg-12">
        <div class="footer1">
          <div class="row">

            <!--First column-->
            <div class="col-md-4 col-lg-4">
              <h3>El Equipo</h3>
              <p>Somos un Equipo de personas aficionadas al gaming .</p>
              Si quieres subscribirte en nuestro canal o tratar algun tema con nosotros no dudes en contactar con nosotros en nuestras redes
              <p><img src="img/logo.png" width="90px"></p>
            </div>
            <!--/.First column-->


            <!--Second column-->
            <div class="col-md-2 col-lg-2 ml-auto">
              <h3 class="title mb-4 font-bold">Acerca de...</h3>
              <ul>
                <p><a class="enlaces_footer" href="#!">PROYECTOS</a></p>
                <p><a class="enlaces_footer" href="#!">SOBRE NOSOTROS</a></p>
                <p><a class="enlaces_footer" href="#!">BLOG</a></p>
                <p><a class="enlaces_footer" href="#!">SUSCRIPCIONES</a></p>
              </ul>
            </div>
            <!--/.Second column-->


            <!--Third column-->
            <div class="col-md-4 col-lg-3">
              <h3 class="title mb-4 font-bold">Dirección</h3>
              <!--Info-->
              <p><i class="fa fa-home mr-3"></i> Madrid,Ies Clara Del Rey</p>
              <p><i class="glyphicon glyphicon-envelope"></i> ingameweb.info@gmail.com</p>
              <p><i class="glyphicon glyphicon-earphone"></i> + 34 666 69 69 69</p>
              <p><i class="glyphicon glyphicon-phone-alt"></i>   91 666 69 69</p>
            </div>
            <!--/.Third column-->


            <!--Fourth column-->
            <div class="col-md-2 col-lg-3 text-center">
              <h3 class="title mb-4 font-bold">Síguenos en</h3>
              <!--Social buttons-->
              <div class="social-section mt-2 ">
                <!--Facebook-->
                <a href="#"><img src="./img/facebook.png" width="30px"></a>
                <!--Twitter-->
                <a href="#"><img src="./img/twitch.png" width="30px"></a>
                <!--Google +-->
                <a href="#"><img src="./img/youtube.png" width="30px"></a>
                <!--Dribbble-->
                <a href="#"><img src="./img/instagram.png" width="40px"></a>

              </div>
            </div>
            <!--/.Fourth column-->

          </div>
        </div>
      </div>
    </div>
    <!--/.Footer Links-->
    <br><br>
    <!--Copyright-->
    <div class="footer-copyright">
      <div class="container-fluid copy">
        © 2018 Copyright: <a href="https://creativecommons.org/licenses/by-nc-nd/4.0/"> Game-In </a>

      </div>
    </div>

    <br><br>
    <!--/.Copyright-->

  </footer>
</body>
</html>
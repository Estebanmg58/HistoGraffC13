<?php
  session_start();
  $usuarioGuia = $_SESSION['usuarioGuia'];

  if (!isset($usuarioGuia)){
    header("location: ../loginGuia.html");
  } 

?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/administrador.css">
    <link rel="icon" type="img/png" href="../Imagenes/favicon.png">
    <title>HistoGraff</title>
  </head>
  <body>

    <nav class="navbar navbar-light bg-light navbar-fixed-top">
		  <!--Logo-->
		  <a class="navbar-brand" href="guia.php">
		    <img src="../Imagenes/HistoGraff.png" width="43" height="35" class="d-inline-block align-top" alt="">
		    HistoGraff
		  </a>
		  <ul>
        <!--Botones de navegacion-->
        <a class="barraNavegacion" href="">Tour Realizados</a>
		    <a class="barraNavegacion" href="tourPendientes.php">Tour Pendientes</a>
        <a class="barraNavegacion" href="salirSesionGuia.php">Cerrar Sesión</a>
		  </ul>   
	  </nav>
    <br>
    <center><h1>Bienvenido Guia HistoGraff</h1>
    <img class="imagenLogo" src="../Imagenes/HistoGraff.png" alt="Error al cargar"></center>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
  </body>
</html>

<?php
  session_start();
  $usuario = $_SESSION['username'];

  if (!isset($usuario)){
    header("location: ../LoginAdmin.html");
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
		  <a class="navbar-brand" href="Administrador.php">
		    <img src="../Imagenes/HistoGraff.png" width="43" height="35" class="d-inline-block align-top" alt="">
		    HistoGraff
		  </a>
		  <ul>
        <!--Botones de navegacion-->
        <a class="barraNavegacion" href="guias.php">Guías</a>
        <a class="barraNavegacion" href="Graffiti.php">Editar Galería</a>
		    <a class="barraNavegacion" href="TourSolicitados.php">Tour Solicitados</a>
        <a class="barraNavegacion" href="salirSesion.php">Cerrar Sesión</a>
		  </ul>   
	  </nav>
    <br>
    <center><h1>Bienvenido Administrador HistoGraff</h1>
    <img class="imagenLogo" src="../Imagenes/HistoGraff.png" alt="Error al cargar"></center>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="../Imagenes/favicon.png">
   <link rel="stylesheet" href="../css/TourSolicitados.css">
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
		    <a class="barraNavegacion" href="#">Tour Pendientes</a>
        <a class="barraNavegacion" href="salirSesionGuia.php">Cerrar Sesión</a>
		  </ul>   
	  </nav>

      <!--Tabla de Tours pendientes-->

      <table class="table table-responsive table-striped" >
    <thead>
    <tr>
        <td>Cod solicitud</td>
        <td>Id solicitante</td>
        <td>Nombres</td>
        <td>Apellidos</td>
        <td>Teléfono</td>
        <td>Email</td>
        <td>Cantidad</td>
        <td>Fecha Tour</td>
        <td>Hora Tour</td>
        <td>Método Pago</td>  
    </tr>
  </thead>
  <br>
    <?php
    include ("conexion.php");
    $consulta="SELECT * FROM solicitar_tour";
    $resultado=mysqli_query($conex,$consulta);
    while($mostrar=mysqli_fetch_array($resultado)) {
    ?>
    <tbody>
    <tr>
    <td><?php echo $mostrar ['cod_solicitud'] ?></td>
    <td><?php echo $mostrar ['id_solicitante'] ?></td>
    <td><?php echo $mostrar ['nombre'] ?></td>
    <td><?php echo $mostrar ['apellido'] ?></td>
    <td><?php echo $mostrar ['telefono'] ?></td>    
    <td><?php echo $mostrar ['Email'] ?></td>
    <td><?php echo $mostrar ['cantidad'] ?></td>
    <td><?php echo $mostrar ['fecha_tour'] ?></td>
    <td><?php echo $mostrar ['hora_tour'] ?></td>
    <td><?php echo $mostrar ['metodo_pago'] ?></td>
  </tr>
    <?php
    }
    ?>
    </tbody>
</table>


</body>
</html>
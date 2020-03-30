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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HistoGraff</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="icon" type="img/png" href="../Imagenes/favicon.png">
    <link rel="stylesheet" href="../css/TourSolicitados.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<header>
    <nav class="navbar navbar-light bg-light navbar-fixed-top">
		<!--Logo-->
		<a class="navbar-brand" href="Administrador.php">
		    <img src="../Imagenes/HistoGraff.png"  width="43" height="35" class="d-inline-block align-top" alt="">
		    HistoGraff
		</a>
		<ul>
            <!--Botones de navegacion-->
            <a class="barraNavegacion" href="#">Guias</a>
            <a class="barraNavegacion" href="Graffiti.php">Editar Galeria</a>
		    <a class="barraNavegacion" href="TourSolicitados.php">Tours Solicitados</a>
		    <a class="barraNavegacion" href="salirSesion.php">Cerrar Sesion</a>
		</ul>   
	</nav>
    <br>
</header>

    <center><a href="addGuias.php" class="btn btn-info">Agregar guía</a></center>
    <br>
        <table class="table table-responsive table-striped">
            <thead>
                <tr>
                    <td>Id Guia</td>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                    <td>Telefono</td>
                    <td>Email</td>
                    <td>Borrar guía</td>
                    <td>Actualizar guía</td>
                </tr>
            </thead>
            <?php
            include ("conexion.php");
            $consulta="SELECT * FROM guia";
            $resultado=mysqli_query($conex,$consulta);
            while($mostrar=mysqli_fetch_array($resultado)) {
            ?>
            <tbody>
                <tr>    
                    <td><?php echo $mostrar ['idGuia'] ?></td>
                    <td><?php echo $mostrar ['NombreGuia'] ?></td>
                    <td><?php echo $mostrar ['ApellidoGuia'] ?></td>
                    <td><?php echo $mostrar ['Telefono'] ?></td>
                    <td><?php echo $mostrar ['Email'] ?></td>
                    <td>
                        <button class="btn btn-danger btnBorrar" id="<?php echo $mostrar['idGuia']; ?>">
                            Borrar
                        </button>
                    </td>
                     <!-- Button Actualizar -->
                     <td>
                      <button class="btn btn-primary" id="">Editar</button>
                    </td>  
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    
    <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/Guias.js"></script>
</body>
</html>
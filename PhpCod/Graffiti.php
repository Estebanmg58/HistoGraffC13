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
    <link rel="icon" type="img/png" href="../Imagenes/favicon.png">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/Graffiti.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../js/graffiti.js"></script>
    <title>HistoGraff</title>
</head>
<body>

<nav class="navbar navbar-light bg-light navbar-fixed-top">
		  <!--Logo-->
		  <a class="navbar-brand" href="../Administrador.html">
		    <img src="../Imagenes/HistoGraff.png"  width="43" height="35" class="d-inline-block align-top" alt="">
		    HistoGraff
		  </a>
		  <ul>
        <!--Botones de navegacion-->
        <a class="barraNavegacion" href="Guias.php">Guías</a>
        <a class="barraNavegacion" href="#">Editar Galería</a>
		    <a class="barraNavegacion" href="TourSolicitados.php">Tour Solicitados</a>
		    <a class="barraNavegacion" href="salirSesion.php">Cerrar Sesión</a>
		  </ul>   
	  </nav>
    <br>
</header>

      <div class="container">
      <div class="row">
      <div class="col-md-5">
      <div class="card">
      <div class="card-body">

      <form id="formulario" method="post" action="addGraffiti.php" enctype="multipart/form-data">
        <center><legend>Insertar nuevos grafitis</legend></center>
      <div class="modal-body">
        <input type="hidden" type="text" name="id" id="id">
      </div>

      <div class="form-group"> 
        <input class="form-control" type="text" name="nombreGraffiti"  id="nombreGraffiti" placeholder="Nombre" required>
      </div>

      <div class="form-group">
        <textarea class="form-control" name="descripcion" id="descripcion"  placeholder="Descripción" require></textarea>
      </div>

      <div class="form-group">
        <label for="foto">Foto de el grafiti</label>
        <input class="form-control" type="file" name="foto" id="foto" require>
      </div>

        <button type="submit" id="submit" class="btn btn-primary">Guardar</button>
      
        </form>

      </div>
      </div>
      </div>
      </div>
      </div>
      <br>
      
      <div class="container">
      <table class="table table-responsive table-striped">
      <thead>

      <tr>
        <td>Código Grafiti</td>
        <td>Nombre Grafiti</td>
        <td>Descripción</td>
        <td>Foto</td>
        <td>Editar Grafiti</td>
        <td>Eliminar Grafiti</td>
      </tr>

      </thead>
      <tbody>
        <tr>
          <?php
          
          include ('conexion.php');

          $query="SELECT * FROM graffiti";
          $result=mysqli_query($conex,$query);

          while($row = $result -> fetch_assoc()){
          
          ?>
          <tr>
            <td><?php echo $row['codGraffiti']?></td>     
            <td><?php echo $row['NombreGraffiti']?></td>
            <td><?php echo $row['DescripcionGraffiti']?></td>
            <td><img class="img-circle" height="100px"  src="data:image/jpg;base64,<?php echo base64_encode($row['fotoGraffiti']) ?> " alt="error"></td>
            
            <td><button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#staticBackdrop">
            <a data-target="#staticBackdrop" class="editar" data-id="<?php echo $row['codGraffiti'];?>" href="#staticBackdrop?id=<?php echo $row['codGraffiti'];?>"
            style="color:white">Editar</a>
            </button> </td>

            <td><button class="btn btn-danger btnBorrar" id="<?php echo $row['codGraffiti'];?>">Eliminar</button></td>
          </tr>
          <?php
          }
          ?>
        </tr>
      </tbody>
      </table>
    </div>

    <!--Modal de editar tour -->

    <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="staticBackdropLabel">Actualizar Grafiti</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form id="formulario"  enctype="multipart/form-data">
        
      <div class="modal-body">
        <input type="hidden" type="text" name="id" id="id">

      <div class="form-group"> 
        <input class="form-control" type="text" name="nombreGraffiti"  id="nombreGraffiti" placeholder="Nombre">
      </div>

      <div class="form-group">
        <textarea class="form-control" name="descripcion" id="descripcion"  placeholder="Descripción" ></textarea>
      </div>

      <div class="form-group">
        <label for="foto">Foto de el grafiti</label>
        <input class="form-control" type="file" name="foto" id="foto" >
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" id="submit" class="btn btn-primary">Guardar</button>
        </div>
          </div>
        </form>
          </div>
          </div>              
          </div>  
    
    <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/graffiti.js"></script>
  </body>
</html>
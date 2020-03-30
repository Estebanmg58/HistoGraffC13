<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>HistoGraff</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/galeriaGraffitis.css">
        <link rel="icon" type="img/png" href="../Imagenes/favicon.png">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  
    </head>
    <body>
        <header>
            <nav class="navbar navbar-light bg-light navbar-fixed-top">
                <!--Logo-->
                <a class="navbar-brand" href="../Index.html">
                <img src="../Imagenes/HistoGraff.png" width="43" height="35" class="d-inline-block align-top" alt="">
                HistoGraff
                </a>
                <ul>
                    <!--Botones de navegacion-->
                    <a class="barraNavegacion" href="#">Graffitis</a>
                    <a class="barraNavegacion" href="../agendarTour.html">Agendar Tour</a>
                    <a class="barraNavegacion" href="../LoginAdmin.html">Administrador</a>
                    <a class="barraNavegacion" href="../LoginGuia.html">Guia</a>
                </ul>   
            </nav>
        </header>
            <center><h1>Galeria de grafftis de la comuna 13</h1></center><br>
            <?php
            include ("conexion.php");
            $query="SELECT * FROM graffiti";
            $resultado=mysqli_query($conex,$query);
            while($row=$resultado->fetch_assoc()){
            ?>
            <section>
            <div class="container">
            <div class="row">
                    <div class="card">  
                        <div class="card-body" >
                            <center><h3 class="card-title"><?php echo $row['NombreGraffiti'];?></h3></center>
                            <img class="img-fluid"  src="data:image/jpg;base64,<?php echo base64_encode($row['fotoGraffiti']) ?>" alt="error">
                            <p class="card-text" ><?php echo $row['DescripcionGraffiti'];?></p>
                        </div>
                    </div>
                </div>
        </div>
        </section>
        <br>
        <?php
    }
    ?>
    </body>
    <script src="../js/galeria.js"></script>
</html>
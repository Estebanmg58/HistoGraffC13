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
    <script src="../js/validarGuias.js"></script>
    <title>HistoGraff</title>
</head>
<body style="background-color: rgba(236, 233, 234, 1);">
    
<div style="position : absolute; left : 50%; padding:5%" class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <form action="guiasInsert.php" method="POST" id="addGuias" onsubmit="return validarGuias();">
                            <center><legend>Ingresar nuevos guias</legend></center>
                            <div class="form-group">
                                <label>Identificacion Guia</label>
                                <input type="number"  id="id" name="iden" placeholder="Identificación" class="form-control">
                            </div>
                            <div class="form-group">
                                <Label>Nombre Guia</Label>
                                <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Apellido Guia</label>
                                <input type="text" id="apellido" name="apellido" placeholder="Apellido" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Telefono</label>
                                <input type="text" id="telefono" name="telefono" placeholder="Telefono" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" id="email" name="email" placeholder="Email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label >Usuario</label>
                                <input type="text" id="usuario" name="usuario" placeholder="Usuario" class="form-control">
                            </div>
                            <div class="form-group">
                                <label >Contraseña</label>
                                <input type="password" id="clave" name="clave" placeholder="Contraseña" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary vtn-block text-center">Agregar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>
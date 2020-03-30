<?php

include ('conexion.php');

    $name=$_POST['nombreGraffiti'];
    $desc=$_POST['descripcion'];
    $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
    $query="INSERT INTO graffiti (codGraffiti,NombreGraffiti,DescripcionGraffiti,fotoGraffiti)VALUES('','$name','$desc','$foto')";
    $result=mysqli_query($conex,$query);
    if(!$result){
        die ("Error al ingresar grafiti");
    }
    echo "<script>alert('El grafiti a sido ingresado con exito');
    window.history.go(-1)</script>"


?>

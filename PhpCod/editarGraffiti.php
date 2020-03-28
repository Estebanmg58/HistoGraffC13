<?php

include ("conexion.php");

$id = $_POST['id'];
$sql="SELECT codGraffiti,NombreGraffiti,DescripcionGraffiti,fotoGraffiti FROM graffiti WHERE codGraffiti='$id'";
$result=mysqli_query($conex,$sql);
$array = array();

while ($row=$result -> fetch_assoc()) {

    $array[] = array(
        "id" => $row['codGraffiti'],
        "nombreGraffiti" => $row['NombreGraffiti'],
        "descripcion" => $row['DescripcionGraffiti'],
        "foto" => $row['fotoGraffiti']
    );

}

$jsonString= json_encode($array);
echo $jsonString;

?>
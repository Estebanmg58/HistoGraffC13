<?php

include "conexion.php";

 $id2 = $_POST['id'];
 $sql="SELECT cod_solicitud,nombre,apellido,telefono,Email,cantidad,hora_tour
 ,fecha_tour,metodo_pago FROM solicitar_tour WHERE cod_solicitud='$id2'";
      $resul=mysqli_query($conex,$sql);
      $array = array();
      while ($row=$resul -> fetch_assoc()) {

        $array[] = array(
            "id" => $row['cod_solicitud'],
            "nombre" => $row['nombre'],
            "apellido" => $row['apellido'],
            "tel" => $row['telefono'],
            "email" => $row['Email'],
            "cantidad" => $row['cantidad'],
            "hora" => $row['hora_tour'],
            "fecha" => $row['fecha_tour'],
            "metodo" => $row['metodo_pago'],
        );

      }
      $jsonSting = json_encode($array);
      echo $jsonSting;

      

?>
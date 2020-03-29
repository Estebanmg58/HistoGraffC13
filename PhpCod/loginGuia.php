<?php

include ("conexion.php");
session_start();

    $usuarioGuia=$_POST["usuarioGuia"];
    $claveGuia=$_POST["claveGuia"];

    $sql = "SELECT * FROM guia WHERE usuarioGuia = '$usuarioGuia' AND claveGuia = '$claveGuia' ";
    $query=mysqli_query($conex,$sql);
    $registro = mysqli_num_rows($query);
    
    if ($registro > 0 ) {
        $_SESSION['usuarioGuia'] = $usuarioGuia;
        header("Location: guia.php");
    }
    else{
        echo "<script>alert('Usuario y/o contraseña incorrectos');
                    
        </script>";
    }
    
    mysqli_free_result($query);
    mysqli_close($conex);
    
   
?>

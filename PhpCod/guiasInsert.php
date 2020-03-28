<?php 

include ("conexion.php");
session_start();

$id = $_POST['iden'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$query = "INSERT INTO guia(idGuia, NombreGuia, ApellidoGuia, Telefono, Email, usuarioGuia ,claveGuia , idAdministrador) 
VALUES ('$id','$nombre','$apellido','$telefono','$email','$usuario','$clave','1001160255')";
$resultado = mysqli_query($conex, $query);

if (!$resultado){
    echo "<script> alert ('Error al ingresar registros en la base de datos');
    window.history.go(-1);
    </script>";
} else {
    echo "<script> alert ('Registro exitoso');
    </script>";
    header("location: guias.php");
}

?>
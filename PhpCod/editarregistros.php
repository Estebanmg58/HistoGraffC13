<?php

    include "conexion.php";

    if(isset($_POST['update'])){
        $data = [];
        $id=$_POST['id'];
        if ($id){
            $sql="DELETE FROM solicitar_tour where cod_solicitud='$id'";
            $result=mysqli_query($conex,$sql);
            if($result){
                $data["ok"] = "";
            }else{
                $data["error"] = "";
            }
        }else{
            $data["sinId"] = "";
        }
        echo json_encode($data);   
    }


    if(isset($_POST['foranea'])){
                $data = [];
                $Id=$_POST['id'];
                $nombree=$_POST['nombre'];
                $apellido=$_POST['apellido'];
                $telefono=$_POST['tel'];
                $email=$_POST['email'];
                $cantidad=$_POST['cantidad'];
                $hora=$_POST['hora'];
                $fecha=$_POST['fecha'];
                $metodo=$_POST['metodo'];
                if($Id){
                    $sql="UPDATE solicitar_tour SET nombre='$nombree', apellido='$apellido', 
                    telefono='$telefono', Email='$email', cantidad='$cantidad', hora_tour='$hora',
                    fecha_tour='$fecha', metodo_pago='$metodo' WHERE cod_solicitud='$Id' ";
                    $resultado=mysqli_query($conex,$sql);
        
                    if($resultado){
                        $data["ok"] = "";
                       
                    }else{
                        $data["mal"] = "";   
                    }
                    echo json_encode($data);
                }
                
            }


?>
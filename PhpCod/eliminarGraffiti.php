<?php


    include ('conexion.php');

    if(isset($_POST['update'])){
        $data = [];
        $id=$_POST['id'];
        if($id){
            $sql="DELETE FROM graffiti where codGraffiti='$id'";
            $result=mysqli_query($conex,$sql);
            if($result){
                $data["ok"] = "";
            }else{
                $data["error"] = "";
            }
        }
        else{
            $data["sinId"] = "";
        }
        echo json_encode($data);
        }

        
?>
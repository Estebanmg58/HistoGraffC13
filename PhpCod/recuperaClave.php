<?php

use  PHPMailer \ PHPMailer \ PHPMailer ; 
use  PHPMailer \ PHPMailer \ Exception ;

require  'PHPMailer/Exception.php'; 
require  'PHPMailer/PHPMailer.php'; 
require  'PHPMailer/SMTP.php';
include ("conexion.php");


$errors = array();
	
if(!empty($_POST))
{
    $email = $mysqli->real_escape_string($_POST['email']);
    
    if(!isEmail($email))
    {
        $errors[] = "Debe ingresar un correo electronico válido";
    }
    
    if(emailExiste($email))
    {   
        $nombre=$_POST['NombreAdministrador'];
        $asunto = 'Recuperar Password - Sistema de Usuarios';
        $cuerpo = "Hola $nombre: <br /><br />Se ha solicitado un reinicio de contraseña. <br/><br/>Para restaurar la contraseña, visita la siguiente direccion: <a href='confirmaContraseña.php'</a>";
        
        if(enviarEmail($email, $nombre, $asunto, $cuerpo)){
            echo "Hemos enviado un correo electrónico a las dirección $email para restablecer tu password.<br />";
            echo "<a href='LoginAdmin.html' >Iniciar Sesión</a>";
            exit;
        }
        } else {
        $errors[] = "La dirección de correo electrónico no existe";
    }
}

function mandaCorreo($mail,$data=''){

    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'histograff.c13@gmail.com';                     
    $mail->Password   = 'HistoGraffc13';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
    $mail->Port       = 587;                                    

    
    $mail->setFrom('histograff.c13@gmail.com', 'HistoGraff');
    $mail->addAddress($email);

    
    $mail->isHTML(true);                                  
    $mail->Subject = 'Recuperar contraseña';
    $mail->Body    = '<div>
    <p><strong>Su contraseña a sido modificada con éxito</strong></p>
    <p><strong>Su nueva clave es:</strong></p>
    <p><strong>Clave: '. $data['Clave'] .'</strong></p>
    </div>
    ';

    $mail->send();

}

?>
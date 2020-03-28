<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HistoGraff</title>
</head>
<body>
    <?php

include ('conexion.php');

use  PHPMailer \ PHPMailer \ PHPMailer ; 
use  PHPMailer \ PHPMailer \ Exception ;

require  'PHPMailer/Exception.php'; 
require  'PHPMailer/PHPMailer.php'; 
require  'PHPMailer/SMTP.php';


$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cel = $_POST['cel'];
$email = $_POST['email'];
$cantidad = $_POST['cantidad'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$pago = $_POST['pago'];

$captcha = $_POST['g-recaptcha-response'];

$secret = '6LflOuMUAAAAAL_65vlp5LTS2veRIHOwbD6_SBK0';

$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
    
var_dump($response);

$arr = json_decode($response, TRUE);

 

$inser = "INSERT INTO solicitar_tour(`id_solicitante`, `nombre`, `apellido`, `telefono`, `Email`, `cantidad`, `fecha_tour`, `hora_tour`, `metodo_pago`, `idAdministrador`)
VALUES('$id','$nombre','$apellido','$cel','$email','$cantidad','$fecha','$hora','$pago','4567890')";

$resultado = mysqli_query($conex, $inser);  


if (!$captcha){
    echo "<script>alert ('Por favor verifica el captcha');
    window.history.go(-1);
    </script>";
} else if (!$resultado || !$arr['success']){
    echo "<script> alert ('Error al agendar verifique el captcha');
    window.history.go(-1);
    </script>";
    echo $resultado;
} else if ($arr['success'] && $resultado){
    echo "<script> alert ('El captcha fue validado correctamente, y el tour se solicitó con éxito');
    window.history.go(-1);
    </script>";

    $mail = new PHPMailer(true);

try {
                        
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
    $mail->Subject = 'La solicitud del tour ha sido exitosa';
    $mail->Body    = 'Señor(a) ' .$nombre. ', cordial saludo. Este correo es enviado para la confirmación de su tour el dia ' .$fecha. ' a las ' .$hora;

    $mail->send();
} catch (Exception $e) {
    echo "<script> alert ('Hubo un error al enviar el mensaje, compruebe que la dirección de correo ingresada sea correcta: {$mail->ErrorInfo}');</script>";
}

} 


mysqli_close($conex);

?>
</body>
</html>
<?php


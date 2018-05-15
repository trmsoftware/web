<?php
 
// Cargamos la clase PHPMailer
require_once("class.phpmailer.php");


//Recibir todos los parámetros del formulario
$message = $_POST['message'];
$name = $_POST['name'];
$email = $_POST['email'];

// Instanciamos un objeto PHPMailer

if( isset($_POST['email']) )
{
     $mail = new PHPMailer();
}

 
// Le decimos que usamos el protocolo SMTP
$mail->IsSMTP();
 
// Le decimos que es necesario autenticarse
$mail->SMTPAuth = true;
 
// Asignamos nuestro servidor SMTP
$mail->Host = "smtp.trmsoftware.com";
 
// Asignamos el puerto SMTP que usa nuestro servidor
// Normalmente es el 25, pero tu servidor lo podría haber cambiado.
$mail->Port = 587;

// Indicamos aquí nuestro nombre de usuario
$mail->Username = "admin@trmsoftware.com";
 
// Indicamos la contraseña
$mail->Password = "24172307Pikachu";
 
// Añadimos la dirección del remitente
$mail->From = "admin@trmsoftware.com";
 
// Añadimos el nombre del remitente
$mail->FromName = $email;

 
// Le indicamos que nuestro Email está en Html
$mail->IsHTML(true);
 
// Indicamos la dirección y el nombre del destinatario
$mail->AddAddress("info@trmsoftware.com", "Formulario TRM");
 
// Ponemos aquí el asunto
$mail->Subject = "TRM";
 
// Creamos todo el cuerpo del Email en Html en la variable $body
$body = $name . ", con email: ".$email.", le ha enviado un mensaje desde el formulario de TRM: " . $message;
 
// Añadimos aquí el cuerpo del Email
$mail->MsgHTML($body);
 
if($mail->Send())
{
    echo'<script type="text/javascript">
            alert("Enviado Correctamente");
            window.location="http://trmsoftware.com"
         </script>';
}
else{
    echo'<script type="text/javascript">
            alert("NO ENVIADO, intentar de nuevo");
            window.location="http://trmsoftware.com"
         </script>';
}
?>

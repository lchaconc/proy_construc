<?php
// Capturamos los datos:



$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$header = 'FROM empresaconstruteccr@gmail.com';
//mail('empresaconstruteccr@gmail.com', $subject,  $message, $mobile, $email );
mail('empresaconstruteccr@gmail.com', $subject, $mensaje);
echo "Mensaje enviado";

?>

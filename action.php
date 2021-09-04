<?php
$user_email = $_GET["user_mail"];
$user_message = $_GET["user_message"];

$from = "From: Olga Kosova <olha.kosova@gmail.com>";
$to = "olha.kosova@gmail.com";

$subject = "Este es un mensaje enviado desde su página web del seguiente correo: " . $user_email;
$message = "Contenido del mensaje: " . $user_message;

mail($to,$subject,$message,$from);

echo "<h1>Su mensaje ha sido enviado. Le contactamos en breve.</h1>"
?> 
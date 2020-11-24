<?php

$destino = "jahero1104@gmail.com";
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];

$header = "mensaje de pagina";

$contenido = "Nombre: " . $nombre . "\nCorreo: " . $email . "\nTelefono" . $telefono . "\nMensaje: " . $mensaje;
mail($destino, $asunto, $contenido, $header);

echo "<script>alert('correo enviado exitosamente')</script>";


header("Location:index.html");

// $nombre = $_POST['name'];
// $mail = $_POST['email'];
// $empresa = $_POST['subject'];
// $mensaj = $_POST['message'];

// $header = 'From: ' . $mail . " \r\n";
// $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
// $header .= "Mime-Version: 1.0 \r\n";
// $header .= "Content-Type: text/plain";

// $mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
// $mensaje .= "Su e-mail es: " . $mail . " \r\n";
// $mensaje .= "Telefono: " . $empresa . " \r\n";
// $mensaje .= "Mensaje: " . $_POST['message'] . " \r\n";
// $mensaje .= "Enviado el " . date('d/m/Y', time());

// $para = 'jahero1104@gmail.com';
// $asunto = 'Mensaje de mi sitio web';

// mail($para, $asunto, utf8_decode($mensaje), $header);

// header("Location:index.html");
?>
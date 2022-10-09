<?php
$destinatario = 'williancarolara@hotmail.com';

$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$email = $_POST['email'];


$header = "Enviado desde formalario php";
$mensajecompleto = $mensaje . "\nAtentamente:" . $nombre;

mail($destinatario, $asunto, $mensaje, $header);
echo "<script>alert('correo enviado') </script>";
echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";
?>

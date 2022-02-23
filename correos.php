<?php




// Esta es la variable donde se enviará el mensaje
$destinatario = 'countertheorys@gmail.com'; 
$asunto = 'Reserva-Pedido';

$nombre = $_POST['name'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$fecha = $_POST['fecha'];

$texto = $_POST['texto'];



$header = 'Enviado desde RESTAURANTE';
$mensajeCompleto = 'Nombre: ' . $nombre . "\r\n" .
                    'Email: ' . $email . "\r\n" .
                    'Telefono: ' . $telefono . "\r\n" .
                    'Fecha: ' . $fecha . "\r\n" .
                    'Mensaje: ' . $texto;


mail($destinatario, $asunto , $mensajeCompleto, $header);
echo "<script>alert('correo enviado')</script>";
echo "<script> setTimeout(\"location.href='index.php'\",1000) </script>";
?>
<?php
$destinatario= 'jhuarangas@autonoma.edu.pe';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];


$header ="Enviado desde la pagina de GySTableros";
$mensajecompleto = $mensaje."\nAtentamente: ".$nombre;

mail($destinatario,$mensajecompleto,$header);
echo "<script>alert ('correo exitoso')</script>";
echo "<script> setTimeout(\"location.href='contacto.php'\",1000) </script>";



?>
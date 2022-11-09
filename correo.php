<?php
    $destinatario = 'danielcamacho007@gmail.com';
    //aqui llegará el mensaje
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];

    $header = "Enviado desde la página de Quachic Games";
    $mensajeCompleto = $mensaje . "\n Atentamente: " . $nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>alert('Correo enviado exitosamente')</script>";
    echo "<script>setTimeout(\"location.href=Helloworld.html'\",1000)</script>";
?>
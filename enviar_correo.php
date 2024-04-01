<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];
    $destinatario = 'santiago4herrera12@gmail.com';
    $asunto = 'Mensaje de contacto de DataSayan';

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Correo electrónico: $correo\n\n";
    $contenido .= "Mensaje:\n$mensaje";

    $headers = 'From: ' . $correo . "\r\n" .
        'Reply-To: ' . $correo . "\r\n";

    mail($destinatario, $asunto, $contenido, $headers);
    
    // Redirigir a una página de confirmación
    header('Location: confirmacion.html');
} else {
    // Si alguien intenta acceder directamente a este archivo, redirigir a la página de contacto
    header('Location: contacto.html');
}
?>

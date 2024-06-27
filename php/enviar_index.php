<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $motivo = $_POST["motivo_consulta"];
    $mensaje = $_POST["mensaje"];

    // Configura la dirección de correo a la que deseas enviar el formulario
    $destinatario = "lucrecia.gondar@gmail.com";
    $asunto = "Nuevo mensaje del formulario de contacto";

    // Crea el cuerpo del correo
    $cuerpo = "Nombre: $nombre\nApellidos: $apellidos\nEmail: $email\nTeléfono: $telefono\nMotivo: $motivo\nMensaje:\n$mensaje";
    $mensaje.="enviado el". date('d/m/Y'), time();

    // Envía el correo
    mail($destinatario, $asunto, $cuerpo, $mensaje, $header);

    // Redirige al usuario a una página de confirmación
    header("Location: confirmacion.html");
    exit;
}
?>


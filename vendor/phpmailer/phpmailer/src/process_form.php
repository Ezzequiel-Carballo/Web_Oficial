<?php
require_once __DIR__ . '../../../../../config/db.php.';
require_once __DIR__ . '../../../../autoload.php';
require_once __DIR__ . '/Mail/Mailer.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO message_portafolio (name, email, message) VALUES ('$name', '$email', '$message')";

    if (mysqli_query($db, $sql) === TRUE) {
        echo "Datos guardados correctamente";

        // Enviar correo electrónico usando PHPMailer
        $mailer = new Mailer();
        $subject = 'Nuevo formulario enviado';
        $body = "Nombre: $name<br>Correo: $email<br>Mensaje: $message";

        $recipientEmail = 'ezequielcarballo018@gmail.com';

        if ($mailer->send($recipientEmail, $subject, $body)) {
            echo 'Correo enviado correctamente';
        } else {
            echo 'Error al enviar el correo';
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }

    mysqli_close($db);
}

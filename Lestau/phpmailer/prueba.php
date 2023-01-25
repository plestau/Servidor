<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'pepepruebasxd@gmail.com';                // SMTP username
    $mail->Password = 'lofwmzvzafammkbt';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable SSL encryption, TLS also accepted with port 587
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('pepepruebasxd@gmail.com', 'Mi correo para pruebas');
    $mail->addAddress('natimotril02@gmail.com', 'Mi vidaa');     // Add a recipient
    //$mail->addAddress('contact@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('texto.txt', 'texto importante');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Te amoooo';
    $mail->Body = 'Eres el amor de mi vidaa te amoo <333 juanito es el guardián de nuestro amor (natau4ever) <3';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>

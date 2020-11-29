<?php

use  PHPMailer\PHPMailer\PHPMailer;
use  PHPMailer\PHPMailer\Exception;

require_once 'phpmailer/phpmailer/src/Exception.php';
require_once 'phpmailer/phpmailer/src/PHPMailer.php';
require_once 'phpmailer/phpmailer/src/SMTP.php';

function sendEmail($userEmail, $token, $username)
{

  $mail = new PHPMailer(true);
  try {
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();
    $mail->Host = 'smtp.googlemail.com';  //gmail SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'your email';   //username
    $mail->Password = 'your password';   //password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    //Recipients
    $mail->setFrom("your email", 'Incauca S.A.S');
    $mail->addAddress($userEmail, $username);     // Add a recipient


    $mail->isHTML(true);

    $mail->Subject = 'Recuperacion de contraseña de Acceso';
    $mail->Body    = '<p>Hola ' . $username . ', dirigase al siguiente enlace para recuperar su contraseña</p><br><a href="' . $_SERVER['HTTP_HOST'] . '/recover_password.php?token=' . $token . '"> Haz click aqui</a>';

    $mail->send();
    echo '<script>alert("Se a enviado a tu email la autorizacion de repureacion de contraseña")</script>';
    echo "<script>setTimeout(\"location.href = '/';\",100)</script>";
  } catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    echo '<script>alert("No se ha podio enviar tu email, intenta más tarde")</script>';
    echo "<script>setTimeout(\"location.href = '/';\",100)</script>";
  }
}

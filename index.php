<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'phatnguyen19111997@gmail.com';
$mail->Password = 'dcthpowzhbnctbvf';
$mail->setFrom('phatnguyen19111997@gmail.com', 'dieuthuong');
$mail->addReplyTo('phatnguyen19111997@gmail.com', 'dieuthuong');
$mail->addAddress('phatnguyen19111997@gmail.com', 'Receiver Name');
$mail->Subject = 'PHPMailer SMTP message';
$mail->msgHTML(file_get_contents('message.html'), __DIR__);
$mail->AltBody = 'This is a plain text message body';
//$mail->addAttachment('test.txt');
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}
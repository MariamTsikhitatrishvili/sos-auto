<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

$fullName = $_POST['full-name'];
$phoneNumber = $_POST['phone-number'];
$startAddress = $_POST['start-address'];
$vechicle = $_POST['vechicle'];
$towDate = $_POST['tow-date'];

$body = 'სახელი: ' . $fullName
    . ' '
    . 'მობილურის ნომერი: ' . $phoneNumber
    . ' '
    . 'ადგილმდებარეობა: ' . $startAddress
    . ' '
    . 'ტრანსპორტის სახეობა: ' . $vechicle
    . ' '
    . 'თარიღი: ' . $towDate
    . ' ';

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();
    $mail->CharSet = "UTF-8";                     //Send using SMTP
    $mail->Host       = 'smtp.mailtrap.io';    //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                  //Enable SMTP authentication
    $mail->Username   = 'ade20f8485f46d';      //SMTP username
    $mail->Password   = 'ff9875c0d99482';      //SMTP password
    $mail->Port       = 2525;                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setfrom('from@example.com', 'Mailer');
    $mail->addaddress('joe@example.net', 'Joe User');

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Subject';
    $mail->Body    = $body;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    readfile('./form-success.html');
} catch (Exception $e) {
    readfile('./form-fail.html');
}

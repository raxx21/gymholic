<?php

require '/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = ture;
$mail->SMTPSecure ='ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'gymholic@gmail.com';
$mail->Password = 'rajeshch';
$mail->SetFrom('no-reply@gymholic.org');
$mail->Subject = 'Hello World';
$mail->Body = 'A test email!';
$mail->AddAddress('rajesh@gymholic.org');

$mail->Send();
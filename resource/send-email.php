<?php
require 'class.phpmailer.php';
include_once 'class.smtp.php';

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = 'smtp';
$mail->SMTPSecure = 'tls';
$mail->Port = 465; //587;
$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = 'ssl';
$mail->IsHTML(true);
// $mail->SMTPDebug = 1;


$mail->SMTPAuth = true;
$mail->Username = "andretutorials1000@gmail.com"; //wrong username or password fixed that bye..ok very thank u kk
$mail->Password = "";

//Sender Info
$mail->From = "no-reply@andre.com";
$mail->FromName = "User Authentication";

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


$mail->SMTPAuth = true;
$mail->Username = "andretutorials1000@gmail.com";
$mail->Password = "Tut0r1als!w3b";

//Sender Info
$mail->From = "no-reply@andre.com";
$mail->FromName = "User Authentication";

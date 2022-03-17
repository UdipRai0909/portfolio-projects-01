<?php


require_once 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class mailman
{

 public function smtp_mailer($fromName, $fromEmail, $toEmail, $subject, $htmlMsg)
 {
  try {
   $mail = new PHPMailer(true);
   $mail->isSMTP();
   $mail->SMTPSecure = 'tls';
   $mail->SMTPAuth   = true;
   $mail->Host       = 'smtp.gmail.com';
   $mail->Port       = 587;

   $mail->CharSet = 'UTF-8';
   $mail->Username = "udiprai28@gmail.com";
   $mail->Password = "hkpzttvwhnmsuzhb";

   $mail->setFrom($fromEmail, $fromName);
   $mail->addAddress($toEmail);

   $mail->isHTML(true);
   $mail->Subject = $subject;
   $mail->Body    = $htmlMsg;

   $mail->send();
   // echo 'Message has been sent';
   include('includes/msg_success.php');
   // return true;
  } catch (Exception $e) {
   // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   echo $e->getMessage();
   // include('includes/msg_error.php');
   // return false;
  }
 }
}

$mailObj = new mailman();
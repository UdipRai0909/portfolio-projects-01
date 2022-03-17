<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../vendor/autoload.php';

function smtp_mailer($to, $toPerson, $subject, $htmlMsg)
{
 try {
  // Instantiation and passing `true` enables exceptions
  $mail = new PHPMailer(true);

  //Server settings
  // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                   // Enable verbose debug output
  // $mail->SMTPDebug = 3;
  // Send using SMTP
  $mail->isSMTP();
  // Set the SMTP server to send through
  $mail->Host       = 'smtp.gmail.com';
  $mail->SMTPSecure = 'tls';
  // Enable SMTP authentication
  $mail->SMTPAuth   = true;
  $mail->CharSet = 'UTF-8';
  // SMTP username
  $mail->Username = "deuxgenesis@gmail.com";
  // SMTP password
  $mail->Password = "abcdeefefeada";
  // Enable TLS encryption `PHPMailer::ENCRYPTION_SMTPS` encouraged
  // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port       = 587;   // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

  //Recipients
  $mail->setFrom('deuxgenesis@gmail.com', 'Phantom Kid');
  // Add a recipient
  $mail->addAddress($to, $toPerson);
  // Name is optional
  // $mail->addReplyTo('info@example.com', 'Information');
  // $mail->addCC('cc@example.com');
  // $mail->addBCC('bcc@example.com');


  // Attachments
  // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
  // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

  // Content
  // Set email format to HTML
  $mail->isHTML(true);
  $mail->Subject = $subject;
  $mail->Body    = $htmlMsg;
  // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
  // $mail->SMTPOptions = array('ssl' => array(
  //  'verify_peer' => false,
  //  'verify_peer_name' => false,
  //  'verify_peer' => false
  // ));
  $mail->send();
  echo 'Message has been sent';
 } catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
 }
}
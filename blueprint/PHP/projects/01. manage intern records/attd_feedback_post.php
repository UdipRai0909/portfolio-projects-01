<?php
require_once 'assets/db/mailman.php';

if (!isset($_POST['attdFeedbackSubmit'])) {
 include "includes/msg_error.php";
 // header("Location: index.php");
} else {
 // All the form values from POST method
 $fromName = $_POST['attdFeedbackName'];
 $fromEmail = $_POST['attdFeedbackFromEmail'];
 $toEmail = $_POST['attdFeedbackToEmail'];
 $subject = $_POST['attdFeedbackSubject'];
 $phoneNo = $_POST['attdFeedbackPhone'];
 $msg = $_POST['attdFeedbackMsg'];

 $htmlMsg = "<b><u>This email was sent using SMTP by the user called $fromName:</b></u>" . "<br/>" .
  "<b>Sender:</b> " . strval($fromEmail) . "<br/>" .
  "<b>Receiver:</b> " . strval($toEmail) . "<br/>" .
  "<b>Phone Number:</b> " . strval($phoneNo) . "<br/>" .
  "<br/><br/><b>Message:</b><br/> " . strval($msg);

 // Use the function in the class mail.php we created
 $mailObj->smtp_mailer($fromName, $fromEmail, $toEmail, $subject, $htmlMsg);
}
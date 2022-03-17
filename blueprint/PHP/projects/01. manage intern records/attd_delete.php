<?php
$title = 'Delete attendee';
require_once "assets/db/conn.php";
require_once 'includes/auth_check.php';

if (!$_GET['attdDelId']) {
 include "includes/msg_error.php";
 header("Location: attd_view_attendees.php");
} else {
 // Get ID Values
 $id = $_GET['attdDelId'];

 // Call Delete function
 $result = $crud->deleteAttendee($id);

 // Redirect
 if ($result) {
  header("Location: attd_view_attendees.php?delete=success");
 } else {
  include "includes/msg_error.php";
 }
}
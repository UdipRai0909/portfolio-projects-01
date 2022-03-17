<?php
// $title = 'Insert attendee (Post)';
// require_once 'includes/header.php';
require_once 'assets/db/conn.php';
require_once 'assets/db/udip.php';

if (!isset($_POST['attdFormCreateSubmit'])) {
 include "includes/msg_error.php";
} else {
 $fname = $_POST['finame'];
 $lname = $_POST['laname'];
 $dob = $_POST['dob'];
 $email = $_POST['emailadd'];
 $phone = $_POST['phnumber'];
 $aoe = $_POST['aoe'];

 // Avatar File Details
 $imgName = $_FILES["avatarImg"]["tmp_name"];
 $extName = $_FILES["avatarImg"]["name"];
 $imgSize = $_FILES["avatarImg"]["size"];

 // Avatar Directory Details
 $targetDir = "assets/img/avatar_uploads/avatarImg_";
 $ext = pathinfo($extName, PATHINFO_EXTENSION);
 $randomStr = $custom->getRandomStr(8);

 // Check if file is empty and act accordingly
 empty($imgName) ? $destination = null : $destination = "$targetDir$randomStr.$ext";

 // call function to insert and track if it was a success or not
 $isSuccess = $crud->insert($fname, $lname, $dob, $email, $phone, $aoe, $destination);
 // Variable to store 'get all the records' in the table 'specialities'
 $results = $crud->getSpecialities();

 // redirect to respective success/error message pages.php
 if ($isSuccess) {
  move_uploaded_file($imgName, $destination);
  include "includes/msg_success.php";
 } else {
  include "includes/msg_error.php";
 }
}
?>

<!-- php require_once 'includes/footer.php'; ?> -->
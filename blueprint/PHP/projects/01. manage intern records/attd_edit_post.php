<?php
// $title = 'Update attendee (Post)';
require_once 'assets/db/conn.php';
require_once 'assets/db/udip.php';
// require_once 'includes/auth_check.php';
// require_once 'includes/header.php';

if (isset($_POST['attdFormEditSubmit'])) {
 $id = $_POST['attdEditId'];
 $fname = $_POST['finame'];
 $lname = $_POST['laname'];
 $dob = $_POST['dob'];
 $email = $_POST['emailadd'];
 $phone = $_POST['phnumber'];
 $aoe = $_POST['aoe'];
 $checkAvatar = $_POST['checkAvatar'];

 // Avatar File Details
 $imgName = $_FILES["avatarImg"]["tmp_name"];
 $extName = $_FILES["avatarImg"]["name"];
 $imgSize = $_FILES["avatarImg"]["size"];

 // Avatar Directory Details
 unlink($checkAvatar);
 $targetDir = "assets/img/avatar_uploads/avatarImg_";
 $ext = pathinfo($extName, PATHINFO_EXTENSION);
 $randomStr = $custom->getRandomStr(8);

 // Check if file is empty and act accordingly
 empty($imgName) ? $destination = $checkAvatar : $destination = "$targetDir$randomStr.$ext";

 // call crud function
 $result = $crud->editAttendee($id, $fname, $lname, $dob, $email, $phone, $aoe, $destination);

 // redirect to respective success/error message pages.php
 if ($result) {
  move_uploaded_file($imgName, $destination);
  include "includes/msg_success.php";
 } else {
  include "includes/msg_error.php";
 }
} else {
 include "includes/msg_error.php";
}
?>

<!-- php require_once 'includes/footer.php'; ?> -->
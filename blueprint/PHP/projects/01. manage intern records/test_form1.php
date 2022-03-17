<?php
$title = 'Test Form1 (Get Method)';
require_once 'includes/header.php';
?>

<h1 class="page-title text-center"><?php echo $title ?></h1>

<div class="container-fluid d-flex flex-column py-3">
 <form class="p-2 d-flex justify-content-center" method="get" action="test_form1_get.php">
  <div class="row w-50 p-3 border border-3 border-dark">
   <legend class="text-center text-decoration-underline">Insert Form</legend>
   <div class="col-6 float-left">
    <label for="finame" class="form-label">First Name</label>
    <input required type="text" class="form-control" id="finame" name="finame" aria-describedby="fihelp">
    <!-- <div id="fihelp" class="form-text">First name help message</div> -->
   </div>
   <div class="col-6 float-right">
    <label for="laname" class="form-label">Last Name</label>
    <input required type="text" class="form-control" id="laname" name="laname" aria-describedby="lahelp">
    <!-- <div id="lahelp" class="form-text">Last name help message</div> -->
   </div>
   <div class="col-6 float-left">
    <label for="dob" class="form-label">Date of Birth</label>
    <div>
     <!-- <i class="far fa-lg fa-calendar-alt position-absolute text-right m-2 p-1"></i> -->
     <input required type="text" class="form-control" id="dob" name="dob" aria-describedby="dobhelp">
    </div>
   </div>
   <div class="col-6 float-right">
    <label for="aoe" class="form-label">Area of expertise</label>
    <select class="form-control" id="aoe" name="aoe" aria-label="Area of expertise" aria-describedby="aoehelp">
     <option selected>Choose an option</option>
     <option>Frontend Developer</option>
     <option>Backend Developer</option>
     <option>Fullstack Developer</option>
     <option>Data Scientist</option>
     <option>Software Developer</option>
     <option>Data Engineer</option>
    </select>
    <!-- <div id="aoehelp" class="form-text">Area of expertise help message</div> -->
   </div>

   <div class="col-8 float-left">
    <label for="emailadd" class="form-label">Email Address</label>
    <input required type="email" class="form-control" id="emailadd" name="emailadd" aria-describedby="emhelp">
    <div id="emhelp" class="form-text">We'll never share your email address with anyone else.</div>
   </div>
   <div class="col float-right pe-0">
    <label for="phnumber" class="form-label">Phone</label>
    <input required type="number" class="form-control" id="phnumber" name="phnumber" aria-describedby="phnhelp">
    <div id="phnhelp" class="form-text">Confidential/Wont keep logs</div>
   </div>

   <div class="col-12 d-flex justify-content-center">
    <a href="attd_view_attendees.php" class="m-2 btn btn-info me-2">Back to list</a>
    <button type="submit" name="getSubmit" class="m-2 btn btn-primary">Submit</button>
   </div>

  </div>


 </form>
</div>

<?php require_once 'includes/footer.php'; ?>
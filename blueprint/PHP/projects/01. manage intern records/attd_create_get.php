<?php
$title = 'Create attendee (Get)';
require_once 'includes/header.php';
require_once 'assets/db/conn.php';

// Variable to store 'get all the records' in the table 'specialities'
$results = $crud->getSpecialities();
?>

<h1 class="page-title text-center"><?php echo $title ?></h1>

<div class="container-fluid flex-column d-flex py-3">
 <form class="p-2 d-flex justify-content-center" method="post" action="attd_create_post.php" enctype="multipart/form-data">
  <div class="row w-50 p-3 border border-3 border-dark">
   <legend class="text-center text-decoration-underline">Create Form</legend>
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
   <div class="col-12 d-flex justify-content-between align-items-center mt-2">
    <div class="col-8 float-left">
     <label for="avatarImg" class="custom-file-label">Upload avatar</label>
     <input type="file" class="form-control" id="avatarImg" name="avatarImg" aria-describedby="avHelp">
     <div id="avHelp" class="form-text">Profile Picture is optional. (Default avatar = Ironman)</div>
    </div>
    <div class="col-3 float-right mr-0">
     <img class="w-100 modify-avatar-pic border border-dark border-3" src="assets/img/avatar_uploads/ironman.png" alt="Avatar/Profle Picture">
    </div>
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
     <!-- <option selected>Choose an option</option> -->
     <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
      <option value="<?php echo $r['speciality_id'] ?>"> <?php echo $r['name'] ?></option>
     <?php } ?>
    </select>
    <!-- <div id="aoehelp" class="form-text">Area of expertise help message</div> -->
   </div>
   <div class="col-8 float-left">
    <label for="emailadd" class="form-label">Email Address</label>
    <input required type="email" class="form-control" id="emailadd" name="emailadd" aria-describedby="emhelp">
    <div id="emhelp" class="form-text">We'll never share your email address with anyone else.</div>
   </div>
   <div class="col float-right">
    <label for="phnumber" class="form-label">Phone</label>
    <input required type="number" class="form-control" id="phnumber" name="phnumber" aria-describedby="phnhelp">
    <div id="phnhelp" class="form-text">Confidential/Wont keep logs</div>
   </div>
   <div class="col-12 d-flex justify-content-center">
    <a href="attd_view_attendees.php" class="m-2 btn btn-info me-2">Back to list</a>
    <button type="submit" name="attdFormCreateSubmit" class="m-2 btn btn-success">Create</button>
   </div>
  </div>
 </form>
</div>
<?php require_once 'includes/footer.php'; ?>
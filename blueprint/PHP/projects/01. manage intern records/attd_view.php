<?php
$title = 'View attendee';
require_once 'includes/header.php';
require_once 'includes/auth_check.php';
require_once 'assets/db/conn.php';

// Get attendee by id
if (!isset($_GET['attdViewId'])) {
 include "includes/msg_error.php";
} else {
 $id = $_GET['attdViewId'];
 $result = $crud->getAttendeeDetails($id);
?>

 <style>
  .emp-profile {
   padding: 3%;
   margin-top: 3%;
   margin-bottom: 3%;
   border-radius: 0.5rem;
   background: #fff;
  }

  .profile-img {
   text-align: center;
  }

  .profile-img img {
   width: 70%;
   height: 100%;
  }

  .profile-img .file {
   position: relative;
   overflow: hidden;
   margin-top: -20%;
   width: 70%;
   border: none;
   border-radius: 0;
   font-size: 15px;
   background: #212529b8;
  }

  .profile-img .file input {
   position: absolute;
   opacity: 0;
   right: 0;
   top: 0;
  }

  .profile-head h5 {
   color: #333;
  }

  .profile-head h6 {
   color: #0062cc;
  }

  .profile-edit-btn {
   border: none;
   border: none;
   border-radius: 1.5rem;
   width: 30%;
   padding: 2%;
   font-weight: 600;
   color: #fff;
   cursor: pointer;
  }

  .proile-rating {
   font-size: 12px;
   color: #818182;
   margin-top: 5%;
  }

  .proile-rating span {
   color: #495057;
   font-size: 15px;
   font-weight: 600;
  }

  .profile-head .nav-tabs {
   margin-bottom: 5%;
  }

  .profile-head .nav-tabs .nav-link {
   font-weight: 600;
   border: none;
  }

  .profile-head .nav-tabs .nav-link.active {
   border: none;
   border-bottom: 2px solid #0062cc;
  }

  .profile-work {
   padding: 14%;
   margin-top: -15%;
  }

  .profile-work p {
   font-size: 12px;
   color: #818182;
   font-weight: 600;
   margin-top: 10%;
  }

  .profile-work a {
   text-decoration: none;
   color: #495057;
   font-weight: 600;
   font-size: 14px;
  }

  .profile-work ul {
   list-style: none;
  }

  .profile-tab label {
   font-weight: 600;
  }

  .profile-tab p {
   font-weight: 600;
   color: #0062cc;
  }
 </style>

 <!-- Bootstrap Card taken from https://bbbootstrap.com/snippets/bootstrap-user-profile-statistics-36385949 -->

 <div class="container emp-profile">
  <form method="post">
   <div class="row">
    <div class="col-md-4">
     <div class="profile-img">
      <img src="<?php echo empty($result['avatar_path']) ? "assets/img/avatar_uploads/ironman.png" : $result['avatar_path'] ?>" alt="Avatar/Profle Picture" />
      <!-- <div class="file btn btn-lg btn-primary">
      Change Photo
      <input type="file" name="file" />
     </div> -->
     </div>
    </div>
    <div class="col-md-4">
     <div class="profile-head">
      <h5 class="page-title">
       <?php echo $result['first_name'] . " " . $result['last_name']; ?>
      </h5>
      <h6>
       <?php echo $result['name']; ?>
      </h6>
      <p class="proile-rating">RANKINGS : <span>8/10</span></p>
      <ul class="nav nav-tabs" id="myTab" role="tablist">
       <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
       </li>
       <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
       </li>
      </ul>
     </div>
    </div>
    <div class="col-md-4">
     <button type="button" class="btn btn-success profile-edit-btn float-left">
      <a href="attd_edit_get.php?attdEditId=<?php echo $result['attendee_id'] ?>" class="text-white text-decoration-none">Edit
       Profile</a>
     </button>

     <button type="button" class="btn btn-info profile-edit-btn">
      <a href="attd_view_attendees.php" class="text-white text-decoration-none">Back to list</a>
     </button>
    </div>
   </div>
   <div class="row">
    <div class="col-md-4">
     <div class="profile-work">
      <p>WORK LINK</p>
      <a href="">Website Link</a><br />
      <a href="">Bootsnipp Profile</a><br />
      <a href="">Bootply Profile</a>
      <p>SKILLS</p>
      <a href="">Web Designer</a><br />
      <a href="">Web Developer</a><br />
      <a href="">WordPress</a><br />
      <a href="">WooCommerce</a><br />
      <a href="">PHP, .Net</a><br />
     </div>
    </div>
    <div class="col-md-8">
     <div class="tab-content profile-tab" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
       <div class="row">
        <div class="col-md-6">
         <label>User Id</label>
        </div>
        <div class="col-md-6">
         <p><?php echo $result['attendee_id']; ?></p>
        </div>
       </div>
       <div class="row">
        <div class="col-md-6">
         <label>Name</label>
        </div>
        <div class="col-md-6">
         <p><?php echo $result['first_name'] . " " . $result['last_name']; ?></p>
        </div>
       </div>
       <div class="row">
        <div class="col-md-6">
         <label>Email</label>
        </div>
        <div class="col-md-6">
         <p><?php echo $result['email_address']; ?></p>
        </div>
       </div>
       <div class="row">
        <div class="col-md-6">
         <label>Phone</label>
        </div>
        <div class="col-md-6">
         <p><?php echo $result['phone']; ?></p>
        </div>
       </div>
       <div class="row">
        <div class="col-md-6">
         <label>Profession</label>
        </div>
        <div class="col-md-6">
         <p>Intern/Entry Level Programmer</p>
        </div>
       </div>
      </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
       <div class="row">
        <div class="col-md-6">
         <label>Experience</label>
        </div>
        <div class="col-md-6">
         <p>Expert</p>
        </div>
       </div>
       <div class="row">
        <div class="col-md-6">
         <label>Hourly Rate</label>
        </div>
        <div class="col-md-6">
         <p>10$/hr</p>
        </div>
       </div>
       <div class="row">
        <div class="col-md-6">
         <label>Total Projects</label>
        </div>
        <div class="col-md-6">
         <p>230</p>
        </div>
       </div>
       <div class="row">
        <div class="col-md-6">
         <label>English Level</label>
        </div>
        <div class="col-md-6">
         <p>Expert</p>
        </div>
       </div>
       <div class="row">
        <div class="col-md-6">
         <label>Availability</label>
        </div>
        <div class="col-md-6">
         <p>6 months</p>
        </div>
       </div>
       <div class="row">
        <div class="col-md-12">
         <label>Your Bio</label><br />
         <p>Some detail description here..</p>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </form>
 </div>

<?php } ?>

<?php require_once 'includes/footer.php'; ?>
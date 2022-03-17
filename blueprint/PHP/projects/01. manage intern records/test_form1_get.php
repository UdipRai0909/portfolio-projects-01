<?php
$title = 'Test Form1 (Action)';
require_once 'includes/header.php';
?>

<style>
/* @import url("https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap"); */

/* body {
  background-color: gray;
  font-family: "Poppins", sans-serif;
  font-weight: 300;
} */

.container {
 max-width: 2500px;
}

.card {
 width: 380px;
 border: 2px solid #000;
 border-radius: 15px;
 padding: 8px;
 background-color: #fff;
 position: relative;
 /* height: 370px; */
}

.upper {
 height: 100px;
}

.upper img {
 width: 100%;
 border-top-left-radius: 10px;
 border-top-right-radius: 10px;
}

.user {
 position: relative;
}

.profile img {
 height: 80px;
 width: 80px;
 margin-top: 2px;
}

.profile {
 position: absolute;
 top: -50px;
 left: 38%;
 height: 90px;
 width: 90px;
 border: 3px solid #fff;
 border-radius: 50%;
}

.follow {
 border-radius: 15px;
 padding-left: 20px;
 padding-right: 20px;
 height: 35px;
}

.stats span {
 font-size: 29px;
}
</style>

<h1 class="bg-white text-center text-green mb-3 py-3">You have been registered! (GET method)</h1>

<!-- Bootstrap Card taken from https://bbbootstrap.com/snippets/bootstrap-user-profile-statistics-36385949 -->
<div class="container-fluid pt-5 d-flex justify-content-center align-items-center">
 <div class="card">
  <div class="upper"> <img src="https://i.imgur.com/Qtrsrk5.jpg" class="img-fluid"> </div>
  <div class="user text-center">
   <div class="profile"> <img src="https://i.imgur.com/JgYD2nQ.jpg" class="rounded-circle" width="80"> </div>
  </div>
  <div class="mt-5 text-center">
   <h4 class="mb-0">
    <?php
    echo $_GET['finame'] . " " . $_GET['laname'];
    ?>
   </h4>
   <small class="text-muted d-block ">
    <?php echo $_GET['aoe'] . "<br/>" . $_GET['emailadd'] ?>
   </small>
   <button class="btn btn-primary btn-sm follow mt-1">Follow</button>
   <div class="d-flex justify-content-between align-items-center mt-2 px-4">
    <div class="stats">
     <h6 class="mb-0">Followers</h6> <span>8,797</span>
    </div>
    <div class="stats pe-3">
     <h6 class="mb-0">Projects</h6> <span>142</span>
    </div>
    <div class="stats">
     <h6 class="mb-0">Ranks</h6> <span>129</span>
    </div>
   </div>
   <div class="d-block px-4">
    <small class="text-muted d-flex">
     <?php echo "<pre>         Date of Birth   : " . $_GET['dob'] . "<br/>         Contact number  : " . $_GET['phnumber'] . "</pre>"
     ?>
    </small>
   </div>
  </div>
 </div>
</div>

<?php require_once 'includes/footer.php'; ?>
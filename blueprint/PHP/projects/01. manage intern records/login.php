<?php
$title = 'User Login';
require_once 'includes/header.php';
require_once 'assets/db/conn.php';

// If the data was submitted via a form POST request, then
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $username = strtolower(trim($_POST['username']));
 $password = $_POST['password'];
 $hashedPass = md5($password . $username);
 $result = $myuser->getUser($username, $hashedPass);

 if (!$result) {
  echo '<div class="alert alert-danger">Username or Password is incorrect! Please try again.</div>';
 } else {
  $_SESSION['username'] = $username;
  $_SESSION['user_id'] = $result['user_id'];
  header("Location: attd_view_attendees.php?login=success");
 }
}
?>


<h1 class="page-title text-center"><?php echo $title ?></h1>

<div class="container-fluid d-flex py-3 justify-content-center">
 <form class="" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?> ">
  <!-- <legend class="text-center text-decoration-underline">My Login Form</legend> -->
  <div class="col-12">
   <label for="username" class="form-label">Username</label>
   <input required type="text" class="form-control" placeholder="*username = admin*" id="username" name="username" aria-describedby="unhelp" value="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['username']; ?>">

   <?php if (empty($username) && $_SERVER['REQUEST_METHOD'] == 'POST') echo "<p class='text-danger'>$username_error</p>"; ?>

   <!-- <div id="fihelp" class="form-text">First name help message</div> -->
  </div>
  <div class="col-12">
   <label for="password" class="form-label">Password</label>
   <input required type="password" class="form-control" placeholder="*password = pass*" id="password" name="password" aria-describedby="pahelp">

   <?php if (empty($password) && $_SERVER['REQUEST_METHOD'] == 'POST') echo "<p class='text-danger'>$password_error</p>"; ?>

   <!-- <div id="lahelp" class="form-text">Last name help message</div> -->
  </div>


  <div class="container-fluid d-flex justify-content-center">
   <button type="submit" name="loginSubmitPost" class="m-2 btn btn-success">Login</button>
   <button type="button" name="forgotPassPost" class="m-2 btn btn-secondary">Forgot Password?</button>
  </div>
 </form>
</div>

<?php require_once 'includes/footer.php'; ?>
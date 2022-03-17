<?php include_once 'includes/session.php'; ?>

<!doctype html>
<html lang="en">

<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title><?php echo $title ?></title>

 <!-- Bootstrap CSS https://fonts.google.com/specimen/Permanent+Marker?preview.text=Attendance%20Hackathon&preview.text_type=custom -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

 <!-- Font Families from https://fonts.google.com/ -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Permanent+Marker&display=swap" rel="stylesheet">

 <!-- FontAwesome Icons from https://fontawesome.com/v5.15/how-to-use/customizing-wordpress/snippets/setup-cdn-webfont -->
 <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
  integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->


 <!-- Datepicker css from  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
 -->
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">

 <!-- My Website Icon -->
 <link rel="icon" type="image/png" href="assets/img/udiprai_logo.png" />

 <!-- My own css -->
 <link rel="stylesheet" href="assets/css/images.css">
 <link rel="stylesheet" href="assets/css/site.css">
 <link rel="stylesheet" href="assets/css/skeleton.css">

<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-primary nav-beginning">
  <a class="navbar-brand ps-3 text-center" href="index.php">Intern Attendees <br />
   <span>{ Hackathon }</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
   aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
   <ul class="navbar-nav ml-auto">
    <li class="nav-item active">
     <a class="nav-link color-python" href="index.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
     <a class="nav-link color-python" href="attd_view_attendees.php">View Attendees</a>
    </li>
   </ul>
   <ul class="navbar-nav me-5 align-items-center">
    <li class="nav-item">
     <a class="nav-link color-php text-decoration-underline" href="attd_feedback_get.php">Send Feedback?</a>
    </li>
    <?php
    if (!isset($_SESSION['user_id'])) {
    ?>
    <li class="nav-item active d-flex justify-content-start me-5 pe-5">
     <a class="nav-link btn btn-success border border-3 border-warning px-3" href="login.php">Login <span
       class="sr-only">(current)</span></a>
    </li>
    <?php
    } else {
    ?>

    <li class="dropdown active">
     <a href="#" data-toggle="dropdown" class="dropdown-toggle user-action text-light text-decoration-none">
      <img src="https://www.tutorialrepublic.com/examples/images/avatar/2.jpg" class="avatar rounded-circle"
       alt="Avatar">
      <?php echo substr($_SESSION['username'], 0, 8) ?> <b class="caret"></b>
     </a>
     <ul class="dropdown-menu" style="min-width: 6.7rem;">
      <!-- <li class="nav-change"><a href="attd_view.php?id=" class="nav-link text-dark text-decoration-none"><i class="fas fa-user"></i>
        <span>Profile</span> </a></li> -->
      <li class="nav-change">
       <a onclick="return confirm('Are you sure you want to log out?');" class="nav-link text-dark text-decoration-none"
        href="logout.php">
        <i class="fas fa-sign-out-alt"></i><span> Logout</span>
       </a>
      </li>
     </ul>
    </li>
    <?php } ?>
   </ul>
  </div>
 </nav>

 <div class="container content-middle mx-0 px-0">
<?php
$title = 'Welcome Chad !';
require_once 'includes/header.php';
require_once 'assets/db/conn.php';
?>



<h1 class="page-title text-center">Registration for Hackathon</h1>

<div class="container-fluid d-flex w-50 justify-content-center align-items-center">
 <a href="test_form1.php" class="mx-2 btn btn-primary">Form with <strong>GET</strong>
  method
 </a>
 <a href="attd_create_get.php" class="mx-2 btn btn-success">Form with
  <strong>POST</strong>
  method
 </a>
</div>

<?php require_once 'includes/footer.php'; ?>
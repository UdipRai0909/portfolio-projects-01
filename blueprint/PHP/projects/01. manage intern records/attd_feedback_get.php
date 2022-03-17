<?php
$title = 'Send Feedback Form (Get)';
require_once 'includes/header.php';
// require_once 'assets/db/conn.php';
?>

<style>
body {
 background: -webkit-linear-gradient(left, #2193b0, #6dd5ed);
}

.contact-form {
 background: #fff;
 margin-top: 5%;
 margin-bottom: 5%;
 width: 70%;
}

.contact-form .form-control {
 border-radius: 1rem;
}

.contact-image {
 text-align: center;
}

.contact-image img {
 border-radius: 6rem;
 width: 11%;
 margin-top: -3%;
 transform: rotate(29deg);
}

.contact-form form {
 padding: 8% 14%;
}

.contact-form form .row {
 margin-bottom: -7%;
}

.contact-form h3 {
 margin-bottom: 8%;
 margin-top: -10%;
 text-align: center;
 color: #0062cc;
}

.contact-form .btnContact {
 width: 50%;
 border: none;
 border-radius: 1rem;
 padding: 1.5%;
 background: #dc3545;
 font-weight: 600;
 color: #fff;
 cursor: pointer;
}

.btnContactSubmit {
 width: 50%;
 border-radius: 1rem;
 padding: 1.5%;
 color: #fff;
 background-color: #0062cc;
 border: none;
 cursor: pointer;
}
</style>

<div class="container contact-form">
 <div class="contact-image">
  <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact" />
 </div>
 <form method="POST" action="attd_feedback_post.php">
  <h3>Drop Us a Message</h3>
  <div class="row">
   <div class="col-md-6 mt-1">
    <div class="form-group mb-3">
     <input required type="text" name="attdFeedbackName" class="form-control" placeholder="Your Name *" value="" />
    </div>
    <div class="form-group mb-3">
     <input required type="email" name="attdFeedbackFromEmail" class="form-control" placeholder="Sender Email *"
      value="" />
    </div>
    <div class="form-group mb-3">
     <input required type="email" name="attdFeedbackToEmail" class="form-control" placeholder="Receiver Email *"
      value="" />
    </div>
    <div class="form-group mb-3">
     <input required type="text" name="attdFeedbackSubject" class="form-control" placeholder="Your Subject *"
      value="" />
    </div>
   </div>
   <div class="col-md-6">
    <div class="form-group mb-3">
     <textarea name="attdFeedbackMsg" class="form-control" placeholder="Your Message *"
      style="width: 100%; height: 149px;"></textarea>
    </div>
    <div class="form-group mb-3">
     <input required type="number" name="attdFeedbackPhone" class="form-control" placeholder="Your Phone Number *"
      value="" />
    </div>
   </div>
   <div class="form-group mt-3 d-flex justify-content-center">
    <input required type="submit" name="attdFeedbackSubmit" class="btnContact" value="Send Message" />
   </div>
  </div>
 </form>
</div>

<?php require_once 'includes/footer.php'; ?>
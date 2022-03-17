</div>
<footer class="bg-primary footer-end">
 <div class="d-flex justify-content-center align-items-center pt-4 text-white">
  <?php
  echo "
  <p style='text-align:center;'>
  <span class='copyright'>
   Copyright <b>&copy</b> by Udip Rai 
   <span class='text-warning'>(1998 - " . date("Y") . ") </span> 
  </span>

  <span class='chad'>&nbsp; $title &nbsp;</span>

  <a class='text-warning' href='https://udiprai0909.github.io/'>
   <span class='chad'>udiprai0909.github.io</span>
  </a>
  </p>";
  ?>
 </div>
</footer>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper, jQuery, jQuery’s slim build -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
 integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
 integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
 integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Bootbox -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.js"
 integrity="sha512-K3MtzSFJk6kgiFxCXXQKH6BbyBrTkTDf7E6kFh3xBZ2QNMtb6cU/RstENgQkdSLkAZeH/zAtzkxJOTTd8BqpHQ=="
 crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

<!-- Datepicker js from https://api.jqueryui.com/datepicker/#option-defaultDate -->
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- My own js script -->
<script type="text/javascript" src="assets/js/myscripts.js"></script>

<script>
$("#dob").datepicker({
 changeMonth: true,
 changeYear: true,
 yearRange: "-100:+0",
 dateFormat: "yy-mm-dd"
});
</script>

<!-- bootbox code -->
<!-- <script>
$(document).on("click", ".show-alert", function(e) {
 bootbox.alert("Hello world!", function() {
  console.log("Alert Callback");
 });
});
</script> -->
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>
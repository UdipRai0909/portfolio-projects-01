<?php
$title = 'View all attendees';
require_once 'includes/header.php';
require_once 'includes/auth_check.php';
require_once 'assets/db/conn.php';

// Variable to store 'get all the records' in the table 'attendees'
$results = $crud->getAttendees();
?>
]
<style>
.content-middle {
 justify-content: flex-start;
}
</style>

<h1 class="page-title text-center"><?php echo $title ?></h1>

<div class="container-fluid d-flex justify-content-center">
 <table class="table table-striped table-dark">
  <thead>
   <tr>
    <th scope="col">#</th>
    <th scope="col">Avatar</th>
    <th scope="col">Name</th>
    <!-- <th scope="col">Date of Birth</th> -->
    <th scope="col">Area of Expertise</th>
    <!-- <th scope="col">Email Address</th> -->
    <!-- <th scope="col">Phone</th> -->
    <th scope="col">Actions</th>
   </tr>
  </thead>
  <tbody>
   <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
   <tr>
    <th scope="row"><?php echo $r['attendee_id'] ?></th>
    <td>
     <a id="viewIdOnTable" href="attd_view.php?attdViewId=<?php echo $r['attendee_id'] ?>">
      <img for="viewIdOnTable" class="table-avatar-pic z-depth-2 border border-light border-2"
       src="<?php echo empty($r['avatar_path']) ? "assets/img/avatar_uploads/ironman.png" : $r['avatar_path'] ?>"
       alt="Avatar/Profle Picture">
     </a>
    </td>
    <td><?php echo $r['first_name'] . " " . $r['last_name'] ?></td>
    <!-- <td><?php echo $r['date_of_birth'] ?></td> -->
    <td><?php echo $r['name'] ?></td>
    <!-- <td><?php echo $r['email_address'] ?></td> -->
    <!-- <td><?php echo $r['phone'] ?></td> -->
    <td>
     <a id="viewIdOnTable" href="attd_view.php?attdViewId=<?php echo $r['attendee_id'] ?>"
      class="btn btn-info mx-1">View</a>

     <a href="attd_edit_get.php?attdEditId=<?php echo $r['attendee_id'] ?>" class="btn btn-success mx-1">Edit</a>

     <a onclick="return confirm('Are you sure you want to delete this record?');"
      href="attd_delete.php?attdDelId=<?php echo $r['attendee_id'] ?>" class="btn btn-danger mx-1">Delete</a>

     <!-- Delete using Bootstrap Modal -->
     <!-- <a class="btn btn-danger attdDelModal" data-attd-id="php echo $r['attendee_id']; "
      href="javascript:void(0)">Delete</a> -->
    </td>
   </tr>
   <?php } ?>
  </tbody>
 </table>
</div>


<?php require_once 'includes/footer.php'; ?>
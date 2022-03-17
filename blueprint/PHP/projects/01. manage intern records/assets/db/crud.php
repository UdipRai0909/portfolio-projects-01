<?php
class crud
{
 // private database object
 private $db;

 // constructor to initialize private variable to the database connection
 function __construct($conn)
 {
  $this->db = $conn;
 }

 public function insert($fname, $lname, $dob, $email, $phone, $aoe, $avatarPath)
 {
  try {
   $sql = "INSERT INTO attendees(first_name, last_name, avatar_path, date_of_birth, email_address, phone, speciality_id) VALUES(:fname, :lname, :avatar_path, :dob, :email, :phone, :aoe)";
   $stmt = $this->db->prepare($sql);
   $stmt->bindparam(':fname', $fname);
   $stmt->bindparam(':lname', $lname);
   $stmt->bindparam(':avatar_path', $avatarPath);
   $stmt->bindparam(':dob', $dob);
   $stmt->bindparam(':email', $email);
   $stmt->bindparam(':phone', $phone);
   $stmt->bindparam(':aoe', $aoe);

   // execute statement
   $stmt->execute();
   return true;
  } catch (PDOException $ex) {
   echo $ex->getMessage();
   return false;
  }
 }

 public function editAttendee($id, $fname, $lname, $dob, $email, $phone, $aoe, $avatarPath)
 {
  try {
   $sql = "UPDATE attendees SET first_name=:fname, last_name=:lname, avatar_path=:avatar_path, date_of_birth=:dob, email_address=:email, phone=:phone, speciality_id=:aoe WHERE attendee_id=:id";
   $stmt = $this->db->prepare($sql);
   $stmt->bindparam(':id', $id);
   $stmt->bindparam(':fname', $fname);
   $stmt->bindparam(':lname', $lname);
   $stmt->bindparam(':avatar_path', $avatarPath);
   $stmt->bindparam(':dob', $dob);
   $stmt->bindparam(':email', $email);
   $stmt->bindparam(':phone', $phone);
   $stmt->bindparam(':aoe', $aoe);
   // execute statement
   $stmt->execute();
   return true;
  } catch (PDOException $ex) {
   echo $ex->getMessage();
   return false;
  }
 }

 public function getAttendees()
 {
  try {
   $sql = "SELECT * FROM attendees a INNER JOIN specialities s ON a.speciality_id = s.speciality_id";
   $result = $this->db->query($sql);
   return $result;
  } catch (PDOException $ex) {
   echo $ex->getMessage();
   return false;
  }
 }

 public function getSpecialities()
 {
  try {
   $sql = "SELECT * FROM specialities";
   $result = $this->db->query($sql);
   return $result;
  } catch (PDOException $ex) {
   echo $ex->getMessage();
   return false;
  }
 }

 public function getAttendeeDetails($id)
 {
  try {
   $sql = "SELECT * FROM attendees a INNER JOIN specialities s ON a.speciality_id = s.speciality_id WHERE attendee_id = :id";
   $stmt = $this->db->prepare($sql);
   $stmt->bindparam(':id', $id);
   $stmt->execute();
   $result = $stmt->fetch();
   return $result;
  } catch (PDOException $ex) {
   echo $ex->getMessage();
   return false;
  }
 }

 public function deleteAttendee($id)
 {
  try {
   $sql = "DELETE FROM attendees WHERE attendee_id = :id";
   $stmt = $this->db->prepare($sql);
   $stmt->bindParam(':id', $id);
   $stmt->execute();
   return true;
  } catch (PDOException $ex) {
   echo $ex->getMessage();
   return false;
  }
 }
}
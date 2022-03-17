<?php
class user
{
 // private database object
 private $db;

 // constructor to initizlize the private variable to the database connection
 function __construct($conn)
 {
  $this->db = $conn;
 }

 public function insertUser($username, $password)
 {
  try {
   $result = $this->getUserByUsername($username);
   if ($result['num'] > 0) {
    return false;
   } else {
    // Encrypt your password before even going to the next stage 
    $newPassword = md5($password . $username);

    // define a sql statement to be executed
    $sql = "INSERT INTO users(username, password) VALUES (:username, :password)";

    // prepare the sql statement for execution
    $stmt = $this->db->prepare($sql);

    // bind all placeholders to the actual values
    $stmt->bindparam(':username', $username);
    $stmt->bindparam(':password', $password);

    // execute statement
    $stmt->execute();
    return true;
   }
  } catch (PDOException $e) {
   echo $e->getMessage();
   return false;
  }
 }

 public function getUser($username, $password)
 {
  try {
   $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
   $stmt = $this->db->prepare($sql);
   $stmt->bindparam(':username', $username);
   $stmt->bindparam(':password', $password);
   $stmt->execute();
   $result = $stmt->fetch();
   return $result;
  } catch (PDOException $e) {
   echo $e->getMessage();
   return false;
  }
 }

 public function getUserByUsername($username)
 {
  try {
   $sql = "SELECT count(*) AS num FROM users WHERE username = :username";
   $stmt = $this->db->prepare($sql);
   $stmt->bindparam(':username', $username);
   $stmt->execute();
   $result = $stmt->fetch();
   return $result;
  } catch (PDOException $e) {
   echo $e->getMessage();
   return false;
  }
 }
}
<?php

// local Database Connection (Development)
$host = '127.0.0.1';
$db = 'attendance_hackathon';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

// // Remote Database Connection (Production)
// $host = 'db4free.net';
// $db = 'attendance_hacka';
// $user = 'starlord0329';
// $pass = 'ohdb0909mysP$';
// $charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
 $pdo = new PDO($dsn, $user, $pass);
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 // echo "Hello Database";

} catch (PDOException $ex) {
 // echo "No Database Found";
 throw new PDOException($ex->getMessage());
}

require_once 'crud.php';
require_once 'user.php';
$crud = new crud($pdo);
$myuser = new user($pdo);

$myuser->insertUser("admin", "pass");
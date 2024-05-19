<?php

$dsn = 'mysql:host=localhost;dbname=assignment_db';
$username = 'root';
// $password = 'pa55word';


try {
  $db = new PDO($dsn, $username);
} catch (PDOException $e) {
  $error = "Database error";
  $error .= $e->getMessage();
  include('view/error.php');
  exit();
}

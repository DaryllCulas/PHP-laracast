<?php


namespace DatabaseConn;

use PDO;

class Database
{

  public function getConnection()
  {
    $db = new PDO('mysql:host=localhost;dbname=TestDB', 'root', '');
    $query = "SELECT * FROM user";

    $query = $db->prepare($query);
    $stmt = $db->query($query);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();

    return $stmt;
  }
}

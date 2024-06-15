<?php

use DatabaseConn\Database;

require_once(__DIR__ . '/Database.php');

$dbconnObj = new Database();

var_dump($dbconnObj->getConnection());

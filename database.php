<?php
// Create connection credentials
$db_host = 'localhost';
$db_name = 'quizzer';
$db_user = 'root';
$db_pass = 'Po11Lk12$';

// create Mysqli object
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Error handler
if ($mysqli->connect_error) {
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}
<?php
  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'kirkpagaspas');
  define('DB_PASSWORD', 'kirkpagaspas');
  define('DB_NAME', 'student');

  $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

  if ($conn === false) {
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
?>


<!-- DATABASE CONNECTION -->
<?php

// MYSQL SERVER CONNECTION
  $link = mysqli_connect("localhost", "root", "", "registration_form");
  // Check connection
  if($link === false){
   die("ERROR: Could not connect. " . mysqli_connect_error());
  }
 ?>

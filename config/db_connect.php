<?php

  // Connect to database
  $conn = mysqli_connect('localhost', 'dnicerio', 'admin123', 'master_pizza');

  // Check connection
  if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
  }

?>
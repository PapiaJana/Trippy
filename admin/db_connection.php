<?php

function connection(){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database="travel";

  global $conn;
  // Create connection
  $conn = mysqli_connect($servername, $username, $password,$database);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  // echo "Connected successfully";
}

connection();

date_default_timezone_set("Asia/kolkata");
?> 

<?php
 $conn = mysqli_connect("mysql-server", "root", "secret", "test");

 // Check connection
 if (mysqli_connect_errno()) {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
     exit();
 }
 
?>
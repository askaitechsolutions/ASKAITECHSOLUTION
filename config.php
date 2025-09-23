<?php
$localhost = "localhost";
$username  = "root";
$password  = "admin123"; 
$databased = "askai";

$conn = mysqli_connect($localhost, $username, $password, $databased);


// Check connection
// if ($conn->connect_error) 
//     echo "Connection failed: " . $conn->connect_error;
// else 
//     echo "Connection successful!";
// exit;
?>
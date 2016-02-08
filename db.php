<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "writeup";
$conn = new mysqli($servername, $username, $password, $db);
//check Connection
if ($conn->connect_error){
  die("ERROR: ". $conn->connect_error);
}
else{
  //nothing, essentially
}
?>

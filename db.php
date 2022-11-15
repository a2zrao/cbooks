<?php
$servername = "database-1.cdpvsu40laxq.ap-south-1.rds.amazonaws.com";
$username = "admin";
$password = "Cutm123456789";
$dbname = "cbooks";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
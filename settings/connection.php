<?php
$servername = "localhost";
$username = "root";
$password = "cs341webtech";
$dbname = "interiorDesign";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<?php
$servername = "ku421687.mysql.ukraine.com.ua";
$username = "ku421687_db";
$password = "3asZuzlh";

// Create connection
$conn = new mysqli($servername, $username, $password);
echo $_POST['userName'];

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
<?php
$servername = "ku421687.mysql.ukraine.com.ua";
$username = "ku421687_db";
$password = "3asZuzlh";

// Create connection
$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

echo $_POST['userName'];

$userName = $_POST['userName'];
$userPhone = $_POST['userPhone'];
$userEmail = $_POST['userEmail'];

$query = spintf("INSERT INTO Leads (name, phone, email)
		VALUES ('%s', '%s', '%s')",
 		mysql_real_escape_string($userName),
    mysql_real_escape_string($userPhone),
  	mysql_real_escape_string($userEmail));

if ($conn->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();

?>
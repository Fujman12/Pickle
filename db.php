<?php
$servername = "ku421687.mysql.ukraine.com.ua";
$username = "ku421687_db";
$password = "3asZuzlh";
$dbname = "ku421687_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$userName = $_POST['userName'];
$userPhone = $_POST['userPhone'];
$userEmail = $_POST['userEmail'];


$query = sprintf("INSERT INTO Leads (name, phone, email)
		VALUES ('%s', '%s', '%s')",
 		mysqli_real_escape_string($conn, $userName),
    mysqli_real_escape_string($conn, $userPhone),
  	mysqli_real_escape_string($conn, $userEmail));


$m = mysqli_real_escape_string($conn, $userPhone);


if ($conn->query($query) === TRUE) {
  echo "Спасибо за обращение! Мы свяжемся с Вами в ближайшее время!";
  $msg = "Новый лид $userName, $userEmail, $userPhone";
  mail("Fujman94@gmail.com", "Новый лид!", $msg);
  mail("davidpolonsky5+hj4yeu68uzrscqqy9hju@boards.trello.com", "Новый лид!", $msg);
  mail("polonskiydavid@gmail.com", "Новый лид!", $msg);
} else {
  echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();

sleep(10);

/* Убедиться, что код ниже не выполнится после перенаправления .*/
exit;

?>
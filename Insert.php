<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$Email_Address=$_POST["Email_Address"];
$Password=$_POST["Password"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO register (Email_Address, Password)
VALUES ('$Email_Address', '$Password' )";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
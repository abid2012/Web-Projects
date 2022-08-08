<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "itcompany";

$na= $_POST["na"];
$em= $_POST["em"];
$pw= $_POST["pw"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (Name,Email,Password)
VALUES ('$na', '$em', '$pw')";

if ($conn->query($sql) === TRUE) {
  echo "<h1>User Added Successfully</h1>";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
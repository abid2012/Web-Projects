<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "itcompany";

$em= $_POST["em"];
$ph= $_POST["ph"];
$address= $_POST["address"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO contact (Email,Phone,Address)
VALUES ('$em', '$ph', '$address')";

if ($conn->query($sql) === TRUE) {
  echo "<h1>Contact Added Successfully</h1>";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
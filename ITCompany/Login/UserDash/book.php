<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "itcompany";

$name= $_POST["name"];
$email= $_POST["email"];
$phone= $_POST["phone"];
$btc= $_POST["btc"];
$service= $_POST["service"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO booking (Customer_Name,Customer_Email,Customer_Phone,Best_Time_To_Call,Service)
VALUES ('$name', '$email', '$phone', '$btc', '$service')";

if ($conn->query($sql) === TRUE) {
  echo "<h1>Submitted Successfully. Thank You! Please Wait For Our Call Or Email.</h1>";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<?php

include('dbcon.php');

$name= $_POST["name"];
$email= $_POST["email"];
$pass= $_POST["password"];

$sql = "INSERT INTO users (Name,Email,Password)
VALUES ('$name', '$email', '$pass')";

if ($con->query($sql) === TRUE) {
  echo "Registration Completed Successfully";
} else {
  echo "Error: " . $sql . "<br>" . $cnn->error;
}

$con->close();
?>
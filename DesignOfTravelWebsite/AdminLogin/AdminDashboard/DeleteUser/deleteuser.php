<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "travelmanagementsystem";

$id=$_POST["id"];
$name=$_POST["name"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// sql to delete a record
$sql = "DELETE FROM userregistration WHERE Id='$id' AND Username='$name'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} 

else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "travelmanagementsystem";

$packid=$_POST["pid"];
$packname=$_POST["pname"];
$packdetails=$_POST["pdetails"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE package SET Package_Name='$packname', Package_Details='$packdetails' WHERE Package_Id='$packid'";

if ($conn->query($sql) === TRUE) {
  echo "Package Updated Successfully";
} 

else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
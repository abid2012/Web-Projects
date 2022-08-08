<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travelmanagementsystem";


$packname=$_POST["pname"];
$packdetails=$_POST["pdetails"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(!empty($packname)&&!empty($packdetails)){
$sql = "INSERT INTO package (Package_Name,Package_Details)
VALUES ('".$_POST["pname"]."','".$_POST["pdetails"]."')";
}
else
{
	echo "<h3>!!!Error!!!Package Adding Failed</h3>";
	die();
}



if ($conn->query($sql) === TRUE) {
    //echo "Registration successful";
    echo '<h3>Package Added Successfully</h3>';
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
    echo "<h3>Error!!! Database Failed To Add Package</h3>";
}

$conn->close();
?>
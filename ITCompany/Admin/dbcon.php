<?php

$servername = "localhost";
$user = "root";
$passw = "";
$dbname = "itcompany";

// Create connection
$con = new mysqli($servername, $user, $passw, $dbname);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

?>
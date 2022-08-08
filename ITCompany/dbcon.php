<?php

$servername = "localhost";
$user = "root";
$passw = "";
$dbname = "itcompany";

// Create connection
$db = new mysqli($servername, $user, $passw, $dbname);
// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

?>
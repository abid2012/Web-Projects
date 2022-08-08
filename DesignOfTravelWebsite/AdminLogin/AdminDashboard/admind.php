<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "travel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM customer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo '<body style="background-image:linear-gradient(darkblue, skyblue);color:white; text-align: center;">';
  //echo "<table border=1><tr><th>ID</th><th>FullName</th><th>Username</th><th>Password</th></tr>";
  // output data of each row
  echo '<h1 style="border-bottom: 3px skyblue solid; display: block; margin: 0 auto; width: 270px;">User Database</h1>';
  echo '<table style="border: 4px skyblue solid; padding: 10px; font-size:23px; margin: 0 auto;">';
  echo '<tr> <th>Customer Name</th> <th>Customer Id</th> <th>Customer Password</th> <th>Customer Address</th> <th>Customer Email</th> <th>Customer Phone</th> </tr>';
  while($row = $result->fetch_assoc()) {
    echo '<tr> <td style="border: 1px skyblue solid">' . $row["cust_name"]. "</td>" .'<td style="border: 1px skyblue solid">'. $row["cust_id"]. "</td>". '<td style="border: 1px skyblue solid">' . $row["cust_password"]. "</td>". '<td style="border: 1px skyblue solid">' . $row["cust_address"]. "</td>" .'<td style="border: 1px skyblue solid">' . $row["cust_mail"]. "</td>" .'<td style="border: 1px skyblue solid">' . $row["cust_phone"]. "</td>" . '</tr>'. "<br>";
    
  }
  //echo "</table>";
  echo "</table>";
  echo '</body>';
} else {
  echo "0 results";
}
$conn->close();
?>
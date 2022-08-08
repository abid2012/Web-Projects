<?php
$link = mysqli_connect("localhost","root","","itcompany");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }

$email= $_POST["email"];
$pass= $_POST["pass"];

/* Update records */
mysqli_query($link,"DELETE FROM users WHERE Email='$email' AND Password='$pass'");
//echo "Affected rows: " . mysqli_affected_rows($link);

if(mysqli_affected_rows($link)==0){
    echo "Wrong email or password";
}
else{
    echo "Your account has been deleted";
}
mysqli_close($link);
?>
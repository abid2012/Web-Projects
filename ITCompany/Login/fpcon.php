<?php
$link = mysqli_connect("localhost","root","","itcompany");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }

$email= $_POST["email"];
$pass= $_POST["pass"];

/* Update records */
mysqli_query($link,"UPDATE users SET Password='$pass' WHERE Email='$email'");
//echo "Affected rows: " . mysqli_affected_rows($link);

if(mysqli_affected_rows($link)==0){
    echo "Wrong email. Your email is not registered yet";
}
else{
    echo "Your password has been reset";
}
mysqli_close($link);
?>
<?php
$link = mysqli_connect("localhost","root","","itcompany");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }

$pvid= $_POST["pvid"];
$nid= $_POST["nid"];

/* Update records */
mysqli_query($link,"UPDATE users SET Id='$nid' WHERE Id='$pvid'");
//echo "Affected rows: " . mysqli_affected_rows($link);

if(mysqli_affected_rows($link)==0){
    echo "<h1>Wrong Id</h1>";
}
else{
    echo "<h1>User Id has been changed</h1>";
}
mysqli_close($link);
?>
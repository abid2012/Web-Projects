<?php
$link = mysqli_connect("localhost","root","","itcompany");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }

$oldid= $_POST["pvid"];
$newid= $_POST["nid"];

/* Update records */
mysqli_query($link,"UPDATE about SET Id='$newid' WHERE Id='$oldid'");
//echo "Affected rows: " . mysqli_affected_rows($link);

if(mysqli_affected_rows($link)==0){
    echo "Error! Wrong Id";
}
else{
    echo "Edit Successful";
}
mysqli_close($link);
?>
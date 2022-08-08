<?php

$link = mysqli_connect("localhost","root","","itcompany");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }

$eid= $_POST["eid"];
$title= $_POST["title"];
$details= $_POST["details"];
$price= $_POST["price"];

/* Update records */
mysqli_query($link,"UPDATE services SET Service_Name='$title',Service_Detail='$details',Price_TK='$price' WHERE Id='$eid'");
//echo "Affected rows: " . mysqli_affected_rows($link);

if(mysqli_affected_rows($link)==0){
    echo "Error! Wrong Id";
}
else{
    echo "Edit Successful";
}
mysqli_close($link);

?>


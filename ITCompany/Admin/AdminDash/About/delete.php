<?php
$link = mysqli_connect("localhost","root","","itcompany");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }

$id= $_POST["id"];


/* Update records */
mysqli_query($link,"DELETE FROM about WHERE Id='$id'");
//echo "Affected rows: " . mysqli_affected_rows($link);

if(mysqli_affected_rows($link)==0){
    echo "Error! Wrong Id";
}
else{
    echo "Delete Successful";
}
mysqli_close($link);
?>
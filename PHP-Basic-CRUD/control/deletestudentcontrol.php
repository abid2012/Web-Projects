<?php

include "../model/db.php";

if(isset($_POST["deletestudent"])){
    $sql = "DELETE FROM students WHERE StID='$_POST[stid]'";

        if ($conn->query($sql) === TRUE) {
        echo "<h3>Delete Successful</h3>";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
}




?>
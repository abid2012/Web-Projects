<?php

include "../model/db.php";

if(isset($_POST["deletecourse"])){
    $sql = "DELETE FROM course WHERE CourseID='$_POST[cid]'";

        if ($conn->query($sql) === TRUE) {
        echo "<h3>Delete Successful</h3>";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
}




?>
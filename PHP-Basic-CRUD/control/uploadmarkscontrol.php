<?php

include "../model/db.php";

if(isset($_POST["uploadmarks"])){

        $sql = "INSERT INTO marks (Mark,CourseID,StID)
        VALUES ('$_POST[mark]', '$_POST[cid]', '$_POST[sid]')";

        if ($conn->query($sql) === TRUE) {
        echo "<h3>Uploading Successful</h3>";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
}

?>
<?php

include "../model/db.php";

if(isset($_POST["addstudent"])){

        $sql = "INSERT INTO students (StID,StName,Grade,Section)
        VALUES ('$_POST[sid]', '$_POST[sname]', '$_POST[grade]', '$_POST[section]')";

        if ($conn->query($sql) === TRUE) {
        echo "<h3>Adding Successful</h3>";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
}

?>
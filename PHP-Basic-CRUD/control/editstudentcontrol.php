<?php

include "../model/db.php";

if(isset($_POST["editstudent"])){

        $sql = "UPDATE students SET StName='$_POST[sname]',Grade='$_POST[grade]',Section='$_POST[section]' WHERE StID='$_POST[sid]'";

        if ($conn->query($sql) === TRUE) {
        echo "<h3>Editing Successful</h3>";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
}

?>
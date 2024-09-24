<?php

include "../model/db.php";

if(isset($_POST["submit"])){
     if(empty($_POST["fn1"])){
        echo "Full name is required";
     }

     if(empty($_POST["em1"])){
        echo "Email is required";
     }

     if(empty($_POST["pass1"])){
        echo "Password is required";
     }

     if(empty($_POST["cpass1"])){
        echo "Confirm Password is required";
     }

     if(empty($_POST["ss"])){
        echo "Subject Specialization is required";
     }

     if(empty($_POST["yoe"])){
        echo "Years of experience is required";
     }

     if(empty($_POST["qual"])){
        echo "Qualification is required";
     }

     else{

        $sql = "INSERT INTO teachers (FullName, Email, Password, CPassword, Subject, Experience, Qualification)
        VALUES ('$_POST[fn1]', '$_POST[em1]', '$_POST[pass1]', '$_POST[cpass1]', '$_POST[ss]','$_POST[yoe]','$_POST[qual]')";

        if ($conn->query($sql) === TRUE) {
        echo "<h3>Registration Successful</h3>";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
     }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<body>
    
    <h1>Add Student</h1>

    <div>
    <form action="" method="post">
        Student ID : <input type="number" name="sid" required><br><br>
        Student Name : <input type="text" name="sname" required><br><br>
        Grade : <input type="text" name="grade" required><br><br>
        Section : <input type="text" name="section" required><br><br>
        <input type="submit" name="addstudent" value="Add"><br>
    </form>
    </div>

</body>
</html>

<?php

    include "../control/addstudentcontrol.php";

?>
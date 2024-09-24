<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Student</title>
</head>
<body>
    
    <h1>Delete Student</h1>

    <div>
    <form action="" method="post">
        Student ID : <input type="number" name="stid" required><br><br>
        <input type="submit" name="deletestudent" value="Delete"><br>
    </form>
    </div>

</body>
</html>

<?php

    include "../control/deletestudentcontrol.php";

?>
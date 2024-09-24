<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
</head>
<body>
    
    <h1>Edit Student</h1>

    <div>
    <form action="" method="post">
        
        Student Name : <input type="text" name="sname" ><br><br>
        Grade : <input type="text" name="grade" ><br><br>
        Section : <input type="text" name="section"><br><br>

        Id of that student : <input type="number" name="sid" required><br><br>
        <input type="submit" name="editstudent" value="Edit"><br>
    </form>
    </div>

</body>
</html>

<?php

    include "../control/editstudentcontrol.php";

?>
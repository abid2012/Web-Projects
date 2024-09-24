<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Course</title>
</head>
<body>
    
    <h1>Delete Course</h1>

    <div>
    <form action="" method="post">
        Course ID : <input type="number" name="cid" required><br><br>
        <input type="submit" name="deletecourse" value="Delete"><br>
    </form>
    </div>

</body>
</html>

<?php

    include "../control/deletecoursecontrol.php";

?>
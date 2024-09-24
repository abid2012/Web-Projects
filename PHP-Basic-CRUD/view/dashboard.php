<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Teacher Dashbaord</title>
</head>
<body>
    <h1 class="ted">Teacher Dashbaord</h1>
    <h2>Student Data</h2>

    <?php
        include "../control/regcontrol2.php";
    ?>

    <h2>Course Data</h2>
    <?php
        include "../control/dashcontrol.php";   
    ?>





    

    <br> <br>


    <form action="" method="post">
        Course ID : <input type="number" name="cid" required><br><br>
        Sudent ID : <input type="number" name="sid" required><br><br>
        Marks : <input type="number" name="mark" required><br><br>
        <input type="submit" name="uploadmarks" value="Upload Marks"><br>
    </form>

    
</body>
</html>

<?php

include "../control/uploadmarkscontrol.php";

?>
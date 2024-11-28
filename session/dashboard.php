<?php

session_start();

if(!isset($_SESSION["usern"])){
    header("location: ./index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome To Dashboard 
        
    <?php 
    
    echo $_SESSION["usern"];
    
    ?> 
    
    and the password is

    <?php
    echo $_SESSION["passw"];
    ?>


  </h1>

    <form method="post">
        <input type="submit" name="Logout" value="Logout">
    </form>
</body>
</html>


<?php

if(isset($_POST["Logout"])){
    session_destroy();
    header("location: index.php");
}

?>
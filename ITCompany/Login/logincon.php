<?php      
    include('dbcon.php');  
    $username = $_POST['email'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from users where Email = '$username' and Password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            //echo "<h1><center> Login successful </center></h1>";
            //header('Location: ./Customer/visit_place.php');
            
           echo '<script>

                    alert("Login Successful");

                    location.href="./UserDash/userdash.php";

                 </script>';
                 
                   
        }  
        else{
            
            if(empty($username)){
                echo "<h1>Username is required</h1>";
            }

            else if(empty($password)){
                echo "<h1>Password is required</h1>";
            }

            else{
                echo "<h1> Login failed. Invalid username or password.</h1>";
            }  
        }     
?>  
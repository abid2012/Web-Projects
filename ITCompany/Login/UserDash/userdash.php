<!DOCTYPE html>
<html lang="en">
<?php

$db = mysqli_connect("localhost","root","","itcompany");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>User Account</title>
</head>
<body>
<div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
            <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
            <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
            <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
            <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
            <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
            <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
            <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
            <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
          </div>
        </div>
      </div>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          <h1><a href="#" rel="dofollow">Welcome</a></h1>
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
            <h4>Fill Out The Form To Order</h4>
              <span class="padding-bottom--15"></span>
              <form id="stripe-login" action="book.php" method="POST">
                <div class="field padding-bottom--24">
                  <label for="name">Name:</label>
                  <input type="text" name="name" placeholder="Name" required>
                </div>
                <div class="field padding-bottom--24">
                  <label for="email">Email:</label>
                  <input type="email" name="email" placeholder="Email Address" required>
                </div>
                <div class="field padding-bottom--24">
                  <label for="phone">Phone:</label>
                  <input type="text" name="phone" placeholder="Phone No" required>
                </div>
                <div class="field padding-bottom--24">
                  <label for="btc">Best Time To Call:</label>
                  <input type="text" name="btc" placeholder="11 AM - 12 PM" required>
                </div>
                <div class="field padding-bottom--24">
                    <label for="service">Choose A Service:</label>
                    <select name="service">
    <option disabled selected>-- Select Service --</option>
    <?php
        //include "dbConn.php";  // Using database connection file here
        $records = mysqli_query($db, "SELECT Service_Name From services");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['Service_Name'] ."'>" .$data['Service_Name'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select>
                </div>
                <!-- <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="password">Password:</label>
                    <div class="reset-pass">
                      <a href="#">Forgot your password?</a>
                    </div> 
                  </div>
                  <input type="password" name="password" placeholder="Password" required>
                </div> -->
                <div class="field field-checkbox padding-bottom--24 flex-flex align-center">
                  <label for="checkbox">
                    <!-- <input type="checkbox" name="checkbox"> Stay signed in for a week -->
                  </label>
                </div>
                <div class="field padding-bottom--24">
                  <input type="submit" name="submit" value="Submit">
                </div>
                <div class="field">
                    <p style="text-align: center; font-weight: bold;">Hotline: +8801234567890</p>
                    <p style="text-align: center; font-weight: bold; margin-top: 5px;">(10:00 AM - 10:00 PM)</p>
                  <!-- <a class="ssolink" href="#">Use single sign-on (Google) instead</a> -->
                </div>
              </form>
            </div>
          </div>

          <div class="footer-link padding-top--24">
            <span>Want To Logout? <button style="border:0px; background-color: white; color: red; font-weight: bold; cursor: pointer;" id="logout">Logout</button></span>
            <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
              <span><a href="../../index.php">© Troy IT</a></span>
              <span><a href="../../index.php#about-us">About Us</a></span>
              <span><a href="../../index.php#services">Our Services</a></span>
              <span><a href="../../index.php#contact">Contact Us</a></span>
              <span><a href="../forgetpass.php" style="color: blue;">Change Password</a></span>
              <span><a href="./deleteacc.php" style="color: red;">Delete Account</a></span>
              <!-- <span><a href="#" style="font-weight: bold;color: red;">Your Profile</a></span> -->
              <!-- <span><a href="#">Privacy & terms</a></span> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
      $("#logout").on("click",function(){
    var lgout=confirm("Want To Logout?")
    if(lgout==true){
        location.href="../main.php"
    }

    else{
        
    }
    })
  </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
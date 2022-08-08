<!DOCTYPE html>
<html lang="en">
<?php
    include('dbcon.php');
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="creative.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Troy IT</title>
    <style>
      .map-responsive{
    overflow:hidden;
    padding-bottom:50%;
    position:relative;
    height:0;
}
.map-responsive iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
}
    </style>
</head>
<body>

    <!-- Header starts -->

    <div class="row header-font">

        <div class="col-xs-5">
    
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navibar">
            <div class="container-fluid">
              <a class="navbar-brand logo-font" href="./index.php"><img src="creative.png" alt="logo" height="50px" width="50px">&nbsp;&nbsp;Troy IT</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
    
        </div>
    
        <div class="col-xs-7">
    
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav pe-5">
                  <li class="nav-item pt-2">
                    <a class="nav-link text-nowrap active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item pt-2">
                    <a class="nav-link text-nowrap" href="#about-us">About Us</a>
                  </li>
                  <li class="nav-item pt-2">
                    <a class="nav-link text-nowrap" href="#services">Our Services</a>
                  </li>
                  <li class="nav-item pt-2">
                    <a class="nav-link text-nowrap" href="#contact">Contact Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-nowrap" href="./Login/main.php" target="_blank"><button class="btn btn-primary">Login/Sign Up</button></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-nowrap" href="./Admin/admin.php" target="_blank"><button class="btn btn-danger">Admin</button></a>
                  </li>
                </ul>
        </div>
              </div>
            </div>
          </nav>
    
        </div>


        <!-- Header ends -->


        <!-- Cover/Banner starts -->

        
        <img src="Software-Companies.jpg" alt="banner" height="550px" width="100%">

        <!-- Cover/Banner Ends -->


        <!-- About Us Starts -->

        <div class="table-responsive" id="about-us">
        <table class="m-auto text-center mt-3">
            <!-- <tr>
                <th>Place Name</th>
                <th>Place Image</th>
            </tr> -->

            <?php
        $sql = "SELECT * FROM about";
        $result = $db->query($sql);
        //print_r($result);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            //print_r($row);
            ?>

            <tr>
                <?php $title = $row['Title']; ?>
                <tr>
                <td><h1><?php echo $title ?></h1></td>
                </tr>
                <tr>
                <td>
                    <img class="mt-3" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['Photo']); ?>" height="200px" width="300px" style="border-radius: 8px;">
                </td>
                </tr>
                <?php $detail = $row['Detail']; ?>
                <tr>
                <td><h4 class="mt-4"><?php echo $detail ?></h4></td>
                </tr>
                <!-- <td> <a href="booking.php?place=<?php echo $place; ?>" class="btn">Booking</a> </td> -->
            </tr>

            <?php
            
        }
        }
        ?>
        </table>
        </div>

        <!-- About Us Ends -->


        <!-- Services Starts -->

        <h1 class="mt-4 text-center" id="services">Services</h1>


        <div class="table-responsive mt-3">
        <table class="table table-bordered table-dark">
            <tr>
                <th>Photo</th>
                <th>Service Name</th>
                <th>Service Details</th>
                <th>Price(TK)</th>
                <th>Booking</th>
            </tr>

            <?php
        $sql = "SELECT * FROM services";
        $result = $db->query($sql);
        //print_r($result);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            //print_r($row);
            ?>

            <tr>
                <td>
                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['Photo']); ?>" height="200" width="300" style="border-radius: 8px;">
                </td>
                <?php $name = $row['Service_Name']; ?>
                <td><h5><?php echo $name ?></h5></td>
                <?php $details = $row['Service_Detail']; ?>
                <td><h5><?php echo $details ?></h5></td>
                <?php $price = $row['Price_TK']; ?>
                <td><h5><?php echo $price ?></h5></td>
                <td> <a href="./Login/main.php" target="_blank" class="btn btn-primary">Book Now</a> </td>
            </tr>

            <?php
            
        }
        }
        ?>
        </table>
        </div>

        <!-- Services Ends -->


        <!-- Contact Starts -->


        <div class="table-responsive" id="contact">
        <table class="m-auto text-center mt-3">
            <!-- <tr>
                <th>Place Name</th>
                <th>Place Image</th>
            </tr> -->

            <?php
        $sql = "SELECT * FROM contact";
        $result = $db->query($sql);
        //print_r($result);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            //print_r($row);
            ?>

          <h1 class="mt-4 text-center" id="contact">Contact Us</h1>
          <tr>
            <td><img src="https://i.pinimg.com/originals/8f/c3/7b/8fc37b74b608a622588fbaa361485f32.png" alt="em" height="50px" width="50px"></td>
            <?php $email = $row['Email']; ?>
            <td><?php echo $email ?></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><img src="https://www.pngitem.com/pimgs/m/293-2935442_transparent-background-phone-icon-hd-png-download.png" alt="ph" height="50px" width="50px"></td>
            <?php $phone = $row['Phone']; ?>
            <td><?php echo $phone ?></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><img src="https://cdn-icons-png.flaticon.com/512/1275/1275302.png" alt="address" height="50px" width="50px"></td>
            <?php $address = $row['Address']; ?>
            <td><?php echo $address ?></td>
          </tr>

            <?php
            
        }
        }
        ?>
        </table>
        </div>


        <!-- Contact Ends -->


        <div class="container-fluid mt-4">
          <div class="map-responsive">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1329.1775179167412!2d90.42103421942107!3d23.731125926180763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b99c2137cd7d%3A0x3e64c397fb7db5cc!2sArambagh%20Bus%20Stop!5e0!3m2!1sen!2sbd!4v1641497811602!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen></iframe>
          </div>
        </div>


        <footer class="text-center bg-primary text-white mt-3 p-2">
            <p class="mt-2">&copy; 2021-2022 by Troy IT. All Rights Reserved.</p>
        </footer>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
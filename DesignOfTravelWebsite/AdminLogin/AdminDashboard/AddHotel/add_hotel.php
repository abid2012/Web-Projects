<!DOCTYPE html>
<?php
include('connection.php');
?>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Hello, world!</title>
    <!-- Bootstrap CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!--Google Font CSS-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400" rel="stylesheet">
    <!--Custom CSS-->
    <link rel="stylesheet" href="assets/css/new_style.css">

</head>

<body>


    <div class="container">
        <div class="row">
            <h1>Add Hotel Information</h1>
        </div>
        <form action="add_hotel.php" method="post">
            <div class="form-group row">
                <label for="hotel" class="col-sm-2 col-form-label">Hotel Name : </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Hotel Name" name="hotel_name" id="hotel" >
                </div>
            </div>
            <div class="form-group row">
                <label for="place" class="col-sm-2 col-form-label">Place Nmae : </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Place Name" name="place_name" id="place">
                </div>
            </div>
            <div class="form-group row">
                <label for="troom" class="col-sm-2 col-form-label">Total Room : </label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" placeholder="Total Room" name="tot_room" id="troom">
                </div>
            </div>
            <div class="form-group row">
                <label for="aroom" class="col-sm-2 col-form-label">Available Room: </label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" placeholder="Available Room" name="avl_room" id="aroom">
                </div>
            </div>
            <div class="form-group row">
                <label for="cost" class="col-sm-2 col-form-label">Per Room Cost : </label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" placeholder="Room Cost" name="room_cost" id="cost">
                </div>
            </div>
            <button class="btn custom_btn" type="submit" name="submit">Submit</button>
        </form>
        
        
          <?php
        if(isset($_POST['submit']))
        {
            $hotel_name = $_POST['hotel_name'];
            $place_name = $_POST['place_name'];
            $tot_room = $_POST['tot_room'];
            $avl_room = $_POST['avl_room'];
            $room_cost = $_POST['room_cost'];
            
            $sql_1 = "SELECT * FROM hotel WHERE  hotel_name='$hotel_name'";
            $result = $conn->query($sql_1);
            if($result->num_rows==0)
            {
                 $sql = "INSERT INTO hotel(hotel_name,place_name,tot_room,avl_room,room_cost) VALUES('$hotel_name','$place_name','$tot_room','$avl_room','$room_cost')"; 
                if($conn->query($sql)== TRUE)
                {
                    echo "new record create successfully<br>";
                }
            }
            else
            {
                echo "This already hotel exist<br>";    
            }
            
        }
        ?>
        
        
        
    </div>







<!--
    <form action="add_hotel.php" method="post">
        <p>hotel name</p>
        <input type="text" placeholder="hotel_name" name="hotel_name"><br>
        <p>place name</p>
        <input type="text" placeholder="place_name" name="place_name"><br>
        <p>total room</p>
        <input type="number" placeholder="tot_room" name="tot_room"><br>
        <p>available room</p>
        <input type="number" placeholder="avl_room" name="avl_room"><br>
        <p>per room cost</p>
        <input type="number" placeholder="room_cost" name="room_cost"><br>
        <button type="submit" name="submit">submit</button>
    </form>-->


  


</body>

</html>
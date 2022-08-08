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

<body style="margin-top: 10px;">


    <div class="container">
        <div class="row text-center">
            <h1>Add Transport Information</h1>
        </div>
        <form action="add_transport.php" method="post">
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Transport Type : </label>
                <div class="col-sm-10">
                    <input type="radio"  placeholder="trans_type" name="trans_type" value="plane">  Plane
                    <input type="radio"  placeholder="trans_type" name="trans_type" value="bus"> Bus

                </div>
            </div>
            <div class="form-group row">
                <label for="tn" class="col-sm-2 col-form-label">Transport Name : </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Transport Nmae" name="trans_name" id="tn" >
                </div>
            </div>
            <div class="form-group row">
                <label for="ts" class="col-sm-2 col-form-label">Total Seat : </label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" placeholder="Total Seat" name="tot_seat" id="ts">
                </div>
            </div>
            <div class="form-group row">
                <label for="as" class="col-sm-2 col-form-label">Available Seat: </label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" placeholder="Available Seat" name="avl_seat" id="as">
                </div>
            </div>
            <div class="form-group row">
                <label for="cost" class="col-sm-2 col-form-label">Transport Fare: </label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" placeholder="Transport Fare" name="trans_fare" id="cost">
                </div>
            </div>
            <button class="btn custom_btn" type="submit" name="submit">Submit</button>

            <?php
            if(isset($_POST['submit']))
            {
                $trans_type = $_POST['trans_type'];
                $total_seat = $_POST['tot_seat'];
                $trans_fare = $_POST['trans_fare'];
                $trans_name = $_POST['trans_name'];
                $avl_seat = $_POST['avl_seat'];
                
                $sql_1 = "SELECT * FROM transport WHERE trans_name='$trans_name'";
                $result = $conn->query($sql_1);
                if($result->num_rows==0)
                {
                    $sql = "INSERT INTO transport(trans_type,tot_seat,trans_fare,trans_name,avl_seat) VALUES ('$trans_type','$total_seat','$trans_fare','$trans_name','$avl_seat')";
                    if($conn->query($sql) == true)
                    {
                        echo "new record create successfully<br>";
                    }
                           
                }
                else
                {
                    echo "This name transport exist in database<br>";
                }
                
            }
            ?>
        </form>

    </div>






    <!-- <h1>Add transport information</h1>
        <form action="add_transport.php" method="post">
            <p>transport type</p>
            <input type="radio" placeholder="trans_type" name="trans_type" value="plane">plane<br>
            <input type="radio" placeholder="trans_type" name="trans_type" value="bus">bus<br>
            <p>total seat</p>
            <input type="number" placeholder="tot_seat" name="tot_seat"><br>
            <p>transport name</p>
            <input type="text" placeholder="trans_name" name="trans_name"><br>
            <p>availabe seat</p>
            <input type="number" placeholder="avl_seat" name="avl_seat"><br>
            <p>per_seat fare</p>
            <input type="number" placeholder="trans_fare" name="trans_fare"><br>
            <button type="submit" name="submit">submit</button>-->




</body>

</html>
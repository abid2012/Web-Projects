<!DOCTYPE html>
<html lang="en">
<?php
    include('dbcon.php');
     ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
    <script src="jquery.tabledit.min.js"></script>
    <title>About Table</title>
</head>
<body>
    <div class="row">
        <div class="col-lg-2 bg-dark text-white text-center" style="height: ;">
            <img src="admin.png" alt="icon" height="70px" width="70px" class="mt-3">
            <!-- <h1 class="mt-2">Admin Panel</h1> -->
            <h3>Welcome <br> Admin</h3>
            <hr>
            <a href="../admindash.php"><button class="my-btn1 mt-2">Users Database</button></a> <br> <br>
            <a href="../Admindb/admindb.php"><button class="my-btn1">Admin Database</button></a> <br> <br>
            <a href="./aboutdb.php"><button class="my-btn1 active">About Database</button></a> <br> <br>
			<a href="../Booking/booking.php"><button class="my-btn1">Booking Database</button></a> <br> <br>
            <a href="../Service/servicedb.php"><button class="my-btn1">Service Database</button></a> <br> <br>
            <a href="../Contact/contactdb.php"><button class="my-btn1">Contact Database</button></a> <br> <br>
            <button class="my-btn1 mb-4" id="logout">Logout</button>
            <p class="mb-5 mt-3">&copy; 2021-2022 by Trio IT <br> Developed by <a href="#" class="text-light" style="text-decoration: underline;">Katura Gania Khushbu</a></p>

        </div>

        <div class="col-lg-10">

        <div class="container-fluid">  
   <br />  
   <br />  
   <br />  
            <div class="table-responsive">  
    <h3 align="center">About Table</h3><br />  

     <table class="table table-bordered table-striped">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Details</th>
                <th>Photo</th>
            </tr>

            <?php
        $sql = "SELECT * FROM about ORDER BY Id ASC";
        $result = $db->query($sql);
        //print_r($result);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            //print_r($row);
            ?>

            <tr>
                <?php $id = $row['Id']; ?>
                <td><?php echo $id ?></td>
                <?php $title = $row['Title']; ?>
                <td><?php echo $title ?></td>
                <?php $detail = $row['Detail']; ?>
                <td><?php echo $detail ?></td>
                <td>
                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['Photo']); ?>" height="50px" width="50px" style="border-radius: 8px;">
                </td>
                <!-- <td> <a href="booking.php?place=<?php echo $place; ?>" class="btn">Booking</a> </td> -->
            </tr>

            <?php
            
        }
        }
        ?>
        </table>
   </div>  
  </div>  


  <div class="row" style="background-color: #a3a3a3;">

<div class="col-lg-4">

<h3>Add:</h3>

<form action="aboutaction.php" method="POST" class="mt-2" enctype="multipart/form-data">
<table style="border-collapse: separate;border-spacing: 1em;">
<tr>
    <th>Title:</th>
    <td><input type="text" name="ttl" id="ttl" required></td>
</tr>
<tr>
    <th>Details:</th>
    <td><textarea name="dtl" id="dtl" cols="30" rows="5" required></textarea></td>
    <!-- <td><input type="text" name="dtl" required></td> -->
</tr>
<tr>
    <th>Photo</th>
    <td><input type="file" name="image" required></td>
</tr>
<tr>
    <td><input type="submit" name="submit" value="Add" class="btn btn-success mb-5"></td>
</tr>   
</table>

<!-- <form action="upload.php" method="post" enctype="multipart/form-data">

<label for="placename">Place Name</label>
<input type="text" name="placename" id="placename"> <br> <br>

<label>Place Image:</label>
<input type="file" name="image"> <br> <br>
<input type="submit" name="submit" value="Upload">
</form> -->
<!-- <label for="">Name:</label>
<input type="text" name="na" required>
<label for="">Email:</label>
<input type="email" name="em" required>
<label for="">Password:</label>
<input type="password" name="pw" required>
<input type="submit" value="Add" class="btn btn-success"> -->
</form>

</div>



<div class="col-lg-4">

<h3>Edit Id:</h3>

<form action="editid.php" method="POST">
<table style="border-collapse: separate;border-spacing: 1em;">
<tr>
    <th>Old Id:</th>
    <td><input type="number" name="pvid" required></td>
</tr>
<tr>
    <th>New Id:</th>
    <td><input type="number" name="nid" required></td>
</tr>
<tr>
    <td><input type="submit" value="Edit" class="btn btn-primary mb-5"></td>
</tr>
</table>
<!-- <label for="">Previous Id:</label>
<input type="number" name="pvid" required>
<label for="">New Id:</label>
<input type="number" name="nid" required>
<input type="submit" value="Edit" class="btn btn-primary"> -->
</form>
</div>

<div class="col-lg-4">

<h3>Delete:</h3>

<form action="delete.php" method="POST">
<table style="border-collapse: separate;border-spacing: 1em;">
<tr>
    <th>Id:</th>
    <td><input type="number" name="id" required></td>
</tr>
<tr>
    <td><input type="submit" value="Delete" name="delete" class="btn btn-danger mb-5"></td>
</tr>
</table>
</form>

</div>

</div>

<div class="row" style="background-color: #a3a3a3;">
    <div class="col-lg-4">
    <h3>Edit Title/Details:</h3>

<form action="onlyedit.php" method="POST">
<table style="border-collapse: separate;border-spacing: 1em;">
<tr>
    <th>Id:</th>
    <td><input type="number" name="eid"></td>
</tr>
<tr>
    <th>Title:</th>
    <td><input type="text" name="title"></td>
</tr>
<tr>
    <th>Details:</th>
    <td><textarea name="details" id="details" cols="30" rows="5"></textarea></td>
    <!-- <td><input type="text" name="details"></td> -->
</tr>
<tr>
    <td><input type="submit" value="Edit" name="submi" class="btn btn-primary mb-5"></td>
</tr>
</table>
<!-- <label for="">Previous Id:</label>
<input type="number" name="pvid" required>
<label for="">New Id:</label>
<input type="number" name="nid" required>
<input type="submit" value="Edit" class="btn btn-primary"> -->
</form>
    </div>


    <div class="col-lg-4">
    <h3>Edit Photo:</h3>

<form action="photoedit.php" method="POST" enctype="multipart/form-data">
<table style="border-collapse: separate;border-spacing: 1em;">
<tr>
    <th>Id:</th>
    <td><input type="number" name="pid"></td>
</tr>
<tr>
    <th>Photo:</th>
    <td><input type="file" name="image"></td>
</tr>
<tr>
    <td><input type="submit" value="Update" name="submit" class="btn btn-primary mb-5"></td>
</tr>
</table>
</form>

</div>
            
        </div>
    </div>

    

    <script>
      $("#logout").on("click",function(){
    var lgout=confirm("Want To Logout?")
    if(lgout==true){
        location.href="../../admin.php"
    }

    else{
        
    }
    })


/*
    $(document).ready(function(){  
     $('#editable_table').Tabledit({
      url:'action.php',
      columns:{
       identifier:[0, "Id"],
       editable:[[1, 'Name'], [2, 'Email'], [3, 'Password']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.Id).remove();
       }
      }
     });
 
});
*/  
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
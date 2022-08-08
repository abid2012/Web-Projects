<?php
$connect = mysqli_connect("localhost", "root", "", "itcompany");
$query = "SELECT * FROM admin ORDER BY Id ASC";
$result = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html lang="en">
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
    <title>Admin Table</title>
</head>
<body>
    <div class="row">
        <div class="col-lg-2 bg-dark text-white text-center" style="height: ;">
            <img src="admin.png" alt="icon" height="70px" width="70px" class="mt-3">
            <!-- <h1 class="mt-2">Admin Panel</h1> -->
            <h3>Welcome <br> Admin</h3>
            <hr>
            <a href="../admindash.php"><button class="my-btn1 mt-2">Users Database</button></a> <br> <br>
            <a href="./admindb.php"><button class="my-btn1 active">Admin Database</button></a> <br> <br>
            <a href="../About/aboutdb.php"><button class="my-btn1">About Database</button></a> <br> <br>
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
    <h3 align="center">Admin Table</h3><br />  
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Id</th>
       <th>Username</th>
       <th>Password</th>
      </tr>
     </thead>
     <tbody>
     <?php
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
       <td>'.$row["Id"].'</td>
       <td>'.$row["Username"].'</td>
       <td>'.$row["Password"].'</td>
      </tr>
      ';
     }
     ?>
     </tbody>
    </table>
    <p>Note: You can not delete or add admin here. If you want to do that, please contact the developer, <a href="#">Katura Gania Khushbu</a></p>
   </div>  
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



    $(document).ready(function(){  
     $('#editable_table').Tabledit({
      url:'adminaction.php',
      columns:{
       identifier:[0, "Id"],
       editable:[[1, 'Username'], [2, 'Password']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {

      }
     });
 
});  
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
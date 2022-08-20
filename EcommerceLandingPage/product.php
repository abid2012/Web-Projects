<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="icon" href="https://play-lh.googleusercontent.com/DTzWtkxfnKwFO3ruybY1SKjJQnLYeuK3KmQmwV5OQ3dULr5iXxeEtzBLceultrKTIUTr">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Product</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navi-bar">
    <div class="container-fluid">
    <a href="index.php"><img src="https://play-lh.googleusercontent.com/DTzWtkxfnKwFO3ruybY1SKjJQnLYeuK3KmQmwV5OQ3dULr5iXxeEtzBLceultrKTIUTr" alt="logo" width="60px" height="60px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#abt">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#prd">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#cont">Contact Us</a>
        </li>
      </ul>
    </div>
    </div>
    </nav>


    <h1 class="mt-3 text-center">T-Shirt</h1>

    <div class="row mt-5">
        <div class="col-lg-6">
            <img src="https://99designs-blog.imgix.net/blog/wp-content/uploads/2017/11/Tshirt-design.jpg?auto=format&q=60&w=2060&h=1236&fit=crop&crop=faces" alt="photo" width="100%" height="500px" class="d-block m-auto">
        </div>
        <div class="col-lg-6">
            <h3>T-Shirt Of Bengal</h3>
            <h5>Price: 1000BDT</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis repudiandae consectetur dolorem, ab dolores deleniti eius at odit soluta vitae voluptas eligendi eos nobis ipsa qui neque magnam hic. Nam, quasi temporibus. Nisi nemo illo qui nesciunt id est accusamus impedit culpa repudiandae sint cum molestiae, obcaecati deleniti. Sunt, eveniet?</p>
            
            <form>

            <div class="form-group">
    <label for="exampleInputName1">Name:</label>
    <input type="text" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Enter name">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mobile</label>
    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Mobile No">
  </div>
  <div class="form-group">
    <label>Address: </label>
    <textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Confirm Order</button>
</form>

        </div>
    </div>


    <footer>
            <div class="row bg-dark text-white p-2 text-center mt-5">
                <div class="col-lg-4">

                </div>
                <div class="col-lg-4">
                    <p>Copyright &copy; 2022 by <a href="https://coderstrustbd.com/" style="color: aqua;">CodersTrust Bangladesh</a>. All Rights Reserved.</p>
                </div>
                <div class="col-lg-4">
                <a href="https://www.facebook.com/" style="color: white"><h1 style="font-size: 24px; text-align: center;"><i class="fa-brands fa-facebook"></i></h1></a>
                </div>
            </div>
    </footer>
</body>
</html>
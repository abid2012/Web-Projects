$("#my-btn-logout").on("click",function(){
    var lgout=confirm("Want To Logout?")
    if(lgout==true){
        location.href="https://localhost/php/Khushbu%20SE%20Project/AdminLogin/adminlogin.html"
    }

    else{
        
    }
})

$("#btn-dlt-user").on("click",function(){
    location.href="https://localhost/php/Khushbu%20SE%20Project/AdminLogin/AdminDashboard/DeleteUser/deleteuser.html"
})

$("#btn-add-package").on("click",function(){
    location.href="https://localhost/php/Khushbu%20SE%20Project/AdminLogin/AdminDashboard/AddPackage/addpackage.html"
})

$("#btn-edit-package").on("click",function(){
    location.href="https://localhost/php/Khushbu%20SE%20Project/AdminLogin/AdminDashboard/EditPackage/editpackage.html"
})

$("#btn-dlt-package").on("click",function(){
    location.href="https://localhost/php/Khushbu%20SE%20Project/AdminLogin/AdminDashboard/DeletePackage/deletepackage.html"
})

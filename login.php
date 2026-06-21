<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Registration Form</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    body{
        background-color: #3b5d50;
    }
    .card-body{
    background-color: #66a58d;
    }
    .btn{
        background-color: #30a0af;
        color: black;
    }
   
</style>
<body>

<div class="container">
    <div class="row justify-content-center align-items-center vh-100">

        <div class="col-lg-5 col-md-7 col-sm-10">

            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-5">

                    <h2 class="text-center mb-4">Login Info</h2>

                    <form action="#" method="POST">

                      

                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" name="mail" class="form-control" placeholder="Enter Email">
                        </div>


                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password">
                        </div>

                        

                        <button class="btn  w-100" name="login">
                            login
                        </button>

                    </form>

                    <p class="text-center mt-3">
                        Already have an account?
                        <a href="#">Login</a>
                    </p>

                </div>
            </div>

        </div>

    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>


  <?php

include 'connection.php';
    // yeh login krta ha or check krta ha ke user data database ma ha yeh nahi
if(isset($_POST['login']))
{
 $mail = $_REQUEST['mail'];
$password = $_REQUEST['password'];

$query = "select* from users where mail='{$mail}' and  password='{$password}'";

 $result = mysqli_query($connection,$query); 

//  admin ko pernission ha sirf admin dashboard check krne ki
 $user=mysqli_fetch_assoc($result);

$_SESSION['userrole']=$user['role'];
// yeh login krta ha user
$_SESSION['usermail']=$_POST['mail'];

if($result && mysqli_num_rows($result)==1){
 echo " <script>
 window.location.href='../User/web.php'
 </script>";
    }
else{
    echo " <script>
    window.location.href='register.php'
    </script>";
}
}
?>
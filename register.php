

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Registration Form</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container">
    <div class="row justify-content-center align-items-center vh-100">

        <div class="col-lg-5 col-md-7 col-sm-10">

            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-5">

                    <h2 class="text-center mb-4">Register Form</h2>

                    <form action="#" method="POST">

                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Full Name">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" name="mail" class="form-control" placeholder="Enter Email">
                        </div>


                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password">
                        </div>

                        

                        <button class="btn btn-primary w-100" name="register">
                            Create Account
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

if(isset($_POST['register']))
{
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];

$newpassword=sha1($password,true);


    $query = "INSERT INTO users(name,mail,password)
              VALUES('$name','$mail','$newpassword')";

    $result = mysqli_query($connection, $query);

    if($result)
    {
        header('location:login.php');
    }
    else
    {
        header('location:register.php');
    }
}
?>
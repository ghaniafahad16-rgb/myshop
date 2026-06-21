<?php
include 'sidebar.php';
include '../Auth/connection.php'; 
 if(isset($_POST['AddCollection'])){

 
$name=$_REQUEST['name'];
$desc=$_REQUEST['description'];

$result=mysqli_query($connection,"insert into collection(name,description)
values('{$name}','{$desc}')");

if($result){
    echo"<script>
        window.location.href='./fetchcategory.php'
    </script>";
}
 }
?>

    <div class="container">
        <div class="row text-centre">
            <div class="col-md-10 offset-1">
                <h1>Add Collection Form</h1>
                <hr><hr><hr>
                <form action="#" method="POST">
                    <input type="text" placeholder="Enter CollectionName" class="form-control mt-4"  name="name">
                  <textarea name="description" class="form-control mt-4" placeholder="Description: "></textarea>
                    <button class="btn btn-info mt-4" name="AddCollection">Create Collection</button>
                </form>
            </div>
        </div>
    </div>
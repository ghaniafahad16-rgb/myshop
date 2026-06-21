<?php
include "sidebar.php";
include "../Auth/connection.php"; 
$id=$_GET['id']; 
$row=mysqli_query($connection, "select * from collection where id = $id"); 
$data=mysqli_fetch_assoc($row); 


 if(isset($_POST['UpdateCollection'])){

$name=$_REQUEST['name'];
$desc=$_REQUEST['description'];

    $result=mysqli_query($connection,"update collection set name='{$name}',description='{$desc}' where id=$id"); 
    
    if($result){ 
        echo" <script> window.location.href='fetchcategory.php'</script>"; 
    } 
 }
?>

    <div class="container">
        <div class="row text-centre">
            <div class="col-md-10 offset-1">
                <h1>Edit Collection Form</h1>
                <hr><hr><hr>
                <form action="#" method="POST">
                    <input type="text" placeholder="Enter CollectionName" value="<?php echo $data['name'] ?>" class="form-control mt-4"  name="name">
                  <textarea name="description" value="<?php echo $data['description'] ?>" class="form-control mt-4" placeholder="Description: "></textarea>
                    <button class="btn btn-info mt-4" name="UpdateCollection">Create Collection</button>
                </form>
            </div>
        </div>
    </div>


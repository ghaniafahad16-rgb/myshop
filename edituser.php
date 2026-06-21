<?php 
include 'sidebar.php'; 
include '../Auth/connection.php'; 

$id=$_GET['id']; 
$result=mysqli_query($connection, "select * from users where id=$id"); 
$user=mysqli_fetch_assoc($result); 

        //  yeh update krta ha
if(isset($_POST['update'])){ 
    $name=$_POST['name']; 
    $mail=$_POST['mail']; 
    $password=$_POST['password']; 
    $role=$_POST['role']; 
    
  
    $response=mysqli_query($connection,"update users set name='{$name}',mail='{$mail}',password='{$password}', role='{$role}' where id=$id"); 
    
    if($response){ 
        echo" <script> window.location.href='alluser.php'</script>"; 
    } else{ 
        echo" <script> window.location.href='alluser.php'</script>"; 
    } 
} 
?> 

<div class="container"> 
    <div class="row"> 
  
        <div class="col-lg-12 text-center"> 
            <h1>Edit Student Record</h1> 
            <hr><hr> 
            <form action="#" method="post"> 
          
                <input type="text" placeholder="Enter Your Name" class="form-control mt-4" name="name" value="<?php echo $user['name']?>"> 
                <input type="text" placeholder="Enter Your Email" class="form-control mt-4" name="mail" value="<?php echo $user['mail']?>"> 
                <input type="text" placeholder="Enter Your password" class="form-control mt-4" name="password" value="<?php echo $user['password']?>"> 
                
           <select name="role" class="form-control mt-4" >   
                <option value="Admin">admin</option>
            <option value="User">user</option></select>
                
      
                <button name="update" class="btn btn-info mt-5">Update</button> 
            </form> 
        </div> 
    </div> 
</div>
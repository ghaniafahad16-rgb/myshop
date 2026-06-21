<!-- sab users ka record save ha edit or delete ke option ke sath -->


<?php
include 'sidebar.php';
include '../Auth/connection.php';
$data = mysqli_query($connection, "select * from users");
?>

<div class="container">
    <div class="row text-center">
        <div class="col-md-12">
            <h1>All User Record</h1>
            <hr>
            <hr>
            <table class="table">
            
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>mail</th>
                    <th>password</th>
                    <th>role</th>
                    <th>Action</th>
                </tr>
<!-- 
                yeh role dega user ko jo database ma ha ternary oprator -->
          <?php
                foreach ($data as $user) {

      $role=   ($user['role']=="Admin")?"<button class='btn btn-primary'>Admin</button>":"<button class='btn btn-success'>user</button>";
                    //    yeh form ka data fetch krta ha 
                    echo "
                    <tr>
                        <td>{$user['id']}</td>
                        <td>{$user['name']}</td>
                        <td>{$user['mail']}</td>
                        <td>{$user['password']}</td>
                            <td>$role</td>
                    
                     <td text-success><a href='./edituser.php?id={$user['id']}'>edit</a>||<td text-danger><a href='./del.php?id={$user['id']}'>Delete</td>
                    </tr>";

                    if($role=="Admin"){
                        

                    }
}                                      //    yeh edito or delete krta ha
                ?>

            </table>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>


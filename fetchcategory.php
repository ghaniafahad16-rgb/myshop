<?php

include 'sidebar.php';
include '../Auth/connection.php';
$data=mysqli_query($connection,"select* FROM collection");


?>

<div class="container">
    <div class="row text-centre">
        <div class="col-md-10 offset-1">
            <h1>All Collection</h1>
            <hr><hr>
<table class="table">
    <tr>

    <th>Id</th>
    <th>Name</th>
    <th>Description</th>
    <th>Action</th>

</tr>
<?php
foreach($data as $collection){
    echo"
    <tr>
        <td>{$collection['id']}</td>
          <td>{$collection['name']}</td>
            <td>{$collection['description']}</td>
            <td>
             <a href='./editcollection.php'?id={$collection['id']}>Edit</a>||
             <a href='./deletecollection.php?id={$collection['id']}'>Delete</a>
             </td>
              
    </tr>";
    
    }
    
    ?>
</table>

        </div>
    </div>
</div>


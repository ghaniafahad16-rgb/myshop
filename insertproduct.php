<?php

include "sidebar.php";
include "../Auth/connection.php"; 
$data=mysqli_query($connection,"select * from collection");


?>
 
 
 
 
 <div class="container">
        <div class="row text-centre">
            <div class="col-lg-12 offset- ">
                <h1>Upload Product</h1>
                <hr><hr><hr>
                <form action="./productlogic.php" enctype="multipart/form-data" method="POST">
                 <div class="row">
                    <div class="col-md-6 mt-4">
                           <input type="text" placeholder="Enter Product Name" class="form-control mt-4"  name="name">
                    </div>
                    <div class="col-md-6 mt-4">
                           <input type="text" placeholder="Enter Product Price" class="form-control mt-4"  name="price">
                    </div>
                    <div class="col-md-6 mt-4">
                           <input type="text" placeholder="Enter Product Sku" class="form-control mt-4"  name="sku">
                    </div>
                    <div class="col-md-6 mt-4">
                           <input type="number" placeholder="Enter Product Stock" class="form-control mt-4"  name="stock">
                    </div>
                    <div class="col-md-6 mt-4">
                            <input type="file" name="pic" class="form-control mt-4">
                      </div>

                     <div class="col-md-6 mt-4">
                      <select name="catid" class="form-control mt-4">

                      <option >---Select Any Collection</option>
                      <?php
                      
                      foreach($data as $collection){
                        echo"
                        <option>{$collection['name']}</option>";
                      }

                      ?>
                      </select>
                    </div>
<div class="col-md-2"></div>
<div class="col-md-8">
       <textarea name="desc" class="form-control mt-4" placeholder="Description"></textarea>
</div>
                 </div>
                    
              
                    <button class="btn btn-info mt-4" name="AddCollection">Create Collection</button>
                </form>
            </div>
        </div>
    </div>

<?php

include "../Auth/connection.php";
$id=$_GET['id'];

$result=mysqli_query($connection,"delete from collection where id = $id ");

if($result){
    header("Location: fetchcategory.php");

}

?>
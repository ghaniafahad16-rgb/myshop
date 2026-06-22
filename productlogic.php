<?php

include '../Auth/connection.php';
$name=$_REQUEST['pname'];
$price=$_REQUEST['price'];
$sku=$_REQUEST['sku'];
$stock=$_REQUEST['stock'];
$desc=$_REQUEST['desc'];
$catid=$_REQUEST['catid'];

$pic=$_FILES['pic'];
$picname=$pic['name'];
$tmpname=$pic['tmp_name'];

$newpicname=uniqid()."_". round(microtime(true)*1000)."_".$picname;
$folder="../images/$newpicname";
if(move_uploaded_file($tmpname,$folder)){
$responce=mysqli_query($connection,"Insert into products(name,quantity,price,description,sku,category,pic)
values('{$name}'),('{$price}'),('{$stock}'),('{$desc}'),('{$sku}',('{$catid}'),('{$newpicname}'))");


if($responce){
    echo"
    <script>
    window.location.href='allproduct.php'
    </script>
    ";}
    else{
        echo"
        <script>
window.location.href='insertproduct.php'

        </script>
        ";
    
    
    }
    
    }
?>

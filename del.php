<?php

include '../Auth/connection.php'; 

$id = $_GET['id'];

$query = "DELETE FROM users WHERE id = $id";

$result = mysqli_query($connection, $query);

if($result){
    header("Location: edituser.php");

}
else{
    echo 'not gdgshdghsdghdghjdg';
}

?>

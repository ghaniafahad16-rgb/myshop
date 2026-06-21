<?php
session_start();
session_destroy();
header("location: ../Auth/login.php");
?>
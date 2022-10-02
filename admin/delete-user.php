<?php 
$userid = $_GET["id"];
include "config.php";
$Query = "DELETE FROM `user` WHERE `user_id` = '{$userid}'";
mysqli_query($conn,$Query);
header("location:http://localhost:80/k_store/admin/users.php");
?>

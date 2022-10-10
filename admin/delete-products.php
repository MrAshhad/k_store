<?php 
$postid = $_GET["id"];
include "config.php";
$Query = "DELETE FROM `post` WHERE `post_id` = '{$postid}'";
mysqli_query($conn,$Query);
header("location:http://localhost/k_store/admin/products.php");
?>
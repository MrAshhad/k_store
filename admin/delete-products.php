<?php 
$postid = $_GET["id"];
include "config.php";
$Query = "DELETE FROM `post` WHERE `post_id` = '{$postid}'";
$query .= "UPDATE `category` SET `post` = post - 1 WHERE `category_id` = {$category};";
mysqli_multi_query($conn,$Query);
header("location:http://localhost/k_store/admin/products.php");
?>
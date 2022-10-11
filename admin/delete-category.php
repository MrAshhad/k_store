<?php 
$ccid = $_GET["id"];
include "config.php";
$Query = "DELETE FROM `category` WHERE `category_id` = '{$ccid}'";
mysqli_query($conn,$Query);
header("location:http://localhost/k_store/admin/category.php");
?>
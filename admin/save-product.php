<?php
include "config.php";

if(isset($_FILES["fileToUpload"]))
{
    $error = array();
    $file_name = $_FILES["fileToUpload"]["name"];
    $file_size = $_FILES["fileToUpload"]["size"];
    $file_type = $_FILES["fileToUpload"]["type"];
    $file_tmp = $_FILES["fileToUpload"]["tmp_name"];
    $file_ext = explode(".",$file_name);
    $file_ext = end($file_ext);
    $file_ext = strtolower($file_ext);
    $extention = array("jpg","jpeg","png");

    if(in_array($file_ext,$extention) === false){
        $error[] = "File extension must be in jpg, jpeg and png";
    }
    if($file_size > 2097152)
    {
        $error[] = "File size must be less than 2MB";
    }
    if(empty($error) == true)
    {
        move_uploaded_file($file_tmp,"upload/".$file_name);
    }
    else
    {
        print_r($error);
        die();
    }
}
$title = $_POST["products_title"];
$desc = $_POST["productsdesc"];
$category = $_POST["category"];
$date = date("D - M - Y");
session_start();
$author = $_SESSION["user_id"];

$query = "INSERT INTO `post`(`title`, `description`, `category`, `post_date`, `author`, `post_img`) VALUES ('{$title}','{$desc}','{$category}','{$date}','{$author}','{$file_name}');";
$query .= "UPDATE `category` SET `post` = post + 1 WHERE `category_id` = {$category};";
mysqli_multi_query($conn,$query);
header("location:http://localhost/k_store/admin/products.php");

?>
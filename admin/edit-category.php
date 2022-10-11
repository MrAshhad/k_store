<?php  


    $_cid = $_POST["cat_id"];
    $_cname = $_POST["cat_name"];


    include "config.php";
    $query = " UPDATE `category` SET `category_name`='{$_cname}' WHERE `category_id` = '{$_cid}';";
    $result = mysqli_query($conn, $query);

    header("location:http://localhost/k_store/admin/category.php")


?>
<?php  


    $_pid = $_POST["products_id"];
    $p_title = $_POST["products_title"];
    $p_desc = $_POST["productsdesc"];
    $p_category = $_POST["category"];
    $o_img = $_POST["old-image"];
    $date = date("D - M - Y");
    session_start();
    $author = $_SESSION["user_id"];


    include "config.php";
    $query = "UPDATE `post` SET `title`='{$p_title}',`description`='{$p_desc}',`category`='{$p_category}',`post_date`='{$date}',`author`='{$author}',`post_img`='{$o_img}' WHERE `post_id` = '{$_pid}';";
    $result = mysqli_query($conn, $query);

    header("location:http://localhost/k_store/admin/products.php")


?>
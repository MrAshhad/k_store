<?php  


    $_id = $_POST["sid"];
    $f_name = $_POST["f_name"];
    $lname_ = $_POST["l_name"];
    $uname_ = $_POST["username"];
    $role_ = $_POST["role"];


    include "config.php";
    $query = "UPDATE `user` SET `first_name`='{$f_name}',`last_name`='{$lname_}',`username`='{$uname_}',`role`='{$role_}' WHERE `user_id` = '{$_id}'";
    $result = mysqli_query($conn, $query);

    header("location:http://localhost/k_store/admin/users.php")


?>
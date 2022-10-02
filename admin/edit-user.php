<?php  


    $_id = $_POST["sid"];
    $f_name = $_POST["first_name"];
    $lname_ = $_POST["last_name"];
    $uname_ = $_POST["username"];
    $password_ = $_POST["password"];
    $role_ = $_POST["role"];


    include "config.php";
    $query = "UPDATE `user` SET `first_name`='{$f_name}',`last_name`='{$lname_}',`username`='{$uname_}',`password`='{$password_}',`role`='{$role_}' WHERE `user_id` = '{$_id}'";
    $result = mysqli_query($conn, $query);

    header("location:http://localhost/k_store/admin/users.php")


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    </style>
</head>

<body>
    <!-- navbar -->
    <?php include "header.php"?><br><br>
    <!-- navbar -->
    <div class="container">
        <h2>Login</h2>
        <?php
            ini_set('display_errors', 0);


            if(isset($_POST["ss"]))
            {
            $cname = $_POST["cnam"];
            $cemai = $_POST["email"];
            $cpass = $_POST["pwd"];
            $ccpass = $_POST["pwd"];

            include "config.php";

            $query = "SELECT * from `customer` WHERE `cuser` = '{$cname}'";

            $result = mysqli_query($conn,$query);

            if(mysqli_num_rows($result)>0)
            {
                echo "customer already exist";

            }
            else
            {
                include "config.php";

                $query1 = "INSERT INTO `customer`(`cuser`, `email`, `password`, `cpassword`) VALUES ('{$cname}','{$cemai}','{$cpass}','{$ccpass}');";

                mysqli_query($conn,$query1);

                header("location:http://localhost/k_store/index.php");

            }
            }
            ?>
        <form onsubmit="return formValidate()" action="<?php $_SERVER["PHP_SELF"] ?>" method="POST">
            <div class="form-group">
                <label for="email">User:</label>
                <input type="text" class="form-control" id="uname" placeholder="Enter Name" name="cnam">
                <span id="s1" style="font-weight: bold;" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="emai" placeholder="Enter email" name="email">
                <span id="s2" style="font-weight: bold;" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd1" placeholder="Enter password" name="pwd">
                <span id="s3" style="font-weight: bold;" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="pwd">Confirm Password:</label>
                <input type="password" class="form-control" id="pwd2" placeholder="Enter password" name="pwd">
                <span id="s4" style="font-weight: bold;" class="text-danger"></span>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="ss">Submit</button>
        </form>
    </div><br><br>

    <script>
        function formValidate() {
            var user = document.getElementById("uname").value;
            var email = document.getElementById("emai").value;
            var pwd = document.getElementById("pwd1").value;
            var cnfrmpwd = document.getElementById("pwd2").value;

            if (user == "") {
                document.getElementById("s1").innerHTML = "Enter atleast One character"
                return false;
            }
            if (!isNaN(user)) {
                document.getElementById("s1").innerHTML = "Number not allowed in names"
                return false;
            }
            if (user.length <= 2) {
                document.getElementById("s1").innerHTML = "Name should not be less tha two characters"
                return false;

            }
            if (email.indexOf("@") <= 0) {
                document.getElementById("s2").innerHTML = "please Enter correct Format"
            }
            if (pwd == "") {
                document.getElementById("s3").innerHTML = "Enter Password"
                return false;

            }
            if (pwd.length < 8) {
                document.getElementById("s3").innerHTML = "Password should not less tha eight characters"
                return false;

            }

            if (cnfrmpwd.length < 8) {
                document.getElementById("s4").innerHTML = "Pssword do not match"
                return false;

            }
            if (cnfrmpwd != pwd) {
                document.getElementById("s4").innerHTML = "Pssword do not match"
                return false;

            }


        }


    </script>
    <?php include "footer.php"?>
</body>

</html>
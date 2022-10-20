<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
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
    <?php include "header.php"?>
    <!-- navbar -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                <div class="categories">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Categories</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            include "config.php";
                            $query = "SELECT * from `category`";
                            $result = mysqli_query($conn, $query);
                            if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result))
                            {
                            ?>
                            <tr>
                                <td><a href="Product.php" style="color: black;" role="button"><?php echo $row['category_name'];?></a>
                                </td>
                            </tr>
                            <?php } } ?>
                        </tbody>
                    </table>

                </div>

            </div>
            <div class="col-sm-10">
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/carousel2.jpg" height="100%" width="100%" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="images/carousel3.jpg" height="100%" width="100%" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="images/carousel1.jpg" height="100%" width="100%" alt="">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>

                </div>

                <br><br>
                <!-- CARDS SLIDER -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="mb-3">New Products</h3>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button"
                                data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button"
                                data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-12">
                            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">
                                        <?php
                                        include "config.php";
                                        $query = "SELECT * from `post` LEFT JOIN `category` ON post.category = category.category_id  LEFT JOIN `user` ON post.author = user.user_id";
                                        $result = mysqli_query($conn, $query);
                                        if (mysqli_num_rows($result) > 0) {
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                        ?>
                                            <div class="col-md-3 mb-2">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="admin/upload/<?php echo $row['post_img'];?>"
                                                        width="100%" height="100%">
                                                    <div class="card-body">
                                                        <h4 class="card-title"><?php echo $row['title'];?></h4>
                                                        <p class="card-text"><?php echo $row['description'];?></p>
                                                        <a href="seeproduct.php?id=<?php echo $row['post_id'];?>"><button class="btn">See Product</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } } ?>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CARDS SLIDER -->
            </div>
        </div>
    </div> <br><br><br>
    <!-- footer -->
    <?php include "footer.php"; ?>
    <!-- Footer -->
</body>

</html>
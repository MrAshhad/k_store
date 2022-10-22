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
    fa {
        padding: 20px;
    }
</style>
</head>
<body>
      <!-- navbar -->
      <?php include "header.php"?><br><br>
    <!-- navbar -->
    <div class="container-fluid">
    <h1 style="text-align: center;color: white; background-color: blue;">Contact US</h1>
    <p style="text-align: center;">Feel free to contact us to share your thoughts or contact our help center.</p>
    <br><br>
    <div class="row" >
        <div class="col-sm-4">
        </div>
        <div class="col-sm-3" style="text-align: center; border: 1px solid blue; width: 100%; height: 100%;">
            <div>
            <p>Your Name</p>
            <input type="text" name="" id="">
            <p>Your Feedback</p>
            <textarea name="" id="" cols="30" rows="10"></textarea>
            <br> <br>
            <button class="btn btn-primary" type="submit">Submit Feedback</button>
            <br> <br> 
            <p>Feel Free to contact us.</p>
            <p><b>+1999-35492</b></p>
        </div>
        </div>
        <div class="col-sm-1">
        </div>
        </div>

    </div>
    <br> <br> <br>
    <!-- footer -->
    <?php include "footer.php"?>
    <!-- Footer -->
</body>
</html>
<?php include "header.php"; ?>
<?php
$user_id_ = $_GET["id"];
include "config.php";
$Query1 = "SELECT * from `user` WHERE `user_id` = '{$user_id_}'";
$result = mysqli_query($conn, $Query1);
if(mysqli_num_rows($result))
{
    $row = mysqli_fetch_assoc($result);

    
?>


<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Modify User Details</h1>
            </div>
            <div class="col-md-offset-4 col-md-4">
                <!-- Form Start -->
                <form action="edit-user.php" method="GET">
                    <div class="form-group">
                        <input type="hidden" name="sid" class="form-control" value="<?php echo $row['user_id']; ?>" >
                    </div>
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="f_name" class="form-control" value="<?php echo $row['first_name']; ?>"  required>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="l_name" class="form-control" value="<?php echo $row['last_name']; ?>"  required>
                    </div>
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" name="username" class="form-control" value="<?php echo $row['username']; ?>"  required>
                    </div>
                    <div class="form-group">
                        <label>User Role</label>
                        <select class="form-control" name="role" value="<?php echo $row['role']; ?>">
                            <option value="0">normal User</option>
                            <option value="1">Admin</option>
                        </select>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                </form>
                <!-- /Form -->
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php include "footer.php"; ?>
<?php include "header.php"; ?>
<?php
include "config.php";
$query = "SELECT * from `customer`";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {

?>




<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">All Users</h1>
            </div>
            <div class="col-md-12">
                <table class="content-table">
                    <thead>
                        <th>S.No.</th>
                        <th>User Name</th>
                        <th>E-mail</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <?php 
                        while($row = mysqli_fetch_assoc($result))
                        {
                        ?>
                        <tr>
                            <td class='id'><?php echo $row['id'];?></td>
                            <td><?php echo $row['cuser'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td class='edit'><a href='update-cus.php?id=<?php echo $row["user_id"];?>'><i class='fa fa-edit'></i></a></td>
                            <td class='delete'><a href='delete-cus.php?id=<?php echo $row["user_id"];?>'><i class='fa fa-trash-o'></i></a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <?php } ?>
                <ul class='pagination admin-pagination'>
                    <li class="active"><a>1</a></li>
                    <li><a>2</a></li>
                    <li><a>3</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>

<?php include "header.php"; ?>
<?php
$category_id_ = $_GET["id"];
include "config.php";
$Query1 = "SELECT * from `category` WHERE `category_id` = '{$category_id_}'";
$result = mysqli_query($conn, $Query1);
if(mysqli_num_rows($result))
{
    $row = mysqli_fetch_assoc($result);

    
?>
<div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="adin-heading"> Update Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <form action="edit-category.php" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="cat_id"  class="form-control" value="<?php echo $row['category_id']; ?>" placeholder="">
                      </div>
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="cat_name" class="form-control" value="<?php echo $row['category_name']; ?>"  placeholder="" required>
                      </div>
                      <input type="submit" name="sumbit" class="btn btn-primary" value="Update" required />
                  </form>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
<?php include "footer.php"; ?>

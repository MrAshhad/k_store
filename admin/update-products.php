<?php include "header.php"; ?>





<?php
$post_id_ = $_GET["id"];
include "config.php";
$Query1 = "SELECT * from `post` WHERE `post_id` = '{$post_id_}'";
$result = mysqli_query($conn, $Query1);
if(mysqli_num_rows($result))
{
    $row = mysqli_fetch_assoc($result);

    
?>


<div id="admin-content">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
        <h1 class="admin-heading">Update Products</h1>
    </div>
    <div class="col-md-offset-3 col-md-6">
        <!-- Form for show edit-->
        <form action="edit-products.php" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="form-group">
                <input type="hidden" name="products_id"  class="form-control" value="<?php echo $row['post_id']; ?>"" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputTile">Title</label>
                <input type="text" name="products_title"  class="form-control" id="exampleInputUsername" value="<?php echo $row['title']; ?>"">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"> Description</label>
                <textarea name="productsdesc" class="form-control"  required rows="5"  >
                <?php echo $row['description']; ?> 
                </textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputCategory">Category</label>
                <select name="category" class="form-control">
                              <option value="<?php echo $row['category']; ?>" selected> Select Category</option>
                              <?php
                              echo "hello";
                              include "config.php";
                              $query = "SELECT * FROM `category`;";
                              $result = mysqli_query($conn,$query);
                              if(mysqli_num_rows($result)>0)
                              {
                                  while($rows = mysqli_fetch_assoc($result))
                                  {
                                      echo "<option value='{$rows['category_id']}'>{$rows['category_name']}</option>";
                                  }
                              }
                              ?>
                          </select>
            </div>
            <div class="form-group">
                <label for="">Product image</label>
                <input type="file" name="new-image">
                <h3>Previous image</h3>
                <img  src="upload/<?php echo $row['post_img']; ?>" height="150px">
                <input type="hidden" name="old-image" value="admin/upload<?php echo $row['post_img']; ?>">
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Update" />
        </form>
        <!-- Form End -->
      </div>
    </div>
  </div>
</div>
<?php } ?>
<?php include "footer.php"; ?>

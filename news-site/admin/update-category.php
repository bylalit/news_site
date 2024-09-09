<?php include "header.php";
if($_SESSION['user_role'] == "0"){
    header("Location: {$hostname}/admin/post.php");
}

if(isset($_POST['sumbit'])){

    include "config.php";

    $cat_id = mysqli_real_escape_string($conn, $_POST['cid']);
    $cat_name = mysqli_real_escape_string($conn, $_POST['cname']);
    $cat_prod = mysqli_real_escape_string($conn, $_POST['post']);

    $sql = "UPDATE category SET category_name = '{$cat_name}', post = '{$cat_prod}' WHERE category_id = '{$cat_id}'";

    if(mysqli_query($conn, $sql)){
        header("Location: {$hostname}/admin/category.php");
    }
}





?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="adin-heading"> Update Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">

                <?php 
                    include "config.php";
                    $sql  = "SELECT * FROM category WHERE category_id = '{$_GET['id']}'";
                    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
                    if(mysqli_num_rows(($result)) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                ?>
                
                  <form action="" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="cid"  class="form-control" value="<?php echo $row['category_id'] ?>" placeholder="">
                      </div>
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="cname" class="form-control" value="<?php echo $row['category_name'] ?>"  placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>No. of Posts</label>
                          <input type="text" name="post" class="form-control" placeholder="No. of Posts" value="<?php echo $row['post'] ?>" >
                      </div>
                      <input type="submit" name="sumbit" class="btn btn-primary" value="Update" required />
                  </form>

                  <?php 
                        }   
                    }
                  ?>
                </div>
              </div>
            </div>
          </div>
<?php include "footer.php"; ?>

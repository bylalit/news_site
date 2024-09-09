<!-- <?php include "header.php";

include "config.php";

if(isset($_POST['save'])){

    $cat_name = mysqli_real_escape_string($conn, $_POST['cname']);
    $cat_prod = mysqli_real_escape_string($conn, $_POST['post']);

    $sql = "SELECT category_name FROM category  WHERE category_name = '{$cat_name}'";

    $result = mysqli_query($conn,  $sql) or die("Query failed.");

    if(mysqli_num_rows($result) > 0){
        echo "<p style='color:red;text-aline:center;margin:10px 0'>Category Name already exists.</p>";
    }else{
        $sql1 = "INSERT INTO  category (category_name, post) VALUES ('{$cat_name}', '{$cat_prod}')";
        if(mysqli_query($conn, $sql1)){
            header("Location: {$hostname}/admin/category.php");
        }
    }

}






?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Add New Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">

                <?php 
                    
                ?>


                  <!-- Form Start -->
                  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="cname" class="form-control" placeholder="Category Name" required>
                      </div>
                      <div class="form-group">
                          <label>No. of Posts</label>
                          <input type="text" name="post" class="form-control" placeholder="No. of Posts" required>
                      </div>
                      <input type="submit" name="save" class="btn btn-primary" value="Save" required />
                  </form>
                  <!-- /Form End -->
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?> -->

<?php 
include("header.php");
include("connection.php");
?>

<?php
                                          // UPDATED  
            if(isset($_GET['i'])){
                $c_id = $_GET['i'];
                $select = "SELECT * FROM categories WHERE category_id = '$c_id'";
                $row = mysqli_query($connect, $select);

                $data = mysqli_fetch_assoc($row);
?>
               
            
            <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                               
                                <div class="card">
                                    <h5 class="card-header">Update Service Category</h5>
                                    <div class="card-body">
                                        <form method="POST">
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Update Service Category Name</label>
                                                <input value="<?php echo $data['category_name'] ?>" id="inputText3" type="text" class="form-control" name="category_name">
                                            </div>
                                            <button type="submit" class="btn btn-primary" name="update_btn">Update</button> 
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

<?php  
                if(isset($_POST['update_btn'])){
                    $c_name = $_POST['category_name'];
                    $updated = "UPDATE categories SET category_name = '$c_name' WHERE category_id = '$c_id'";
                   $done = mysqli_query($connect, $updated);

                   
                    if($done){
                        echo "<script>
                        alert('Record Updated!');
                        window.location.href = 'viewCategory.php';
                        </script>";
                       }
                   
                }

           }
            ?>
          <!-- DELETE  -->
<?php
if(isset($_GET['j'])){
                $c_id = $_GET['j'];
                $delete = "DELETE FROM `categories` WHERE `category_id` = '$c_id'";
                $done = mysqli_query($connect, $delete);

                if($done){
                    echo "<script>
                    alert('Record Deleted!');
                    window.location.href = 'viewCategory.php';
                    </script>";
                   }
               
            }

                ?>
<?php 
include("footer.php");
?>
<?php 
include("header.php");
include("connection.php");
?>

<?php
                                       // UPDATED 
            if(isset($_GET['i'])){
                $r_id = $_GET['i'];
                $select = "SELECT * FROM roles WHERE role_id = '$r_id'";
                $row = mysqli_query($connect, $select);

                $data = mysqli_fetch_assoc($row);
?>

            
            <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                               
                                <div class="card">
                                    <h5 class="card-header">Update Role</h5>
                                    <div class="card-body">
                                        <form method="POST">
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Update Role Name</label>
                                                <input value="<?php echo $data['role_name'] ?>" id="inputText3" type="text" class="form-control" name="role_name">
                                            </div>
                                            <button type="submit" class="btn btn-primary" name="update_btn">Update</button> 
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>



<?php 
                if(isset($_POST['update_btn'])){
                    $r_name = $_POST['role_name'];
                    $updated = "UPDATE roles SET role_name = '$r_name' WHERE role_id = '$r_id'";
                   $done = mysqli_query($connect, $updated);

                   
                    if($done){
                        echo "<script>
                        alert('Record Updated!');
                        window.location.href = 'viewRole.php';
                        </script>";
                       }
                   
                }

           }
            ?>
<!-- DELETE  -->
<?php
if(isset($_GET['j'])){
                $r_id = $_GET['j'];
                $delete = "DELETE FROM roles WHERE role_id = '$r_id'";
                $done = mysqli_query($connect, $delete);

                if($done){
                    echo "<script>
                    alert('Record Deleted!');
                    window.location.href = 'viewRole.php';
                    </script>";
                   }
               
            }

                ?>
<?php 
include("footer.php");
?>
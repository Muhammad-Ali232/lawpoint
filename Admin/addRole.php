<?php 
include("header.php");
include("connection.php");
?>

            <!-- Form Start -->




            <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                               
                                <div class="card">
                                    <h5 class="card-header">Add Role</h5>
                                    <div class="card-body">
                                        <form method="POST">
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Role Name</label>
                                                <input id="inputText3" type="text" class="form-control" name="role_name">
                                            </div>
                                            <button type="submit" class="btn btn-primary" name="role_btn">Add</button> 
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>



            <!-- Form End -->

            <?php

            if(isset($_POST['role_btn'])){
                $r_name = $_POST['role_name'];

                $insert = "INSERT INTO roles (role_name)
                VALUES ('$r_name')";

               $done =  mysqli_query($connect, $insert);

               if($done){
                echo "<script>
                alert('Record Inserted!');
                window.location.href = 'viewRole.php';
                </script>";
               }
            }
            ?>

<?php 
include("footer.php");
?>
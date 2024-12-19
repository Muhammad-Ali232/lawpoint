<?php 
include("header.php");
include("connection.php");
?>

            <!-- Form Start -->




            <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                               
                                <div class="card">
                                    <h5 class="card-header">Add Service Category</h5>
                                    <div class="card-body">
                                        <form method="POST">
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Service Category Name</label>
                                                <input id="inputText3" type="text" class="form-control" name="category_name">
                                            </div>
                                            <button type="submit" class="btn btn-primary" name="category_btn">Add</button> 
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>



            <!-- Form End -->

            <?php

            if(isset($_POST['category_btn'])){
                $c_name = $_POST['category_name'];

                $insert = "INSERT INTO categories (category_name)
                VALUES ('$c_name')";

               $done =  mysqli_query($connect, $insert);

               if($done){
                echo "<script>
                alert('Record Inserted!');
                window.location.href = 'viewCategory.php';
                </script>";
               }
            }
            ?>

<?php 
include("footer.php");
?>
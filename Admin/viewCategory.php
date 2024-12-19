<?php 
include("header.php");
?>
<?php 
include("connection.php");
$select = "SELECT * FROM categories ";
$row = mysqli_query($connect, $select);

?>


            <!-- Table Start -->


                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">View Service Categories</h5>
                                <div class="card-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Service Category Id</th>
                                                <th scope="col">Service Category Name</th>
                                                <th scope="col">Edit Service Category</th>
                                                <th scope="col">Delete Service Category</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                <?php
                                while ($data = mysqli_fetch_assoc($row)){
                                    ?>
                                    <tr>
                                        <th scope="row"> <?php echo $data['category_id']; ?> </th>
                                        <td> <?php echo $data['category_name']?></td>
                                        <td> <a href="editCategory.php?i=<?php echo $data['category_id']?>" class="btn btn-dark">Edit</a> </td>
                                        <td> <a href="editCategory.php?j=<?php echo $data['category_id']?>" class="btn btn-danger" onclick="return confirm('Record Will be Deleted Permanently!')">Delete</a> </td>
                                    </tr>

                               <?php }?>
                                    
                                </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
            
            <!-- Table End -->
             
<?php 
include("footer.php");
?>

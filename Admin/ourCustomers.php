<?php
include("header.php");
include("connection.php");


$select = "SELECT * FROM `customers`";
$query = mysqli_query($connect , $select);
?>

<div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Our Customers</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">#</th>
                                                        <th class="border-0">Customer Name</th>
                                                        <th class="border-0">Gender</th>
                                                        <th class="border-0">Date of Birth</th>
                                                        <th class="border-0">E-Mail</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php while($fetch = mysqli_fetch_assoc($query)){ ?>
                                                    <tr>
                                                        <td><img src="customer_pics/<?php echo $fetch['customer_pic']; ?>" alt="No Image"  style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;"></td>
                                                        <td><?php echo $fetch['customer_name']; ?></td>
                                                        <td><?php echo $fetch['gender']; ?></td>
                                                        <td><?php echo $fetch['date_of_birth']; ?></td>
                                                        <td><?php echo $fetch['email']; ?></td>
                                                    </tr>
                                                    <?php } ?>
                                                    <!-- <tr>
                                                        <td colspan="9"><a href="viewDetails.php" class="btn btn-outline-light float-right">View Details</a></td>
                                                    </tr> -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

<?php
include("footer.php");
?>
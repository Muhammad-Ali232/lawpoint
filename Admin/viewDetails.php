<?php 
include("header.php");
include("connection.php");

$select = "SELECT a. *, c.customer_id , c.customer_name , l.lawyer_id , l.lawyer_name
FROM `appointments` a
INNER JOIN `customers` c
ON a.customer_id = c.customer_id
INNER JOIN `lawyers` l
ON a.lawyer_id = l.lawyer_id";
$query = mysqli_query($connect , $select);
?>

<div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Recent Appointment Requests</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">Appointment Id</th>
                                                        <th class="border-0">Customer Name</th>
                                                        <th class="border-0">Lawyer Name</th>
                                                        <th class="border-0">Appointment Date</th>
                                                        <th class="border-0">Appointment Time</th>
                                                        <th class="border-0">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php while($fetch = mysqli_fetch_assoc($query)){ ?>
                                                    <tr>
                                                        <td><?php echo $fetch['appointment_id']; ?></td>
                                                        <td><?php echo $fetch['customer_name']; ?></td>
                                                        <td><?php echo $fetch['lawyer_name']; ?></td>
                                                        <td><?php echo $fetch['appointment_date']; ?></td>
                                                        <td><?php echo $fetch['appointment_time']; ?></td>
                                                        <td><?php echo $fetch['status']; ?></td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

<?php 
include("footer.php");
?>
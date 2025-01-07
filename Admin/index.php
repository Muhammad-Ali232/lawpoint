<?php
include("header.php");
include("connection.php");

$count_cust = "SELECT COUNT(*) AS cust From customers";
$c_q = mysqli_query($connect, $count_cust);
$c_c = mysqli_fetch_assoc($c_q);


$count_law = "SELECT COUNT(*) AS law From lawyers";
$l_q = mysqli_query($connect, $count_law);
$l_c = mysqli_fetch_assoc($l_q);


$appoin_sch = "SELECT COUNT(*) AS sch From appointments_scheduled";
$a_q = mysqli_query($connect, $appoin_sch);
$a_c = mysqli_fetch_assoc($a_q);


$pend_req = "SELECT COUNT(*) AS p_q From pending_requests";
$p_q = mysqli_query($connect, $pend_req);
$p_c = mysqli_fetch_assoc($p_q);


$select = "SELECT a. *, c.customer_id , c.customer_name , l.lawyer_id , l.lawyer_name
FROM `appointments` a
INNER JOIN `customers` c
ON a.customer_id = c.customer_id
INNER JOIN `lawyers` l
ON a.lawyer_id = l.lawyer_id LIMIT 10";
$query = mysqli_query($connect , $select);
?>

                   
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body" style="height: 160px">
                                    <h3 class="text-muted">Total Customers</h3>
                                        <div class="d-inline-block float-right text-success font-weight-bold">
                                           <br> <span><h1 style="color: darkblue;"><?php echo $c_c['cust'] ?></h1></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body" style="height: 160px">
                                        <h3 class="text-muted">Total Lawyers</h3>
                                        <div class="d-inline-block float-right text-success font-weight-bold">
                                        <br><span><h1 style="color: darkblue;"><?php echo $l_c['law'] ?></h1></span>
                                        </div>
                                    </div>
                               </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="text-muted">Appointments Scheduled</h3>
                                        <div class="d-inline-block float-right text-primary font-weight-bold">
                                        <span><h1 style="color: darkblue;"><?php echo $a_c['sch'] ?></h1></span>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="text-muted">Lawyers Pending Requests</h3>
                                        <div class="d-inline-block float-right text-secondary font-weight-bold">
                                        <span><h1 style="color: darkblue;"><?php echo $p_c['p_q'] ?></h1></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- ============================================================== -->
                      
                            <!-- ============================================================== -->

                                          <!-- recent orders  -->
                            <!-- ============================================================== -->
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
                                                    <tr>
                                                        <td colspan="9"><a href="viewDetails.php" class="btn btn-outline-light float-right">View Details</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end recent orders  -->

    
                            <!-- ============================================================== -->
                        
                         
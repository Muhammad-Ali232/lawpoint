<?php
session_start();

if (!isset($_SESSION['customer_id'])) {
  // Redirect to login page if not logged in
  header('Location: ../login.php');
  exit();
};

include("../Admin/connection.php");
include("header.php");



$cust_id = $_SESSION['customer_id'];

$select = "SELECT a. *, l.lawyer_id , l.lawyer_name
FROM `appointments` a
INNER JOIN `lawyers` l
ON a.lawyer_id = l.lawyer_id
WHERE a.customer_id = '$cust_id'";
$query = mysqli_query($connect , $select);


$sel = "SELECT a. *, l.lawyer_id , l.lawyer_name
FROM `appointments_scheduled` a
INNER JOIN `lawyers` l
ON a.lawyer_id = l.lawyer_id
WHERE a.customer_id = '$cust_id'";
$row = mysqli_query($connect , $sel);
?>
               
                       <!-- APPOINTMENT REQUESTS -->


<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card" style="margin-left: 16px; margin-bottom: 80px;  margin-top: 50px;">
                                <h3 class="card-header text-center">My Appointment Requests</h3>
                                <div class="card-body">
                                    <table class="table table-hover">
  <tr>
    <th>Appointment ID</th>
    <th>Lawyer Name</th>
    <th>Appointment Date</th>
    <th>Appointment Time</th>
    <th>Status</th>
  </tr>
  <?php while ($fetch = mysqli_fetch_assoc($query)) { ?>
    <tr>
      <td><?php echo $fetch['appointment_id']; ?></td>
      <td><?php echo $fetch['lawyer_name']; ?></td>
      <td><?php echo $fetch['appointment_date']; ?></td>
      <td><?php echo $fetch['appointment_time']; ?></td>
      <td><?php echo $fetch['status']; ?></td>
      
    </tr>
  <?php } ?>
</table>
  </div>
  </div>
  </div>


  <!-- APPOINTMENTS SCHEDULED -->


  <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card" style="margin-left: 280px; margin-bottom: 80px;">
                                <h3 class="card-header text-center">My Appointments Scheduled</h3>
                                <div class="card-body">
                                    <table class="table table-hover">
  <tr>
    <th>Appointment ID</th>
    <th>lawyer Name</th>
    <th>Appointment Date</th>
    <th>Appointment Time</th>
  </tr>
  <?php while ($done = mysqli_fetch_assoc($row)) { ?>
    <tr>
      <td><?php echo $done['appointment_id']; ?></td>
      <td><?php echo $done['lawyer_name']; ?></td>
      <td><?php echo $done['appointment_date']; ?></td>
      <td><?php echo $done['appointment_time']; ?></td>   
    </tr>
  <?php } ?>
</table>
  </div>
  </div>
  </div>


<?php
include("footer.php");
?>
<?php
session_start();
include("../Admin/connection.php");
include("header.php");


$lawyer_id = $_SESSION['lawyer_id'] ?? null;

$select = "SELECT a. *, c.customer_id , c.customer_name
FROM `appointments_scheduled` a
INNER JOIN `customers` c
ON a.customer_id = c.customer_id
WHERE a.lawyer_id = '$lawyer_id'";
$query = mysqli_query($connect , $select);


?>

<div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card" style="margin-left: 200px; margin-bottom: 80px;">
                                <h3 class="card-header text-center">Appointments Scheduled</h3>
                                <div class="card-body">
                                    <table class="table table-hover">
  <tr>
    <th>Appointment ID</th>
    <th>Customer Name</th>
    <th>Appointment Date</th>
    <th>Appointment Time</th>
  </tr>
  <?php while ($fetch = mysqli_fetch_assoc($query)) { ?>
    <tr>
      <td><?php echo $fetch['appointment_id']; ?></td>
      <td><?php echo $fetch['customer_name']; ?></td>
      <td><?php echo $fetch['appointment_date']; ?></td>
      <td><?php echo $fetch['appointment_time']; ?></td>   
    </tr>
  <?php } ?>
</table>
  </div>
  </div>
  </div>

<?php
include("footer.php");
?>
<?php
session_start();
include("../Admin/connection.php");
include("header.php");

$lawyer_id = $_SESSION['lawyer_id'] ?? null;
// $lawyer_name = $_SESSION['lawyer_name'];
// $lawyer_email = $_SESSION['lawyer_email'];
// $specialization = $_SESSION['lawyer_specialization'];
// $profile_image = $_SESSION['lawyer_image'];
// $lawyer_contact_number = $_SESSION['lawyer_contact_number'];
// $role_id = $_SESSION['lawyer_role_id'];

$select = "SELECT a. *, c.customer_id , c.customer_name
FROM `appointments` a
INNER JOIN `customers` c
ON a.customer_id = c.customer_id
WHERE a.lawyer_id = '$lawyer_id'";
$query = mysqli_query($connect , $select);


?>

<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card" style="margin-left: 16px; margin-bottom: 80px;">
                                <h3 class="card-header text-center">Appointment Requests</h3>
                                <div class="card-body">
                                    <table class="table table-hover">
  <tr>
    <th>Appointment ID</th>
    <th>Customer Name</th>
    <th>Appointment Date</th>
    <th>Appointment Time</th>
    <th>Status</th>
    <th>Approve Requests</th>
    <th>Reject Requests</th>
  </tr>
  <?php while ($fetch = mysqli_fetch_assoc($query)) { ?>
    <tr>
      <td><?php echo $fetch['appointment_id']; ?></td>
      <td><?php echo $fetch['customer_name']; ?></td>
      <td><?php echo $fetch['appointment_date']; ?></td>
      <td><?php echo $fetch['appointment_time']; ?></td>
      <td><?php echo $fetch['status']; ?></td>
      <td> <a href="appointment.php?i=<?php echo $fetch['appointment_id']?>" class="btn btn-success">Approve.</a></td>
      <td> <a href="appointment.php?j=<?php echo $fetch['appointment_id']?>"  onclick="return confirm('Are you sure!.')" class="btn btn-danger">Reject.</a></td>
      
    </tr>
  <?php } ?>
</table>
  </div>
  </div>
  </div>


<?php


if(isset($_GET['i'])){
  $id = $_GET['i'];
  $query = "SELECT * FROM appointments WHERE appointment_id = '$id'";
  $result = mysqli_query($connect, $query);
  $fetch = mysqli_fetch_assoc($result);



  $appoint_id = $fetch['appointment_id'];
  $cust_id = $fetch['customer_id'];
  $lawyer_id = $fetch['lawyer_id'];
  $appoint_date = $fetch['appointment_date'];
  $appoint_time = $fetch['appointment_time'];
  $status = $fetch['status'];


 $insert = "INSERT INTO `appointments_scheduled`(`customer_id`, `lawyer_id`, `appointment_date`, `appointment_time`)
   VALUES ('$cust_id','$lawyer_id','$appoint_date','$appoint_time')";

$b = mysqli_query($connect , $insert);

if($b){
  $update = "UPDATE `appointments` SET `status` = 'Approved'
              where appointment_id = $id";
      
    mysqli_query($connect , $update);
    echo "<script>
    window.location.href = 'appointment.php';
    </script>";

}
else{
  echo "
  <script>
  alert('Error!.');
  </script>
  ";
};

};


if(isset($_GET['j'])){
  $id = $_GET['j'];
  $query = "SELECT * FROM appointments WHERE id ='$id'";
  $result = mysqli_query($connect, $query);
  $fetch = mysqli_fetch_assoc($result);


  $id = $fetch['id'];
 

  $updated = "UPDATE `appointments` SET `status` = 'Rejected'
              where id = $id";
         
     mysqli_query($connect , $updated);    
     echo "<script>
    window.location.href = 'appointments.php';
    </script>";
};

$del = "DELETE FROM `appointments` WHERE `status` != 'Pending'";
$d = mysqli_query($connect , $del);


?>

<?php
include("footer.php");
?>
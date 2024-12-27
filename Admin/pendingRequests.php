<?php
include("connection.php");
include("header.php");

$select = "SELECT p. *, c.category_id , c.category_name
FROM `pending_requests` p
INNER JOIN `categories` c
ON p.specialization = c.category_id";
$row = mysqli_query($connect, $select);

?>


<div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Pending Requests</h5>
                                <div class="card-body">
                                    <table class="table table-hover">
  <tr>
    <th>ID</th>
    <th>Lawyer Name</th>
    <th>Lawyer Email</th>
    <th>Specialization</th>
    <th>Experience Years</th>
    <th>Status</th>
    <th>Approve Requests</th>
    <th>Reject Requests</th>
  </tr>
  <?php while ($fetch = mysqli_fetch_assoc($row)) { ?>
    <tr>
      <td><?php echo $fetch['id']; ?></td>
      <td><?php echo $fetch['name']; ?></td>
      <td><?php echo $fetch['email']; ?></td>
      <td><?php echo $fetch['category_name']; ?></td>
      <td><?php echo $fetch['experience_years']; ?></td>
      <td><?php echo $fetch['status']; ?></td>
      <td> <a href="pendingRequests.php?i=<?php echo $fetch['id']?>" class="btn btn-success">Approve.</a></td>
      <td> <a href="pendingRequests.php?j=<?php echo $fetch['id']?>"  onclick="return confirm('Are you sure!.')" class="btn btn-danger">Reject.</a></td>
      
    </tr>
  <?php } ?>
</table>

              <!-- PHP WORK -->


<?php
if(isset($_GET['i'])){
  $id = $_GET['i'];
  $query = "SELECT * FROM pending_requests WHERE id = '$id'";
  $result = mysqli_query($connect, $query);
  $fetch = mysqli_fetch_assoc($result);



  $id = $fetch['id'];
  $lawyername = $fetch['name'];
  $lawyeremail = $fetch['email'];
  $lawyerspecialization = $fetch['specialization'];
  $lawyerexperience = $fetch['experience_years'];
  $lawyercontact = $fetch['contact_number'];
  $lawyerdescription = $fetch['description'];
  $lawyerpass = $fetch['password'];
  $lawyerimg = $fetch['profile_image'];
  $roleid = 3;

 $insert = "INSERT INTO `lawyers`(`lawyer_name`, `specialization`, `experience_years`, `profile_image`, `description`, `contact_number`, `email`, `password`, `role_id`)
   VALUES ('$lawyername','$lawyerspecialization','$lawyerexperience','$lawyerimg','$lawyerdescription','$lawyercontact','$lawyeremail','$lawyerpass','$roleid')";

$b = mysqli_query($connect , $insert);

if($b){
  $update = "UPDATE `pending_requests` SET `status` = 'Approved'
              where id = $id";
      
    mysqli_query($connect , $update);
    echo "<script>
    window.location.href = 'pendingRequests.php';
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
  $query = "SELECT * FROM pending_requests WHERE id ='$id'";
  $result = mysqli_query($connect, $query);
  $fetch = mysqli_fetch_assoc($result);


  $id = $fetch['id'];
 

  $updated = "UPDATE `pending_requests` SET `status` = 'Rejected'
              where id = $id";
         
     mysqli_query($connect , $updated);    
     echo "<script>
    window.location.href = 'pendingRequests.php';
    </script>";
};

$del = "DELETE FROM `pending_requests` WHERE `status` != 'Pending'";
$d = mysqli_query($connect , $del);


?>
<?php
include("footer.php");
?>
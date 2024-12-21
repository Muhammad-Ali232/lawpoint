<?php
include("connection.php");
include("header.php");

$select = "SELECT p.id, p.name, p.email, p.specialization, p.experience_years, p.status, c.category_id , c.category_name
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
    <th>Action</th>
  </tr>
  <?php while ($fetch = mysqli_fetch_assoc($row)) { ?>
    <tr>
      <td><?php echo $fetch['id']; ?></td>
      <td><?php echo $fetch['name']; ?></td>
      <td><?php echo $fetch['email']; ?></td>
      <td><?php echo $fetch['category_name']; ?></td>
      <td><?php echo $fetch['experience_years']; ?></td>
      <td><?php echo $fetch['status']; ?></td>
      <td>
        <form method="POST" action="approve_request.php">
          <input type="hidden" name="id" value="<?php echo $fetch['id']; ?>">
          <input type="hidden" name="name" value="<?php echo  $fetch['name']; ?>">
          <input type="hidden" name="email" value="<?php echo $fetch['email']; ?>">
          <input type="hidden" name="specialization" value="<?php echo $fetch['category_name']; ?>">
          <input type="hidden" name="experience_years" value="<?php echo $fetch['experience_years']; ?>">
          <input type="hidden" name="status" value="<?php echo $fetch['status']; ?>">
          <button class="btn btn-success" type="submit" name="action" value="approve">Approve</button>
          <button class="btn btn-danger" type="submit" name="action" value="reject">Reject</button>
        </form>
      </td>
    </tr>
  <?php } ?>
</table>
<?php

?>
<?php
include("footer.php");
?>
<?php
include("connection.php");
include("header.php");

$contact = "SELECT * FROM `contact_form` ORDER BY date_submitted DESC";
$result = mysqli_query($connect, $contact);


?>



<div class="container my-5">
    <h1 class="text-center mb-4">Customers Contact Requests</h1>
    
    <?php if ($result->num_rows > 0) { ?>
        <div class="contact-requests">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="mb-4 p-3 border rounded shadow-sm" style="background-color: lightgrey;">
                    <h3 class="text-primary text-break text-capitalize"><?php echo htmlspecialchars($row['name']); ?></h3>
                    <h5 class="text-muted text-break"><?php echo htmlspecialchars($row['email']); ?></h5>
                    <p class="text-break"><?php echo nl2br(htmlspecialchars($row['message'])); ?></p>
                    <small class="text-muted d-block">Submitted on: <?php echo $row['date_submitted']; ?></small>
                </div>
            <?php } ?>
        </div>
    <?php } else { ?>
        <p class="text-center">No contact requests found.</p>
    <?php } ?>
</div>



<?php
include("footer.php");
?>
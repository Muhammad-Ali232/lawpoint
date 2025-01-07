<?php
include("header.php");
include("../Admin/connection.php");

if(isset($_GET['i'])){
    $id = $_GET['i'];


$select = "SELECT l.* , c.category_id , c.category_name
FROM `lawyers` l
INNER JOIN `categories` c
ON l.specialization = c.category_id 
 WHERE lawyer_id = '$id'";
$query = mysqli_query($connect  , $select);


?>

<div class="container-xxl py-5 mt-5">
        <div class="container mt-5">
            <div class="row g-5 align-items-center">
           <?php $fetch = mysqli_fetch_assoc($query) ?>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="../Admin/lawyer_pics/<?php echo $fetch['profile_image'] ?>">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4"><?php echo $fetch['lawyer_name'] ?></h1>
                    <p><i class="fa fa-check text-primary me-3"></i>Specialization : <?php echo $fetch['category_name'] ?></p>
                    <p><i class="fa fa-check text-primary me-3"></i>Experience Years: <?php echo $fetch['experience_years'] ?></p>
                    <p><i class="fa fa-check text-primary me-3"></i>Description: <?php echo $fetch['description'] ?></p>
                    <a class="btn rounded-pill py-3 px-5 mt-3" style="background:  #aa9166;" href="appointment.php?i=<?php echo $fetch['lawyer_id'] ?>">Appoint Now</a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

<?php
include("footer.php");
?>
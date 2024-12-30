<?php
include("../Admin/connection.php");
include("header.php");

if(isset($_GET['cat_id'])){
    $cat_id = $_GET['cat_id'];
    $lawyers = "SELECT * FROM `lawyers` WHERE specialization = '$cat_id'";
    $query = mysqli_query($connect, $lawyers);
}
?>

<!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-12">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                        <h1 class="display-5 mb-3">Our Lawyers</h1>
                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary border-2 active" data-bs-toggle="pill" href="#tab-1">Vegetable</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-2">Fruits </a>
                        </li>
                        <li class="nav-item me-0">
                            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-3">Fresh</a>
                        </li>
                    </ul>
                </div>
            </div> -->

            <div class="container-fluid">
                <div class="d-flex flex-column justify-content-center">
                <h1 class="display-5 mb-3">Our Lawyers</h1>
<!-- <div class="tab-content"> -->
                <!-- <div id="tab-1" class="tab-pane fade show p-0 active"> -->
                    <!-- <div class="row g-4"> -->
                        <?php
                    while($fetch = mysqli_fetch_assoc($query)){ ?>
    

                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="" width="100%" height="200px" src="../Admin/lawyer_pics/<?php echo $fetch['profile_image'] ?>" alt="Error">
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href=""> <?php echo $fetch['lawyer_name'] ?></a>
                                    <span class="text-primary me-1"><?php echo $fetch['specialization'] ?></span>
                                    <span class="text-body"><?php echo $fetch['description'] ?></span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="cardDetails.php?id=<?php echo $fetch['lawyer_id'] ?>"><i class="fa fa-eye text-primary me-2"></i>View details</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                    </small>
                                </div>
                            </div>
                        </div>

                        <?php } ?>

                        <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="">Browse More Products</a>
                        </div>
                    </div>
                </div>
                
            </div>
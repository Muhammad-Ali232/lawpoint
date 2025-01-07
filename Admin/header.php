<?php
session_start();
include("connection.php");

$Admin_id = $_SESSION['id'] ?? null;
$Admin_name = $_SESSION['name'] ?? null;

$select = "SELECT * FROM `admin_users` WHERE id ='$Admin_id'";
$query = mysqli_query($connect , $select);
$fetch = mysqli_fetch_assoc($query);

?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>LawPoint.com</title>
    <link href="assets/images/icon.png" rel="icon">
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.php" style="color: darkblue;">LawPoint</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto align-items-center">

                <!-- User Name -->
                <li class="nav-item">
                    <span class="navbar-text" style="font-size: 17px;margin-right: 15px; font-weight: bold; color: darkblue;"><?php echo "$Admin_name"; ?></span>
                </li>


                <!-- Picture Container -->
                <li class="nav-item">
                    <a href="profile.php" class="profile-pic-link" style="display: block; width: 40px; height: 40px; border-radius: 50%; overflow: hidden; margin-right: 15px;">
                        <img src="admin_user_pics/<?php echo $fetch['image'] ?>" alt="User Profile Picture" style="width: 100%; height: 100%; object-fit: cover;">
                    </a>
                </li>
                
            
                <!-- Log Out Button -->
                <li class="nav-item">
                    <a href="../logout.php" class="btn bg-dark btn-sm">Log Out</a>
                </li>
            </ul>
        </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="index.php"><i class="fa fa-fw fa-user-circle"></i>Dashboard</a>
                            </li>

                            <!-- ROLES -->


                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-rocket"></i>Roles</a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="addRole.php">Add Role</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="viewRole.php">View Roles</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                           
                               
                            <!-- CATEGORIES -->

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Service Categories</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="addCategory.php">Add Service Category</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="viewCategory.php">View Service Categories</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>

                            <!-- PENDING REQUESTS -->

                            <li class="nav-item ">
                                <a class="nav-link" href="pendingRequests.php"><i class="fa fa-fw fa-user-circle"></i>Pending Requests</a>
                            </li>

                            <!--CUSTOMER CONTACT REQUESTS -->

                            <li class="nav-item ">
                                <a class="nav-link" href="customercontactRequests.php"><i class="fa fa-fw fa-user-circle"></i>Customer Contact Requests</a>
                            </li>

                            <!-- LAWYER CONTACT REQUETS -->

                            <li class="nav-item ">
                                <a class="nav-link" href="lawyercontactRequests.php"><i class="fa fa-fw fa-user-circle"></i>Lawyer Contact Requests</a>
                            </li>

                            <!-- OUR CUSTOMERS -->

                            <li class="nav-item ">
                                <a class="nav-link" href="ourCustomers.php"><i class="fa fa-fw fa-user-circle"></i>Our Customers</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
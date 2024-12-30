<?php
include("../Admin/connection.php");

$opening_hour = "8:00 - 9:00"; 
$contact_number = "+923152416541";
$social_links = [
    'instagram' => 'https://www.instagram.com/login/',
    'facebook' => 'https://www.facebook.com/login/',
    'linkedin' => 'https://pk.linkedin.com/',
    'youtube' => 'https://www.youtube.com/'
];

$set_cat = "SELECT * FROM `categories`";
$cat_q= mysqli_query($connect, $set_cat);


$currentPage = basename($_SERVER['PHP_SELF']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>law point</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Law Firm Website Template" name="keywords">
    <meta content="Law Firm Website Template" name="description">

    <!-- Favicon -->
    <link href="img/icon.png" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- CSS Libraries -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>
<body>
    <div class="wrapper">
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="index.php">
                                <h1>LawPoint</h1>
                                <!-- <img src="img/logo.jpg" alt="Logo"> -->
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="top-bar-right">
                            <div class="text">
                                <h2><?php echo $opening_hour; ?></h2>
                                <p>Opening Hour Mon - Fri</p>
                            </div>
                            <div class="text">
                                <h2><?php echo $contact_number; ?></h2>    
                                <p>Call Us For Free Consultation</p>
                            </div>
                            <div class="social">
                                <a href="<?php echo $social_links['instagram']; ?>" target="_blank"><i class="fab fa-instagram" ></i></a>
                                <a href="<?php echo $social_links['facebook']; ?>" target="_blank"><i class="fab fa-facebook-f" ></i></a>
                                <a href="<?php echo $social_links['linkedin']; ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                <a href="<?php echo $social_links['youtube']; ?>" target="_blank"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link <?php echo $currentPage == 'index.php' ? ' active' : ''; ?>">Home</a>
                    <a href="about.php" class="nav-item nav-link <?php echo $currentPage == 'about.php' ? ' active' : ''; ?>">About Us</a>
                    <a href="contact.php" class="nav-item nav-link <?php echo $currentPage == 'contact.php' ? ' active' : ''; ?>">Contact Us</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle <?php echo $currentPage == 'services.php' ? ' active' : ''; ?>" data-bs-toggle="dropdown" role="button">Services</a>
                        <div class="dropdown-menu m-0">
                            <?php while ($fetch_cat = mysqli_fetch_assoc($cat_q)) { ?>
                            <a href="services.php?cat_id=<?php echo $fetch_cat['category_id']; ?>" class="dropdown-item"><?php echo $fetch_cat['category_name']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                        <div class="ml-auto">
                            <a class="btn" href="appoinment.php">Get Appointment</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->
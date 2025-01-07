<?php
include("../Admin/connection.php");


$customer_id = $_SESSION['customer_id'] ?? null;

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

$select = "SELECT * FROM `customers` WHERE customer_id = '$customer_id'";
$query = mysqli_query($connect , $select);
$customer = mysqli_fetch_assoc($query);

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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha384-UG8ao2jwOWB7/oDdObZc6ItJmwUkR/PfMyt9Qs5AwX7PsnYn1CRKCTWyncPTWvaS" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <script src="js/main.js"></script>
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
                    <div class="col-lg-9 col-md-6 col-sm-12">
                        <div class="top-bar-right d-flex align-items-center justify-content-end">
                            <div class="text">
                                <h2><?php echo $opening_hour; ?></h2>
                                <p>Opening Hour Mon - Fri</p>
                            </div>
                            <div class="text">
                                <h2><?php echo $contact_number; ?></h2>    
                                <p>Call Us For Free Consultation</p>
                            </div>
                            <div class="top-bar-right d-flex align-items-center justify-content-end">
    
    <div class="social-icons d-flex align-items-center me-3">
        <a href="<?php echo $social_links['instagram']; ?>" target="_blank" class="me-3"><i class="fab fa-instagram"></i></a>
        <a href="<?php echo $social_links['facebook']; ?>" target="_blank" class="me-3"><i class="fab fa-facebook-f"></i></a>
        <a href="<?php echo $social_links['linkedin']; ?>" target="_blank" class="me-3"><i class="fab fa-linkedin-in"></i></a>
        <a href="<?php echo $social_links['youtube']; ?>" target="_blank" class="me-3"><i class="fab fa-youtube"></i></a>
    </div>

    <!-- Login or Profile Dropdown -->
    <div class="user-profile">
        <?php if (isset($_SESSION['customer_id'])) { ?>
            <div class="nav-item dropdown d-flex align-items-center">
            <a href="#" class="nav-link dropdown-toggle text-decoration-none text-capitalize d-flex align-items-center" style="font-weight: bold; font-size: 20px; color: #aa9166;" id="userDropdown" role="button" data-bs-toggle="dropdown">
                <img src="../Admin/customer_pics/<?php echo $customer['customer_pic']; ?>" alt="Profile Picture" class="rounded-circle" style="width: 30px; height: 30px; margin-right: 10px;">
                <?php echo htmlspecialchars($_SESSION['customer_name']); ?>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
            </ul>
        </div>
        <?php } else { ?>
            <a href="../login.php" class="btn btn-outline-warning">Login</a>
        <?php } ?>
    </div>
</div>


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
                    <a href="myappointments.php" class="nav-item nav-link <?php echo $currentPage == 'myappointments.php' ? ' active' : ''; ?>">My Appointments</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle <?php echo $currentPage == 'services.php' ? ' active' : ''; ?>" data-bs-toggle="dropdown" >Services</a>
                        <ul class="dropdown-menu dropdown-menu-end m-0">
                            <?php while ($fetch_cat = mysqli_fetch_assoc($cat_q)) { ?>
                            <a href="services.php?cat_id=<?php echo $fetch_cat['category_id']; ?>" class="dropdown-item"><?php echo $fetch_cat['category_name']; ?></a>
                            <?php } ?>
                            </ul>
                    </div>
                </div>
                        <div class="ml-auto">
                            <a class="btn" href="appointment.php">Get Appointment</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->

<script>
   window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.nav-bar'); 
    if (window.scrollY > 0) {
        navbar.classList.add('nav-sticky');
    } else {
        navbar.classList.remove('nav-sticky');
    }
});

</script>
<?php
include("../Admin/connection.php");

$email = "lawyer@gmail.com"; 
$contact_number = "+923152416541";

$social_links = [
    'instagram' => 'https://www.instagram.com/login/',
    'facebook' => 'https://www.facebook.com/login/',
    'linkedin' => 'https://pk.linkedin.com/',
    'youtube' => 'https://www.youtube.com/'
];
$phone_number_1 = "+923152416541";  
$phone_number_2 = "+923121057493";

$currentPage = basename($_SERVER['PHP_SELF']);
?>
	 	
<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>LawPoint</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Place favicon.ico in the root directory -->
	<link href="img/icon/icon.png" rel="icon">
    <!--All Css Here-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

	<!-- Droid Font CSS-->
    <link rel="stylesheet" href="css/droid.css">
	<!-- Icofont CSS-->
    <link rel="stylesheet" href="css/icofont.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Animate CSS-->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Owl Carousel CSS-->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<!-- Datepicker CSS-->
	<link rel="stylesheet" href="css/jquery.datepicker.css">
	<!-- Calendar CSS-->
	<link rel="stylesheet" href="css/zabuto_calendar.css">
	<!-- Meanmenu CSS-->
	<link rel="stylesheet" href="css/meanmenu.min.css">
	<!-- Venobox CSS-->
	<link rel="stylesheet" href="css/venobox.css">
	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="style.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- Modernizr Js -->
	<script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
        .header-top-right .btn {
    padding: 8px 15px;
    font-size: 14px;
    font-weight: bold;
    background-color: #d9534f; /* Bootstrap Red */
    color: #fff;
    border: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
    text-decoration: none;
}

.header-top-right .btn:hover {
    background-color: #c9302c; /* Darker red on hover */
}

    </style>

</head>
<body>
	<!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<div class="wrapper">
		<!--Header Area Start-->
		<header>
		    <div class="header-container">
		        <!--Header Top Area Start-->
		        <div class="header-top-area default-bg">
    <div class="container">
        <div class="row row-75">
            <div class="header-top-wrap col-12">
                <div class="row">
                    <!-- Header Top Left Area Start -->
                    <div class="col-md-4 col-xl-3">
                        <div class="header-top-left">
                            <p>CALL US : <a href="tel:<?php echo "$contact_number;" ?>"><?php echo "$contact_number"; ?></a></p>
                        </div>
                    </div>
                    <!-- Header Top Left Area End -->
                    
                    <!-- Header Top Middle Area Start -->
                    <div class="col-md-4 col-xl-6">
                        <div class="header-top-middle text-center">
                            <ul class="social-link">
                                <li><a href="<?php echo $social_links['instagram']; ?>" target="_blank" class="me-3"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="<?php echo $social_links['facebook']; ?>" target="_blank" class="me-3"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="<?php echo $social_links['linkedin']; ?>" target="_blank" class="me-3"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="<?php echo $social_links['youtube']; ?>" target="_blank" class="me-3"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Header Top Middle Area End -->
                    
                    <!-- Header Top Right Area Start -->
                    <div class="col-md-4 col-xl-3">
                        <div class="header-top-right">
                            <p>MAIL US : <a href="mailto:<?php echo "$email;" ?>"><?php echo "$email"; ?></a></p>
                            <!-- Logout Button -->
                            <a href="../logout.php" class="btn btn-danger mt-2">Logout</a>
                        </div>
                    </div>
                    <!-- Header Top Right Area End -->
                    
                </div>
            </div>
        </div>
    </div>
</div>

		        <!--Header Top Area End-->
		        <!--Header Bottom Area Start-->
		        <div class="header-bottom-area header-sticky">
		            <div class="container">
		                <div class="row align-items-center">
                            <!--Header Logo Start-->
		                    <div class="col-md-3">
		                        <div class="header-logo">
		                            <a href="index.php"><img style = "width:110px; margin-left: 100px;" src="img/logo/images__1_-removebg-preview.png"></a>
		                        </div>
		                    </div>
		                    <!--Header Logo End-->
		                    <!--Header Menu Start-->
		                    <div class="col-md-9">
                            <div class="header-menu-area text-right">
        <nav>
            <ul class="main-menu">
                <li>
                    <a href="index.php" class="nav-item nav-link <?php echo $currentPage == 'index.php' ? 'active' : ''; ?>">HOME</a> </li>
                <li>
                    <a href="appointment.php" class="nav-item nav-link <?php echo $currentPage == 'appointment.php' ? 'active' : ''; ?>">APPOINTMENT REQUESTS</a>
                </li>
                <li>
                    <a href="appointmentScheduled.php" class="nav-item nav-link <?php echo $currentPage == 'appointmentScheduled.php' ? 'active' : ''; ?>">APPOINTMENT SCHEDULED</a></li>
                <li>
                    <a href="about.php" class="nav-item nav-link <?php echo $currentPage == 'about.php' ? 'active' : ''; ?>">ABOUT US</a></li>
                <li>
                    <a href="contact.php" class="nav-item nav-link <?php echo $currentPage == 'contact.php' ? 'active' : ''; ?>">CONTACT US</a>
                </li>
            </ul>
        </nav>
    </div>  

</div>
		                <div class="row">
                            <div class="col-12">  
                            <!--Mobile Menu Area Start-->
                            <div class="mobile-menu d-lg-none d-xl-none"></div>
                            <!--Mobile Menu Area End-->
                            </div>
                        </div>
		            </div>
		        </div>
		        <!--Header Bottom Area End-->
		    </div>
		</header>
		<!--Header Area End-->
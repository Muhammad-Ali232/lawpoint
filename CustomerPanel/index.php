<?php
session_start();
include("../Admin/connection.php");
include("header.php");

$select = "SELECT * FROM `categories` ";
$query = mysqli_query($connect , $select);

?>

<style>

 
        .row .ab {
            display: flex;
            flex-wrap: wrap;
            gap: 10px; 
            justify-content: center;
            margin: 0;
            padding: 20px;
        }
        
        .circle-card {
            width: 200px;        
            height: 200px;       
            background-color: #aa9166;
            border-radius: 50%;      
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
            text-align: center;
            color: white;
            margin-left: 45px;
            /* grid-gap: 2;           */
            font-size: 18px;
            transition: transform 0.3s ease; 
        }

        /* Hover effect */
        .circle-card:hover {
            transform: scale(1.05);   /* Slight zoom effect on hover */
        }

        .circle-card .icon {
            font-size: 50px; /* Icon size */
            margin-bottom: 10px; /* Space between icon and text */
        }

        .circle-card .title {
            font-family: 'EB Garamond', serif;
            font-weight: bold;
            font-size: 40px;
            color: black;
        }

        

    </style>

<!-- Carousel Start -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/carousel-1.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeft">We fight for your justice</h1>
                            <p class="animated fadeInRight"> Ensuring your rights are protected every step of the way.</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/carousel-2.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeft">We prepared to oppose for you</h1>
                            <p class="animated fadeInRight">We are prepared to stand strong and oppose any challenge on your behalf.</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/carousel-3.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeft">We fight for your privilege</h1>
                            <p class="animated fadeInRight">We fight to protect your privileges and secure the rights you deserve.</p>
                        
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Carousel End -->

<!-- 



            SERVICE CATEGORIES -->

            <br>
            <div class="service">
                <div class="container">
                    <div class="section-header">
                        <h2>Our Practices Areas</h2>
                    </div>
               </div>
            </div>
            <div class="row">
            <?php while($fetch = mysqli_fetch_assoc($query)){ ?>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <a href="services.php?cat_id=<?php echo $fetch['category_id']; ?>" style="text-decoration: none;">
                    <div class="circle-card">
                        <div class="title"><?php echo $fetch['category_name']; ?></div>
                    </div>
                    </a>
                </div>
            <?php } ?>
            </div>
            <br> <br>


            
            <!-- Service Start -->
            <!-- <div class="service">
                <div class="container">
                    <div class="section-header">
                        <h2>Our Practices Areas</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-4">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-landmark"></i>
                                </div>
                                <h3>Civil Law</h3>
                                <p>
                                Civil law deals with disputes between individuals or entities, covering areas like contracts, property, and family law. It seeks to resolve conflicts and provide remedies, often through compensation or enforcement of agreements.                                </p>
                                <a class="btn" href="">Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <h3>Family Law</h3>
                                <p>
                                Family law governs legal matters related to familial relationships, including marriage, divorce, child custody, adoption, and inheritance.</p>
                                </p>
                                <a class="btn" href="">Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-hand-holding-usd"></i>
                                </div>
                                <h3>Business Law</h3>
                                <p>
                                Business law encompasses the legal rules and regulations governing commercial activities, such as contracts, transactions, intellectual property, and corporate governance. It ensures businesses operate within the law and resolve disputes effectively.    </p>                       
                                       <a class="btn" href="">Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                                <h3>Education Law</h3>
                                <p>
                                Education law governs the policies and regulations that ensure equitable access to education, protect students' rights, and guide the operation of educational institutions. It addresses issues such as student discipline, teacher rights, and compliance with educational standards and laws.                             </p>
                                <a class="btn" href="">Learn More</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div> -->
            <!-- Service End -->

                        
            <!-- About Start -->
            <div class="about">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="img/about.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header">
                                <h2>Learn About Us</h2>
                            </div>
                            <div class="about-text">
                                
                                <p>
                                    At Lawpoint your case is our priority. We work diligently to provide personalized, comprehensive legal services that meet your unique needs. You deserve a lawyer who listens, understands, and fights for you. 
                                </p>
                                
                                <p>
                                    With years of experience across various practice areas, we deliver strategic, results-driven solutions designed to achieve your goals. Let us handle your legal matters so you can focus on what matters most.</p>
                                <a class="btn" href="about.php">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->

            
            
            <!-- Feature Start -->
            <div class="feature">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="section-header">
                                <h2>Why Choose Us</h2>
                            </div>
                            <div class="row align-items-center feature-item">
                                <div class="col-5">
                                    <div class="feature-icon">
                                        <i class="fa fa-gavel"></i>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <h3>Best law practices</h3>
                                    <p>
                                    Business law practice involves advising clients on legal matters related to commerce, such as contracts, mergers, corporate governance, and compliance </p>
                                </div>
                            </div>
                            <div class="row align-items-center feature-item">
                                <div class="col-5">
                                    <div class="feature-icon">
                                        <i class="fa fa-balance-scale"></i>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <h3>Efficiency & Trust</h3>
                                    <p>
                                    Efficiency ensures tasks are completed with minimal waste of time and resources, fostering productivity. Trust builds strong relationships and reliable systems, forming the foundation for collaboration and long-term success.                                    </p>
                                </div>
                            </div>
                            <div class="row align-items-center feature-item">
                                <div class="col-5">
                                    <div class="feature-icon">
                                        <i class="far fa-smile"></i>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <h3>Results you deserve</h3>
                                    <p>
                                    "Achieving justice and delivering the results you deserve with unwavering commitment."                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="feature-img">
                                <img src="img/feature.jpg" alt="Feature">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Feature End -->



            
           

           


<?php

include("footer.php")
?>
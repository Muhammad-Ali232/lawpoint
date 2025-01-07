<!--Footer Area Start-->
<?php
$social_links = [
    'instagram' => 'https://www.instagram.com/login/',
    'facebook' => 'https://www.facebook.com/login/',
    'linkedin' => 'https://pk.linkedin.com/',
    'youtube' => 'https://www.youtube.com/'
];
?>


<footer>
		    <div class="footer-container">
		        <!--Footer Top Area Start-->
		        <!-- <div class="footer-top-area black-bg pt-50 pb-50"> -->
		            <div class="container">
		                <div class="row">
		                    <div class="col-md-3 col-lg-3">
                                <!--Single Footer Widget Start-->
		                         <div class="single-footer-widget mb-30"> 
                                    <a class="footer-logo" href="index.php"><img src="img/logo/images__1_-removebg-preview.png"></a>
									 <p>Our approach focuses on making an impact that resonates with our clients.</p>		                        		                         
                                       <div id="mc_embed_signup_scroll">
                                          <div id="mc-form" class="mc-form subscribe-form" >
                                          </div>
                                       </div>
                                   </form>
		                        </div> 
		                        <!--Single Footer Widget End-->
		                    </div>
		                    <!--Single Footer Widget Start-->
		                    <div class="col-md-6 col-lg-3 footer-menu">
		                        <div class="single-footer-widget mb-30">
		                            <h3 class="footer-title">Quick Links</h3>
		                            <ul>
									<ul>
    <li><a href="about.php"><i class="fas fa-info-circle"></i> ABOUT US</a></li>
    <li><a href="contact.php"><i class="fas fa-envelope"></i> CONTACT US</a></li>
    <li><a href="appointmentscheduled.php"><i class="fas fa-calendar-check"></i> APPOINTMENT SCHEDULED</a></li>
    <li><a href="appointment.php"><i class="fas fa-calendar-plus"></i> APPOINTMENT REQUESTS</a></li>
</ul>

		                        </div>
		                    </div>
		                    <!--Single Footer Widget End-->
		                  
		                    <!--Single Footer Widget Start-->
		                    <div class="col-md-6 col-lg-3">
		                        <div class="single-footer-widget mb-30">
		                            <h3 class="footer-title">Contact Info</h3>
		                            <!-- <p>129 Street Avenue, Alex Complex Street, New York</p> -->
									<p class="contact-info">
									<p>For initial free telephonic conversation, you may communicate with us through any of the numbers provided below:</p>
                                           <p class="contact-info">
                                               <a href="tel:<?php echo $phone_number_1; ?>" class="phone-icon">
                                                   <i class="fas fa-phone">&nbsp; :&nbsp;</i> <?php echo $phone_number_1; ?>
                                               </a>
                                               <a href="tel:<?php echo $phone_number_2; ?>" class="phone-icon">
                                                   <i class="fas fa-phone">&nbsp; : &nbsp; </i> <?php echo $phone_number_2; ?>
                                               </a>
    </p>
</p>
		                           
		                        </div>

		                    </div>
		                    <!--Single Footer Widget End-->
							<div class="footer-social" >
							<h3 class="footer-title">Our Socials</h3>
							<!-- <div class="footer-social" > -->
                                         <a href="<?php echo $social_links['instagram']; ?>" target="_blank" class="instagram">
                                             <i class="fab fa-instagram"></i>
                                         </a> 
                                         <a href="<?php echo $social_links['facebook']; ?>" target="_blank" class="facebook">
                                             <i class="fab fa-facebook-f"></i>
                                         </a>  
                                         <a href="<?php echo $social_links['linkedin']; ?>" target="_blank" class="linkedin">
                                             <i class="fab fa-linkedin-in"></i>
                                         </a>   
                                         <a href="<?php echo $social_links['youtube']; ?>" target="_blank" class="youtube">
                                             <i class="fab fa-youtube"></i>
                                         </a>
</div>

		                </div>
		            </div>
		        </div>
		        <!--Footer Top Area End-->
		        <!--Footer Bottom Area Start-->
		        <div class="footer-bottom-area pt-20 pb-20">
		            <div class="container text-center">
		               <p><span>&copy;</span> Copyright, 2024 All right reserved by <a href="index.php">Lawpoint</a></p>
		            </div>
		        </div>
		        <!--Footer Bottom Area End-->
		    </div>
		</footer>
		<!--Footer Area End-->
	</div>
    
    <!--All Js Here-->
    
	<!--Jquery 1.12.4-->
	<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<!--Waypoints-->
	<script src="js/waypoints.min.js"></script>
	<!--Counterup-->
	<script src="js/jquery.counterup.min.js"></script>
	<!--Carousel-->
	<script src="js/owl.carousel.min.js"></script>
	<!--Meanmenu-->
	<script src="js/jquery.meanmenu.min.js"></script>
	<!--Instafeed-->
	<script src="js/instafeed.min.js"></script>
	<!--Datepicker-->
	<script src="js/jquery.datepicker.min.js"></script>
	<!--Calendar-->
	<script src="js/zabuto-calendar.min.js"></script>
	<!--ScrollUp-->
	<script src="js/jquery.scrollUp.min.js"></script>
	<!--Wow-->
	<script src="js/wow.min.js"></script>
	<!--Venobox-->
	<script src="js/venobox.min.js"></script>
	<!--Popper-->
	<script src="js/popper.min.js"></script>
	<!--Bootstrap-->
	<script src="js/bootstrap.min.js"></script>
	<!--Plugins-->
	<script src="js/plugins.js"></script>
	<!--Main Js-->
	<script src="js/main.js"></script>
	
</body>
</html>


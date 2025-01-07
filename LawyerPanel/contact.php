<?php
include("header.php");
include("../Admin/connection.php");



if (isset($_POST['sent_btn'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $contact = $_POST['phone'];
    $message = $_POST['message'];

    if (empty($name) || empty($email) || empty($subject) || empty($contact) || empty($message)) {
        echo "All fields are required.";
        exit;
    }

    $insert_query = "INSERT INTO `lawyer_contact_request` (`name`, `email`, `contact`,  `subject`, `message`) 
                     VALUES ('$name', '$email', '$contact', '$subject',  '$message')";

    $done = mysqli_query($connect, $insert_query);

   
    if ($done) {
        echo "<script>
        alert('Thank you!');
        window.location.href = 'contact.php';
        </script>";
    } else {
        echo "Error: " . mysqli_error($connect);
    }
}
?>

<div class="page-banner-area bg-img-3 pt-95 pb-90">
		    <div class="container">
		        <div class="row">
		            <div class="page-banner-content col-12 text-center">
                        <h2>Contact us</h2>
                        <p>we are dedicated to providing expert legal services with a focus on achieving the best outcomes for our clients. Our experienced team of attorneys specializes in a wide range of practice areas, including [list key practice areas, such as family law, criminal defense, corporate law, etc.]. Whether you're navigating complex legal challenges or seeking professional advice, we are here to guide you every step of the way.</p>
		                
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Page Banner Area End-->
		<!--Contact Us Area Start-->
		<div class="contact-us-area pt-120">
		    <div class="container">
		        <div class="row">
                    <!--Contact Information Start--> 
                    <div class="col-md-5 contact-address">
                        <div class="contact-information">
                            <ul>
                                <li>
                                    <h5>Address</h5>
                                    <p>256, Centerl Town, Main Street North Nazimabad, Karachi</p>
                                </li>
                                <li>
                                    <h5>Phone</h5>
                                    <p><a href="tel:+923111234567">+92311 1234567</a><br>
                                       
                                    </p>
                                </li>
                                <li>
                                    <h5>Web</h5>
                                    <p><a href="#">info@yourweb.com</a>
                                        <a href="#">www.yourweb.com</a>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--Contact Information End--> 
                    <!--Contact Form Start--> 
		            <div class="col-md-7">
		                <div class="contact-form">
		                    <div class="contact-form-title">
		                        <h3>Get in Touch </h3>Our approach focuses on making an impact that resonates deeply with our clients, offering personalized service and attention that leaves a lasting impression.
		                        <p> </p>
		                    </div>
		                    <form id="" action="" method="POST">
		                        <div class="row">
		                            <div class="col-md-6">
		                                <div class="single-input">
		                                    <input name="name" placeholder="Name" type="text">
		                                </div>
		                            </div>
		                            <div class="col-md-6">
		                                <div class="single-input">
		                                    <input name="email" placeholder="E-mail" type="email">
		                                </div>
		                            </div>
		                            <div class="col-md-6">
		                                <div class="single-input">
		                                    <input name="phone" placeholder="Phone" type="text">
		                                </div>
		                            </div>
		                            <div class="col-md-6">
		                                <div class="single-input">
		                                    <input name="subject" placeholder="Subject" type="text">
		                                </div>
		                            </div>
		                            <div class="col-md-12">
		                                <div class="single-input">
		                                    <textarea name="message" cols="10" rows="4" placeholder="Message"></textarea>
		                                </div>
		                            </div>
		                            <div class="col-md-12">
		                                <div class="single-input">
		                                    <button class="btn btn-dark sent_btn" name="sent_btn" type="submit">Submit</button>
		                                </div>
		                            </div>
		                        </div>
		                    </form>
		                </div>
		            </div>
		            <!--Contact Form End-->
		        </div>
		    </div>
		</div>
		<!--Contact Us Area End-->
	
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--Brand Area End-->

<?php
include("footer.php")
?>
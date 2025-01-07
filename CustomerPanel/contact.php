<?php
include("header.php");
include("../Admin/connection.php");
?>
<?php
if (isset($_POST['btn'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $contact = $_POST['contact'];
    $message = $_POST['message'];

    if (empty($name) || empty($email) || empty($subject) || empty($contact) || empty($message)) {
        echo "All fields are required.";
        exit;
    }

    $insert_query = "INSERT INTO `contact_form` (`name`, `email`, `subject`, `contact`, `message`) 
                     VALUES ('$name', '$email', '$subject', '$contact', '$message')";

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


            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Contact Us</h2>
                        </div>
                        <div class="col-12">
                            <a href="index.php">Home</a>
                            <a href="contact.php">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->
 <!-- Contact Start -->
 <div class="contact">
                <div class="container">
                    <div class="section-header">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-info">
                                <div class="contact-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="contact-text">
                                        <h2>Location</h2>
                                        <p>123 Street, karachi, pakistan</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="fa fa-phone-alt"></i>
                                    <div class="contact-text">
                                        <h2>Phone</h2>                         
                                        <p> <a href="tel:03152416541">+923152416441</a></p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="fa fa-envelope"></i>
                                    <div class="contact-text">
                                        <h2>Email</h2>
                                        <p> <a href="mailto:farwasadaqat8@gmail.com">lawpoint@gmail.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-form">
                            <div class="contact-form">
    <form action="contact.php" method="POST">
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required="required" />
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Your Email" required="required" />
        </div>
        <div class="form-group">
            <input type="text" name="subject" class="form-control" placeholder="Subject" required="required" />
        </div>
        <div class="form-group">
            <input type="text" name="contact" class="form-control" placeholder="Number" required="required" />
        </div>
        <div class="form-group">
            <textarea name="message" class="form-control" placeholder="Message" required="required"></textarea>
        </div>
        
        <div>
            <button class="btn" name="btn" type="submit">Send Message</button>
        </div>
    </form>
</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact End -->


















<?php
include("footer.php")
?>
<?php
session_start();
include("header.php");
include("../Admin/connection.php");

$lawyer_id = $_SESSION['lawyer_id'] ?? null;

$select = "SELECT l.* , c.category_id , c.category_name
FROM `lawyers` l
INNER JOIN `categories` c
ON l.specialization = c.category_id
WHERE lawyer_id = '$lawyer_id'";
$query = mysqli_query($connect, $select);
$lawyer = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lawyer Profile</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Profile Area */
        .profile-area {
            padding: 60px 0;
            background: linear-gradient(120deg, #d0b16f, #b99044, #9e7c34);
            color: #fff;
            border-radius: 15px;
            margin: 30px 0;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .profile-area:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }

        .profile-image img {
            width: 100%;
            max-width: 300px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .profile-image img:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .profile-details {
            padding: 20px;
        }

        .profile-details h1, .profile-details h2 {
            margin: 0;
        }

        .profile-details h1 {
            font-size: 2.8rem;
            margin-bottom: 30px; /* Increased space between label and name */
            color: #fff;
            font-weight: 600;
        }

        .profile-details h2 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: #f9f9f9;
            font-weight: 500;
        }

        .profile-details p {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #ddd;
        }

        .detail-item {
            margin-bottom: 25px; /* Increased space between detail items */
        }

        .label {
            display: inline-block;
            font-size: 1rem;
            font-weight: bold;
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            text-transform: uppercase;
            margin-bottom: 10px; /* Added margin-bottom to provide space */
        }

        /* Why Choose Me Section */
        .why-choose-me {
            padding: 50px 0;
            text-align: center;
            background: #fff;
            margin-top: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .why-choose-me:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }

        .why-choose-me h2 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .why-choose-me p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            color: #666;
        }

        .service-item {
            padding: 20px;
            background: #f8f9fa;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 20px;
        }

        .service-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        }

        .service-item h3 {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 10px;
            font-weight: 500;
        }

        .service-item p {
            font-size: 1rem;
            color: #555;
        }

        /* Icons for service items */
        .service-item i {
            font-size: 2.5rem;
            color:   #9e7c34;
            margin-bottom: 15px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .profile-area {
                padding: 40px 0;
            }

            .profile-image img {
                max-width: 250px;
            }

            .profile-details h1 {
                font-size: 2.4rem;
            }

            .service-item {
                margin-bottom: 15px;
            }

            .why-choose-me h2 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Lawyer Profile Section -->
    <div class="profile-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="profile-image">
                        <a href="profile.php">
                            <img src="../Admin/lawyer_pics/<?php echo $lawyer['profile_image']; ?>" alt="Profile Picture">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-details">
                        <div class="detail-item">
                            <span class="label">Name:</span>
                            <h1><?php echo htmlspecialchars($lawyer['lawyer_name']); ?></h1>
                        </div>
                        <div class="detail-item">
                            <span class="label">Specialization:</span>
                            <h2><?php echo htmlspecialchars($lawyer['category_name']); ?></h2>
                        </div>
                        <div class="detail-item">
                            <span class="label">Description:</span>
                            <p><?php echo htmlspecialchars($lawyer['description']); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Me Section -->
    <div class="why-choose-me">
        <div class="container">
            <h2>Why Choose Me?</h2>
            <p>Here are some reasons why I excel in <strong><?php echo $lawyer['category_name']; ?></strong> Services:</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-item">
                        <i class="fas fa-handshake"></i>
                        <h3>Personalized Service</h3>
                        <p>I provide customized solutions tailored to your legal needs.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <i class="fas fa-cogs"></i>
                        <h3>Proven Expertise</h3>
                        <p>Extensive experience in handling <strong><?php echo $lawyer['category_name']; ?></strong> cases.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <i class="fas fa-chart-line"></i>
                        <h3>Result-Oriented</h3>
                        <p>Focused on achieving the best possible outcomes for my clients.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
include("footer.php");
?>







<!-- <div class="row">
<?php foreach ($services as $service) { ?>
                    <div class="col-md-6">
                        <div class="service-item">
                            <h3><?php echo htmlspecialchars($service['service_name']); ?></h3>
                            <p><?php echo htmlspecialchars($service['description']); ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div> -->
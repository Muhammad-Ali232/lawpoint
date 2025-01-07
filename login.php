<?php
session_start();
ob_start();
include("Admin/connection.php");

if(isset($_POST['login_btn'])){

    $name =  $_POST['name'];
    $email = $_POST['email'];
    $pass =  $_POST['password'];


$check =  "SELECT * FROM `customers` WHERE `customer_name` = '$name' AND `email` = '$email' AND `role_id` = '2'";
$result_customer = mysqli_query($connect, $check);


$check2 = "SELECT * FROM `lawyers` WHERE `lawyer_name` = '$name' AND `email` = '$email' AND `role_id` = '3'";
$result_lawyer = mysqli_query($connect , $check2);

$check3 = "SELECT * FROM `admin_users` WHERE `name` = '$name' AND `email` = '$email' AND `role_id` = '1'";
$result_admin = mysqli_query($connect , $check3);

if (mysqli_num_rows($result_customer) === 1) {
    $fetch_customer = mysqli_fetch_assoc($result_customer);

    

    $_SESSION['customer_id'] = $fetch_customer['customer_id'];
    $_SESSION['customer_name'] = $fetch_customer['customer_name'];
    $_SESSION['customer_pic'] = $fetch_customer['customer_pic'];
    $_SESSION['customer_email'] = $fetch_customer['email'];
    $_SESSION['customer_role_id'] = $fetch_customer['role_id'];

    if (password_verify($pass , $fetch_customer['password'])) {
        header("Location: CustomerPanel/index.php");
        exit();
    }

} 

else if (mysqli_num_rows($result_lawyer) === 1) {
    $fetch_lawyer = mysqli_fetch_assoc($result_lawyer);

    $_SESSION['lawyer_id'] = $fetch_lawyer['lawyer_id'];
    $_SESSION['lawyer_name'] = $fetch_lawyer['lawyer_name'];
    $_SESSION['lawyer_email'] = $fetch_lawyer['email'];
    $_SESSION['lawyer_specialization'] = $fetch_lawyer['specialization'];
    $_SESSION['lawyer_image'] = $fetch_lawyer['profile_image'];
    $_SESSION['lawyer_contact_number'] = $fetch_lawyer['contact_number'];
    $_SESSION['lawyer_role_id'] = $fetch_lawyer['role_id'];

    if (password_verify($pass , $fetch_lawyer['password'])) {
        header("Location: LawyerPanel/index.php");
        exit();
    }
}  

else if (mysqli_num_rows($result_admin) === 1) {
    $fetch_admin = mysqli_fetch_assoc($result_admin);

    $_SESSION['id'] = $fetch_admin['id'];
    $_SESSION['name'] = $fetch_admin['name'];
    $_SESSION['email'] = $fetch_admin['email'];
    $_SESSION['image'] = $fetch_admin['image'];
    $_SESSION['role_id'] = $fetch_admin['role_id'];

    if ($pass === $fetch_admin['password']) {
        header("Location: Admin/index.php");
        exit();
    }
    else if (password_verify($pass , $fetch_admin['password'])){
        header("Location: Admin/index.php");
        exit();
    }
} 

else {
    echo "<script>alert('Invalid username, email, or password. Please try again.');</script>";
}

ob_end_flush();
}; 
?>

<!doctype html>
<html lang="en">

 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LawPoint Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Admin/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="Admin/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="Admin/assets/libs/css/style.css">
    <link rel="stylesheet" href="Admin/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">

    <style>
        body{
            background: linear-gradient(to right,rgb(30, 68, 75),rgb(30, 45, 48),rgb(2, 20, 24));
        }
    </style>
</head>

<body>
<div class="dashboard-main-wrapper">
<div class="dashboard-wrapper">

            <div class="container-fluid dashboard-content">
            <h1 style="color: lightblue; font-size: 50px; font-family: cooper; padding-left: 250px;">LAWPOINT.</h1>
                <div class="row">
                       <div class="col-xl-10 col-lg-8 col-md-10 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">LOGIN.</h5>
                                <div class="card-body">
                                    <form action="" method="POST" id="basicform" data-parsley-validate="">
                                        <div class="form-group">
                                            <label for="inputUserName">User Name</label>
                                            <input id="inputUserName" type="text" name="name" data-parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail">Email address</label>
                                            <input id="inputEmail" type="email" name="email" data-parsley-trigger="change" required="" placeholder="Enter email" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword" >Password</label>
                                            <input id="inputPassword" type="password" name="password" placeholder="Password"  class="form-control">
                                         </div>
                                         <div class="d-flex align-items-center justify-content-between mb-4">
                                            <div class="form-check">
                                             <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="showPass()">
                                             <label class="form-check-label" for="exampleCheck1">Show Password</label>
                                            </div>
                                        </div>
                                         <div class="d-flex flex-column align-items-center">
                                          <button type="submit" name="login_btn" class="btn btn-dark w-50 mb-3">Login</button>
                                           <p class="text-center mb-0">Don't have an Account? <a href="signup.php">Sign Up</a></p>
                                        </div>   
                                    </form>
                                </div>
                            </div>
                        </div>

<script src="..s/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="Admin/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="Admin/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="Admin/assets/vendor/parsley/parsley.js"></script>
    <script src="Admin/assets/libs/js/main-js.js"></script>
    <script>
    function showPass(){
        var inputPassword = document.getElementById('inputPassword');
        if(inputPassword.type === "password"){
            inputPassword.type = "text";
        }
    else{
            inputPassword.type = "password";
        }
    }
</script>
</body>

 
</html>


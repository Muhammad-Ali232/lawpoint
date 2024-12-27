<?php
ob_start();
include("Admin/connection.php");

if(isset($_POST['login_btn'])){

    $name =  $_POST['name'];
    $email = $_POST['email'];
    $pass =  $_POST['password'];

   $check =  "SELECT * FROM `customers` WHERE `customer_name` = '$name' AND `email` = '$email' AND `password` = '$pass'";
   $result_customer = mysqli_query($connect, $check);
   if (!$result_customer) {
    die("Customer Query Failed: " . mysqli_error($connect));
}

$check2 = "SELECT * FROM lawyers WHERE `lawyer_name` = '$name' AND `email` = '$email' AND `password` = '$pass'";
$result_lawyer = mysqli_query($connect , $check2);

if (mysqli_num_rows($result_customer) === 1) {
    $fetch = mysqli_fetch_assoc($result_customer);

    if ($fetch['role_id'] == 2) {
        header("Location: concept-master/index.html");
        exit();
    }
} elseif (mysqli_num_rows($result_lawyer) === 1) {
    $fetch = mysqli_fetch_assoc($result_lawyer);

    if ($fetch['role_id'] == 3) {
        header("Location: Admin/index.php");
        exit();
    }
} else {
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
            <h1 style="color: lightblue; font-size: 50px; font-family: cooper; padding-left: 200px;">LAWPOINT.</h1>
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


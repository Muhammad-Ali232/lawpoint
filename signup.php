<?php
include("Admin/connection.php");

$c_sel = "SELECT * FROM `categories`";
$c_row = mysqli_query($connect, $c_sel);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LawPoint Signup</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body{
            background: linear-gradient(to right,rgb(30, 68, 75),rgb(30, 45, 48),rgb(2, 20, 24));
    }
    .form-container {
      margin-top: 50px;
    }
    .hidden {
      display: none;
    }
  </style>
</head>
<body>
  <div class="container form-container">
    <h2 class="text-center mb-4" style="color: lightblue; font-size: 50px; font-family: cooper;">Signup to LawPoint</h2>
    <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
      <label for="userType" class="form-label" style="color: lightblue; font-size: 20px;">Select User Type:</label>
      <select class="form-select"  style="width: 50%; "  id="userType">
        <option value="" selected disabled>Select</option>
        <option value="customer">Customer</option>
        <option value="lawyer">Lawyer</option>
      </select>
    </div>

    <!-- Customer Form -->
    <form id="customerForm" class="hidden" method="POST"  enctype="multipart/form-data">
      <h3 style="color: lightblue; text-align: center;">Customer Signup</h3>
      <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
        <label for="customerName" class="form-label" style="color: lightblue; font-size: 20px;">Full Name</label>
        <input style="width: 50%; " type="text" class="form-control" id="customerName" name="customerName" placeholder="Enter your name" REQUIRED>
      </div>
      <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
      <label class="mb-2"  style="color: lightblue; font-size: 20px;">Gender</label>
      <select style="width: 50%; " name="gender" id="" class="form-select" REQUIRED>
            <option disabled selected>Select</option>
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select>
      </div>
      <div class="mb-3 d-flex flex-column justify-content-center align-items-center">>
        <label for="dob" class="form-label" style="color: lightblue; font-size: 20px;">Date Of Birth</label>
        <input style="width: 50%; " type="date" class="form-control" id="dob" name="dob"  REQUIRED>
      </div>
      <div class="mb-3 d-flex flex-column justify-content-center align-items-center">>
        <label for="customerEmail" class="form-label" style="color: lightblue; font-size: 20px;">Email</label>
        <input style="width: 50%; " type="email" class="form-control" id="customerEmail" name="customerEmail" placeholder="Enter your email"REQUIRED>
      </div>
      <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
        <label for="customer_img" class="form-label" style="color: lightblue; font-size: 20px;">Profile Image &nbsp<span style="color: lightblue; font-size:15px;">(Optional)</span></label>
        <input style="width: 50%; " type="file" class="form-control" name="customer_img" id="customer_img">
      </div>
      <div class="mb-3 d-flex flex-column justify-content-center align-items-center">>
        <label for="customerPassword" class="form-label" style="color: lightblue; font-size: 20px;">Password</label>
        <input style="width: 50%; " type="password" class="form-control" id="customerPassword" name="customerPassword" placeholder="Enter your password" REQUIRED>
      </div>
       <div class="d-flex flex-column align-items-center justify-content-center mb-3">
          <div class="form-check">
             <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="toggleCustomerPassword()">
             <label class="form-check-label" for="exampleCheck1"  style="color: lightblue; font-size: 15px;">Show Password</label>
         </div>
      </div>
      <div  class="d-flex justify-content-center">
      <button type="submit" class="btn btn-dark" name="signup_btn1">Sign Up</button>
      </div>
    </form>


  

    <!-- Lawyer Form -->
    <form id="lawyerForm" class="hidden" method="POST" enctype="multipart/form-data">
      <h3 style="color: lightblue; text-align: center;">Lawyer Signup</h3>
      <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
        <label for="lawyerName" class="form-label" style="color: lightblue; font-size: 20px;">Full Name</label>
        <input style="width: 50%; " type="text" class="form-control" name="lawyerName" id="lawyerName" placeholder="Enter your name">
      </div>

      <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
      <label class="mb-2"  style="color: lightblue; font-size: 20px;">Select Service Category</label>
        <!-- col-sm-12 col-xl-6 -->
      
      <select name="cat_name" class="form-select" style="width: 50%; " aria-label="Default select example">
          <option selected disabled >Select Service Category</option>
          <?php
           while($option = mysqli_fetch_assoc($c_row)){ ?>
          <option value=" <?php echo $option['category_id']?> "> <?php echo $option['category_name']?> </option>
            <?php   }
            ?>

      </select></div>
      <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
        <label for="lawyer_experience" class="form-label" style="color: lightblue; font-size: 20px;">Experience Years</label>
        <input style="width: 50%; " type="text" class="form-control" name="lawyer_experience" id="lawyer_experience" placeholder="Enter your years of experience">
      </div>
      <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
        <label for="lawyer_img" class="form-label" style="color: lightblue; font-size: 20px;">Profile Image</label>
        <input style="width: 50%; " type="file" class="form-control" name="lawyer_img" id="lawyer_img">
      </div>
      <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
        <label for="lawyer_desc" class="form-label" style="color: lightblue; font-size: 20px;">Description</label>
        <input style="width: 50%; " type="text" class="form-control" name="lawyer_desc" id="lawyer_desc" placeholder="Enter your description">
      </div>
      <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
        <label for="lawyer_contact" class="form-label" style="color: lightblue; font-size: 20px;">Contact Number</label>
        <input style="width: 50%; " type="number" class="form-control" name="lawyer_contact" id="lawyer_contact" placeholder="Enter your contact number" required pattern="\d+" min="1000000000" max="9999999999">
      </div>
      <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
        <label for="lawyer_email" class="form-label" style="color: lightblue; font-size: 20px;">Email</label>
        <input style="width: 50%; " type="email" class="form-control" name="lawyer_email" id="lawyer_email" placeholder="Enter your email">
      </div>
      <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
        <label for="lawyerPassword" class="form-label" style="color: lightblue; font-size: 20px;">Password</label>
        <input style="width: 50%; " type="password" class="form-control" name="lawyerPassword" id="lawyerPassword" placeholder="Enter your password">
      </div>
      <div class="d-flex flex-column align-items-center justify-content-center mb-3">
             <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="toggleLawyerPassword()">
                <label class="form-check-label" for="exampleCheck1"  style="color: lightblue; font-size: 15px;">Show Password</label>
            </div>
       </div>
       <div  class="d-flex justify-content-center">
      <button type="submit" class="btn btn-dark" name="signup_btn2">Sign Up</button>
      </div>
    </form>
  </div>


  <!-- PHP WORK -->
  
  <?php 
if(isset($_POST['signup_btn1'])){
    $customerName = $_POST['customerName'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $customerEmail = $_POST['customerEmail'];
    $customerPic = $_FILES['customer_img'];
    $customerPassword = $_POST['customerPassword'];
    $role_id = 2;
    $encPass = password_hash($customerPassword, PASSWORD_BCRYPT);

    $img_name = $customerPic['name'];
    $img_tmpname = $customerPic['tmp_name'];
    $img_size = $customerPic['size'];
    $img_type = $customerPic['type'];

    $customerimage = "NO Image";

    $path = 'Admin/customer_pics/' . $img_name;

    $img = move_uploaded_file($img_tmpname, $path);

    $sel = "SELECT * FROM customers WHERE customer_name = '$customerName'";
    $q = mysqli_query($connect, $sel);
    $row_count = mysqli_num_rows($q);

    if($row_count > 0){
       echo "<script>
        alert('Username already Exist!');
        </script>";
    }
    
    else{
          if($img){
    $insert = "INSERT INTO `customers`(`customer_name`, `gender`, `date_of_birth`, `email`, `customer_pic` , `password`, `role_id`) 
    VALUES ('$customerName','$gender','$dob','$customerEmail','$img_name','$encPass','$role_id')";
    $done = mysqli_query($connect, $insert);


    if($done){
      echo "<script>
        alert('Account Created.');
        window.location.href = 'CustomerPanel/index.php';
        </script>";
    }
  }
  else{
    $insert = "INSERT INTO `customers`(`customer_name`, `gender`, `date_of_birth`, `email`, `customer_pic` , `password`, `role_id`) 
    VALUES ('$customerName','$gender','$dob','$customerEmail','$customerimage','$encPass','$role_id')";
    $done = mysqli_query($connect, $insert);


    if($done){
      echo "<script>
        alert('Account Created.');
        window.location.href = 'CustomerPanel/index.php';
        </script>";
    }
  }
  }
  };

if(isset($_POST['signup_btn2'])){

  $lawyerName = $_POST['lawyerName'];
  $cat_name = $_POST['cat_name'];
  $lawyer_experience = $_POST['lawyer_experience'];
  $lawyer_desc = $_POST['lawyer_desc'];
  $lawyer_contact = $_POST['lawyer_contact'];
  $lawyer_email = $_POST['lawyer_email'];
  $lawyerPassword = $_POST['lawyerPassword'];


  $lawyer_img = $_FILES['lawyer_img'];
  $img_name = $lawyer_img['name'];
  $img_tmpname = $lawyer_img['tmp_name'];
  $img_size = $lawyer_img['size'];
  $img_type = $lawyer_img['type'];

  $path = 'Admin/lawyer_pics/' . $img_name;

  move_uploaded_file($img_tmpname, $path);


  $status = "Pending";


  $encPass = password_hash($lawyerPassword, PASSWORD_BCRYPT);

    $sel = "SELECT * FROM lawyers WHERE lawyer_name = '$lawyerName'";
    $q = mysqli_query($connect, $sel);
    $row_count = mysqli_num_rows($q);

    if($row_count > 0){
       echo "<script>
        alert('Username already Exist!');
        </script>";
    }

    else{
  
 $pend = "INSERT INTO pending_requests (name, email, specialization, experience_years, profile_image, contact_number, `description`, `password`, `status`)
   VALUES ( '$lawyerName' , '$lawyer_email' , '$cat_name' , '$lawyer_experience' , '$img_name', '$lawyer_contact', '$lawyer_desc', '$encPass', '$status')";

   $a = mysqli_query($connect , $pend);

   if($a){
    echo "
    <script>
    alert('Your Request has been send to the Admin for approval.');
    window.location.href = 'CustomerPanel/index.php';
    </script>";
   }
  }
};

?>


  <script>
    document.getElementById('userType').addEventListener('change', function () {
      const userType = this.value;
      const customerForm = document.getElementById('customerForm');
      const lawyerForm = document.getElementById('lawyerForm');

      if (userType === 'customer') {
        customerForm.classList.remove('hidden');
        lawyerForm.classList.add('hidden');
      } 
      else if (userType === 'lawyer') {
        lawyerForm.classList.remove('hidden');
        customerForm.classList.add('hidden');
      }
      else {
        customerForm.classList.add('hidden');
        lawyerForm.classList.add('hidden');
      }
    });

    

  </script>

<script>
  function toggleCustomerPassword() {
    var customerPassword = document.getElementById('customerPassword');
    if (customerPassword.type === 'password') {
      customerPassword.type = 'text';
    } else {
      customerPassword.type = 'password';
    }
  }
</script>

<script>

    function toggleLawyerPassword(){
        var lawyerPassword = document.getElementById('lawyerPassword');
        if(lawyerPassword.type === 'password'){
            lawyerPassword.type = 'text';
        }
        else{
            lawyerPassword.type = 'password';
        }
    }
</script>

</body>
</html>

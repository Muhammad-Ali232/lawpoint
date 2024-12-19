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
    <div class="mb-3">
      <label for="userType" class="form-label" style="color: lightblue; font-size: 20px;">Select User Type:</label>
      <select class="form-select" id="userType">
        <option value="" selected disabled>Select</option>
        <option value="customer">Customer</option>
        <option value="lawyer">Lawyer</option>
      </select>
    </div>

    <!-- Customer Form -->
    <form id="customerForm" class="hidden">
      <h3 style="color: lightblue;">Customer Signup</h3>
      <div class="mb-3">
        <label for="customerName" class="form-label" style="color: lightblue; font-size: 20px;">Full Name</label>
        <input type="text" class="form-control" id="customerName" placeholder="Enter your name">
      </div>
      <div class="mb-3">
        <label for="customerEmail" class="form-label" style="color: lightblue; font-size: 20px;">Email</label>
        <input type="email" class="form-control" id="customerEmail" placeholder="Enter your email">
      </div>
      <div class="mb-3">
        <label for="customerPassword" class="form-label" style="color: lightblue; font-size: 20px;">Password</label>
        <input type="password" class="form-control" id="customerPassword" placeholder="Enter your password">
      </div>
       <div class="d-flex align-items-center justify-content-between mb-4">
          <div class="form-check">
             <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="toggleCustomerPassword()">
             <label class="form-check-label" for="exampleCheck1">Show Password</label>
         </div>
      </div>
      <button type="submit" class="btn btn-dark">Sign Up</button>
    </form>

  

    <!-- Lawyer Form -->
    <form id="lawyerForm" class="hidden">
      <h3 style="color: lightblue;">Lawyer Signup</h3>
      <div class="mb-3">
        <label for="lawyerName" class="form-label" style="color: lightblue; font-size: 20px;">Full Name</label>
        <input type="text" class="form-control" id="lawyerName" placeholder="Enter your name">
      </div>

      <div class="mb-3">
      <label class="mb-4"  style="color: lightblue; font-size: 20px;">Select Service Category</label>
        <!-- col-sm-12 col-xl-6 -->
      <div class="bg-light rounded">
      <select name="b_id" class="form-select mb-3" aria-label="Default select example">
          <option selected>Select Brand</option>
 
                    

      </select></div>
      <div class="mb-3">
        <label for="lawyer_name" class="form-label" style="color: lightblue; font-size: 20px;">Experience Years</label>
        <input type="text" class="form-control" id="lawyer_name" placeholder="Enter your name">
      </div>
      <div class="mb-3">
        <label for="lawyer_img" class="form-label" style="color: lightblue; font-size: 20px;">Profile Image</label>
        <input type="file" class="form-control" id="lawyer_img" placeholder="Enter your name">
      </div>
      <div class="mb-3">
        <label for="lawyer_desc" class="form-label" style="color: lightblue; font-size: 20px;">Description</label>
        <input type="text" class="form-control" id="lawyer_desc" placeholder="Enter your name">
      </div>
      <div class="mb-3">
        <label for="lawyer_contact" class="form-label" style="color: lightblue; font-size: 20px;">Contact Number</label>
        <input type="text" class="form-control" id="lawyer_contact" placeholder="Enter your name">
      </div>
      <div class="mb-3">
        <label for="lawyer_email" class="form-label" style="color: lightblue; font-size: 20px;">Email</label>
        <input type="email" class="form-control" id="lawyer_email" placeholder="Enter your email">
      </div>
      <div class="mb-3">
        <label for="lawyerPassword" class="form-label" style="color: lightblue; font-size: 20px;">Password</label>
        <input type="password" class="form-control" id="lawyerPassword" placeholder="Enter your password">
      </div>
      <div class="d-flex align-items-center justify-content-between mb-4">
             <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="toggleLawyerPassword()">
                <label class="form-check-label" for="exampleCheck1">Show Password</label>
            </div>
       </div>
      <button type="submit" class="btn btn-dark">Sign Up</button>
    </form>
  </div>

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

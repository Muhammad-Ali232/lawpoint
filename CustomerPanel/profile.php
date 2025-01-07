<?php
session_start();
include("connection.php");
include("header.php");

$cust_id = $_SESSION['customer_id'];

$select = "SELECT * FROM `customers` WHERE customer_id = '$cust_id'";
$query = mysqli_query($connect , $select);
$fetch = mysqli_fetch_assoc($query);

?>


<div class="row justify-content-center">
    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
        <div class="card shadow-lg border-0">
            <h5 class="card-header text-center bg-dark text-light" style="font-family: 'EB Garamond', serif;">Update Profile</h5>
            <div class="card-body" style="background: #f8f9fa;">
                <form method="POST" enctype="multipart/form-data">
                    <!-- Name Field -->
                    <div class="form-group mb-4">
                        <label for="inputName" class="form-label" style="color: #121518;">Your Name</label>
                        <input value="<?php echo $fetch['customer_name']; ?>" id="inputName" type="text" 
                               class="form-control shadow-sm" name="name" placeholder="Enter your name">
                    </div>
                    <!-- Email Field -->
                    <div class="form-group mb-4">
                        <label for="inputEmail" class="form-label" style="color: #121518;">Your Email</label>
                        <input value="<?php echo $fetch['email']; ?>" id="inputEmail" type="email" 
                               class="form-control shadow-sm" name="email" placeholder="Enter your email">
                    </div>
                    <!-- Image Field -->
                    <div class="form-group mb-4">
                        <label for="inputImage" class="form-label" style="color: #121518;">Your Picture</label>
                        
                        <?php if (!empty($fetch['customer_pic'])) { ?>
                            <input id="inputImage" type="file" value="<?php echo ($fetch['customer_pic']); ?>" class="form-control shadow-sm" name="image">
                            <div class="mt-2">
                                <img src="../Admin/customer_pics/<?php echo ($fetch['customer_pic']); ?>" 
                                     alt="Existing Profile Picture" 
                                     style="max-width: 150px; height: auto; border: 1px solid #ccc; border-radius: 5px;">
                            </div>
                        <?php } else{?>
                        <input id="inputImage" type="file" class="form-control shadow-sm" name="image">
                        <?php } ?>
                    </div>
                    <!-- Password Field -->
                    <div class="form-group mb-4">
                        <label for="inputPassword" class="form-label" style="color: #121518;">Your Password</label>
                        <input value="<?php echo $fetch['password']; ?>" id="inputPassword" 
                               type="password" class="form-control shadow-sm" name="password" placeholder="Enter your password">
                    </div>
                    <!-- Show Password Checkbox -->
                    <div class="form-check mb-4">
                        <input type="checkbox" class="form-check-input" id="showPassword" onclick="showPass()">
                        <label class="form-check-label" for="showPassword" style="color: #666666;">Show Password</label>
                    </div>
                    <!-- Update Button -->
                    <button type="submit" class="btn btn-dark w-100" style="background: #aa9166; color: #ffffff; border: none;" name="update_btn">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

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

<?php 
                if(isset($_POST['update_btn'])){
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $pass = $_POST['password'];
                    $image = $_FILES['image'];
                    $admin_image ="NO Image";
                    $encPass = password_hash($pass, PASSWORD_BCRYPT);

                    $img_name = $image['name'];
                    $img_tmpname = $image['tmp_name'];
                    $img_size = $image['size'];
                    $img_type = $image['type'];

                    $path = 'admin_user_pics/' . $img_name;

                    $img = move_uploaded_file($img_tmpname, $path);
                    
                 if($img){
                $updated = "UPDATE `admin_users` SET `name` = '$name' , `email`='$email', `image`='$img_name', `password`='$encPass'  WHERE id = '$admin_id'";
                $done = mysqli_query($connect, $updated);

                   
                    if($done){
                        echo "<script>
                        alert('Record Updated!');
                        window.location.href = 'index.php';
                        </script>";
                       }
                   
                }
                else{
                    $updated = "UPDATE `admin_users` SET `name` = '$name' , `email`='$email', `image`='$admin_image', `password`='$pass'  WHERE id = '$admin_id'";
                $done = mysqli_query($connect, $updated);

                   
                    if($done){
                        echo "<script>
                        alert('Record Updated!');
                        window.location.href = 'index.php';
                        </script>";
                       }
                }
            }

           
           ?>


<?php
include("footer.php");
?>
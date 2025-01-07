<?php
session_start();
include("connection.php");
include("header.php");

$admin_id = $_SESSION['id'];

$select = "SELECT * FROM `admin_users` WHERE id = '$admin_id'";
$query = mysqli_query($connect , $select);
$fetch = mysqli_fetch_assoc($query);

?>



                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                               
                                <div class="card">
                                    <h5 class="card-header">Update Profile</h5>
                                    <div class="card-body">
                                        <form method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Your Name</label>
                                                <input value="<?php echo $fetch['name']; ?>" id="inputText3" type="text" class="form-control" name="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Your Email</label>
                                                <input value="<?php echo $fetch['email']; ?>" id="inputText3" type="text" class="form-control" name="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Your Picture</label>
                                                <input value="<?php echo $fetch['image']; ?>" id="inputText3" type="file" class="form-control" name="image">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword" class="col-form-label">Your Password</label>
                                                <input value="<?php echo $fetch['password']; ?>" id="inputPassword" type="password" class="form-control" name="password">
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-4">
                                            <div class="form-check">
                                             <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="showPass()">
                                             <label class="form-check-label" for="exampleCheck1">Show Password</label>
                                            </div>
                                        </div>
                                            <button type="submit" class="btn btn-primary" name="update_btn">Update</button> 
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
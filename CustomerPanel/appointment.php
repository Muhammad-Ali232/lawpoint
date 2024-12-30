<?php
session_start();

include("header.php");
include("../Admin/connection.php");


$lawyer = "SELECT * FROM lawyers";
$lawyer_row = mysqli_query($connect , $lawyer);

?>

<?php
// appointment.php
if(isset($_POST['add_btn'])){

    $customer_id = $_SESSION['customer_id'];
    $law_name = $_POST['law_name']; 
    $date = $_POST['appointment_date']; 
    $time = $_POST['appointment_time']; 
    $status = "Pending";
   
    // Insert query
    $insert_query = "INSERT INTO `appointments` ( `customer_id` , `lawyer_id` , `appointment_date`, `appointment_time` , `status`)
                      VALUES ('$customer_id','$law_name','$date', '$time' , '$status')";

    $done = mysqli_query($connect, $insert_query);


    if($done){
        echo "<script>
        alert('Thank you! Your Appointment request has been received !');
        window.location.href = 'appointment.php';
        </script>";
       }
}
?>

<style>
        .form-container {
            border: 2px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px #aa9166;;
        }
        .form-container .btn {
            background-color: #aa9166;; 
            color: black;
        }
</style>

 <!-- Form Start -->
 <div class="container-fluid px-4 d-flex justify-content-center align-items-center" style="min-height: 100vh;">
 <div class="row w-100" style="max-width: 600px;">
                <form action="" method="post" enctype="multipart/form-data" class="w-100 form-container">
                    <h1 style="padding-left: 115px;">Appointment Form</h1>
                    <div class="bg-light rounded p-4">
                        <div class="mb-3">
                            <label class="form-label">Lawyer Name</label> <br>
                            <select style="width: 100%;" name="law_name" id="" class="form-control">
                                <option selected disabled >Select Lawyer Name</option>
                            <?php
                                 while($option = mysqli_fetch_assoc($lawyer_row)){ ?>
                                <option value=" <?php echo $option['lawyer_id']?> "> <?php echo $option['lawyer_name']?> </option>
                            <?php   }
                            ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="appointment_date" class="form-label">Appointment Date</label>
                            <input type="date" class="form-control" id="appointment_date" name="appointment_date" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="appointment_time" class="form-label">Appointment Time</label>
                            <input type="time" class="form-control" id="appointment_time" name="appointment_time" aria-describedby="emailHelp">
                        </div>
                        
                        <button type="submit" class="btn" name="add_btn">ADD</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Form End -->

    

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
include("footer.php")
?>

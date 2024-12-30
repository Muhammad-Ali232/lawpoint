<?php
include("header.php");
include("connection.php");
?>

<?php
// appointment.php
if(isset($_POST['add_btn'])){
   
    $date = $_POST['appoinment_date']; 
    $time = $_POST['appoinment_time']; 
   
    // Insert query
    $insert_query = "INSERT INTO `appoinment` ( `appoinment_date`, `appoinment-time`)
                      VALUES ('$date', '$time')";

    $done = mysqli_query($connect, $insert_query);


    if($done){
        echo "<script>
        alert('Thank you! Your Appointment request has been received !');
        window.location.href = 'appoinment.php';
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
 <div class="container-fluid pt-4 px-4 d-flex justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="row g-4 w-100" style="max-width: 500px;">
                <form action="" method="post" enctype="multipart/form-data" class="w-100 form-container">
                    <div class="bg-light rounded h-100 p-4">
                       
                        <div class="mb-3">
                            <label for="appoinment_date" class="form-label">Appointment Date</label>
                            <input type="date" class="form-control" id="appoinment_date" name="appoinment_date" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="appoinment_time" class="form-label">Appointment Time</label>
                            <input type="time" class="form-control" id="appoinment_time" name="appoinment_time" aria-describedby="emailHelp">
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

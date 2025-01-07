<?php
include("../Admin/connection.php");
include("header.php");




if(isset($_GET['cat_id'])){
    $cat_id = $_GET['cat_id'];
    $select = "SELECT l. *, c.category_id , c.category_name
               FROM `lawyers` l
               INNER JOIN `categories` c
               ON l.specialization = c.category_id
               WHERE l.specialization = '$cat_id'";
    $query = mysqli_query($connect, $select);
}
?>



            <div class="team">
                <div class="container">
                    <div class="section-header">
                        <h2>These are Our Lawyers</h2>
                    </div>
                    <div class="row">
                    <?php
                    while($fetch = mysqli_fetch_assoc($query)){ ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <a href="lawyerDetails.php?i=<?php echo $fetch['lawyer_id']?>"><img src="../Admin/lawyer_pics/<?php echo $fetch['profile_image'] ?>" alt="Team Image"></a>
                                </div>
                                <div class="team-text">
                                    <h2><?php echo $fetch['category_name'] ?></h2>
                                
                                    <div class="team-social">
                                    <h2><?php echo $fetch['lawyer_name'] ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    
                </div>
            </div>


<?php
include("footer.php");
?>
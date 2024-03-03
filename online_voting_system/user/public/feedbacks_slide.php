<!-- feedback Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Feedback</h5>
            <h1 class="mb-0">What Our Users Say</h1>
        </div>
        <?php
        include("../../controller/database.php");
        $query_org = "SELECT  `active_id`, `name`, `email`, `ovs_admin_id`, `reply`, `rating`, `address_feedback`, `date`, `reply_date` FROM `feedback` ";
        $insert = mysqli_query($dbcon, $query_org);
        
        ?>
        <!-- </form> -->

        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
            <?php foreach ($insert as $row) { ?>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="../../img/download.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1"><?php echo $row['name']; ?></h4>
                            <small class="text-uppercase"> Date : <?php echo $row['date']; ?> <br> Start: <b> <?php echo $row['rating']; ?> </b></small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        <?php echo $row['address_feedback']; ?>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                    <td><?php echo $row['reply_date']; ?> <br> <?php echo $row['reply']; ?></td>
                    </div>
                </div>
            <?php } ?>
            
        </div>
    </div>
</div>
<!-- feedback End -->
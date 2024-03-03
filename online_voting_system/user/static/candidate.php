<!-- Navbar start -->
<?php include('../navbar_footer/navbar.php') ?>
<!-- Navbar End -->
<?php
// SELECT `id`, `active_id`, `active_org_id`, `official_name`, `famous_name`, `address_publish_photo`, `party`, `post`, `slogan`, `doc_type_party_or_id_proof`, `address_party_or_id_proof`, `address_motive_latter`, `address_poster`, `address_logo`, `address_speech_video`, `address_appeal`, , `created_at`, `updated_at` FROM `candidate` WHERE 1
include("../../controller/database.php");
$user_belong = $_SESSION["user_belong"];
$query_org = "SELECT `official_name`,`active_id`, `famous_name`, `address_publish_photo`,`party` FROM `candidate` WHERE `accepted_by_ID` != 'notAccept' AND `active_org_id` = $user_belong";
$insert = mysqli_query($dbcon, $query_org);
// print_r($insert->fetch_assoc());
//    die;
?>
<!-- candidate start -->

<div class="container py-5">
    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
        <h1 class="mb-0">Candidate</h1>
    </div>
    <div class="row g-5">
        <?php foreach ($insert as $row) { ?>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="../<?php echo $row['address_publish_photo']; ?>" alt="Candidate photo">
                        <div class="team-social">
                            
                            <a class="btn btn-primary py-md-3 px-md-5 me-3 animated rounded" href="../static/candidate_appeal.php?&vpc&can=<?php echo $row['active_id']; ?>"><i class="fab fw-normal"><small>View Details</small></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary"><?php echo $row['official_name']; ?></h4>
                        <p class="text-uppercase m-0">(<?php echo $row['famous_name']; ?>)</p>
                        <p class="text-uppercase m-0"><b>From Side : <?php echo $row['party']; ?></b></p>
                    </div>
                </div>
            </div>
        <?php } ?>        
       
    </div>
</div>


<!-- candidate End -->



<!-- Footer & JavaScript Libraries start  -->
<?php include('../navbar_footer/footer.php') ?>
<!-- Footer & JavaScript Libraries End  -->
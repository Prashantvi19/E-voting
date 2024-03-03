<!-- Navbar start -->
<?php include("../navbar_footer/navbar.php") ?>
<!-- Navbar End -->

<div class="w-100 h-100 container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="mb-0">Vote</h1>
        </div>

        <?php
        include("../../controller/database.php");

        $blong_user = $_SESSION['user_belong'];
        $active_id = $_SESSION['id'];

        // group by query
        // SELECT `id`, `active_org_id`, `voter_id`, `first_name`, `middle_name`, `last_name`, `dob`, `mobile_number`, `email`, `profile_photo`, `gender`, `country`, `state`, `district`, `tahsil`, `city`, `pin_code`, `type_address_proof`, `doc_address_proof`, `type_id_proof`, `id_proof`, `literate_status`, `accepted_by_ID`, `vote_status`, `create_at`, `updated_at` FROM `org_participate_voter` WHERE 1
        $query_org = "SELECT * FROM `org_participate_voter` WHERE  `accepted_by_ID` != 'notAccept' AND `active_org_id`= $blong_user AND `vote_status`= 0 and `voter_id` = $active_id ";
        $insert = mysqli_query($dbcon, $query_org);


        // SELECT `id`, `org_id`, `user_id`, `total_get_votes`, `start_close_vote`, `results_show_hide`, `created_at`, `updated_at` FROM `voters_vote` WHERE 1
        $query_org = "SELECT * FROM `voters_vote` WHERE  `org_id` = $blong_user  AND `start_close_vote`= 1";
        $start_close_vote_status = mysqli_query($dbcon, $query_org);
       
        if ($start_close_vote_status->num_rows > 0 && $insert->num_rows > 0) {
            
        ?>

            <form action="../../controller/vote.php" method="POST">
                <div class="text-center position-relative p-3 my-3 mx-auto" style="max-width: 300px; max-height: 80px;">
                    <div class="col-lg-12 m-0 text-center ">
                        <input value="NOTA" name="nota" class="row btn btn-danger w-100 h-100 " type="submit">
                    </div>
                </div>
            </form>
            <?php
            
            // SELECT `id`, `active_id`, `active_org_id`, `official_name`, `famous_name`, `address_publish_photo`, `party`, `post`, `slogan`, `doc_type_party_or_id_proof`, `address_party_or_id_proof`, `address_motive_latter`, `address_poster`, `address_logo`, `address_speech_video`, `address_appeal`, `accepted_by_ID`, `created_at`, `updated_at` FROM `candidate` WHERE 1
            $query_org = "SELECT `active_id`, `active_org_id`, `official_name`,`address_logo` FROM `candidate` WHERE `accepted_by_ID` != 'notAccept' AND `active_org_id`= $blong_user";
            $insert = mysqli_query($dbcon, $query_org);
            // print_r($insert->fetch_assoc());

            //    die;
            ?>
            <?php foreach ($insert as $row) { ?>
                <div class="row g-5">
                    <div class="row g-5">
                        <form action="../../controller/vote.php" method="POST">
                            
                            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
                                <div class="row g-3">
                                    <div class="col-12  border-0 bg-light px-2 ">
                                        <div class="row">
                                            <div class="col-3 m-0 text-center">
                                                <img class="img-fluid w-100 h-100 " src="../<?php echo $row['address_logo']; ?>" style="width: 100px; height: 100px; object-fit: cover;" alt="Party logo">
                                            </div>
                                            <div class="col-6 m-0 text-center">
                                                <a href="#" class="w-100 h-100 form-control py-4"> <?php echo $row['official_name']; ?></a>
                                                <input name="candidate_id" type="hidden" value=" <?php echo $row['active_id']; ?>">
                                            </div>
                                            <div class="col-3 m-0 text-center ">
                                                <button class="row btn btn-primary w-100 h-100 " name = "submit_vote"  type= "submit">Vote</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <?php } ?>
    </div>
<?php } else if ($insert->num_rows <= 0) { ?>
    <div class="col-lg-12 text-center text-danger position-relative p-3 my-2 mx-auto">
        <h1 class=" text-center text-danger ">You have already submitted</h1>
    </div>
<?php } else if ($start_close_vote_status->num_rows <= 0) { ?>
    <div class="col-lg-12 text-center text-danger position-relative p-3 my-2 mx-auto">
        <h1 class=" text-center text-danger "> You can not access</h1>
    </div>
<?php } ?>

</div>

<!-- Footer & JavaScript Libraries start  -->
<?php include('../navbar_footer/footer.php') ?>
<!-- Footer & JavaScript Libraries End  -->
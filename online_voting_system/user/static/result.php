 <!-- Navbar start -->
 <?php include('../navbar_footer/navbar.php') ?>
 <!-- Navbar End -->

 <!-- Quote Start -->
 <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
     <br><br><br>


     <?php
        include("../../controller/database.php");

        $blong_user = $_SESSION['user_belong'];

        // $active_id = $_SESSION['id'];

        // group by query
        // // SELECT `id`, `active_org_id`, `voter_id`, `first_name`, `middle_name`, `last_name`, `dob`, `mobile_number`, `email`, `profile_photo`, `gender`, `country`, `state`, `district`, `tahsil`, `city`, `pin_code`, `type_address_proof`, `doc_address_proof`, `type_id_proof`, `id_proof`, `literate_status`, `accepted_by_ID`, `vote_status`, `create_at`, `updated_at` FROM `org_participate_voter` WHERE 1
        // $query_org = "SELECT * FROM `org_participate_voter` WHERE  `accepted_by_ID` != 'notAccept' AND `active_org_id`= $blong_user AND `vote_status`= 0 and `voter_id` = $active_id ";
        // $insert = mysqli_query($dbcon, $query_org);


        $query_org = "SELECT * FROM `voters_vote` WHERE `org_id` = $blong_user  AND `results_show_hide`= 1";
        $vote_results_check_status = mysqli_query($dbcon, $query_org);

        // print_r($start_close_vote_status . ' and ' . $insert);
        // print_r($start_close_vote_status->fetch_assoc() . 'and' . $insert->fetch_assoc());
        if ($vote_results_check_status->num_rows > 0) {
            // nota votes
            $query_org = "SELECT `total_get_votes` FROM `voters_vote` WHERE `user_id` = $blong_user AND  `org_id` = $blong_user  AND `results_show_hide`= 1 ";
            $nota_results = mysqli_query($dbcon, $query_org);
            $nota = $nota_results->fetch_assoc();

            // total votes

            $query_org = "SELECT * FROM `org_participate_voter` WHERE  `accepted_by_ID` != 'notAccept' AND `active_org_id`= $blong_user";
            $total_voter = mysqli_query($dbcon, $query_org);
            $total_voter = $total_voter->num_rows;

            // gain votes

            // SELECT `id`, `org_id`, `user_id`, `total_get_votes`, `start_close_vote`, `results_show_hide`, `created_at`, `updated_at` FROM `voters_vote` WHERE 1
            $query_org = "SELECT  MAX(total_get_votes) AS Winner FROM `voters_vote` WHERE `user_id` != $blong_user AND  `org_id` = $blong_user  AND `results_show_hide`= 1 ";
            $vote_results = mysqli_query($dbcon, $query_org);
            $data = $vote_results->fetch_assoc();

            $query_org = "SELECT `user_id`, `total_get_votes` FROM `voters_vote` WHERE `user_id` != $blong_user AND  `org_id` = $blong_user  AND `results_show_hide`= 1 ";

            $vote_results = mysqli_query($dbcon, $query_org);
            // $data_unic_id = $vote_results->fetch_assoc();

            $a = 0;
            $b = 1;

            foreach ($vote_results as $row) {
                if ($row['total_get_votes'] == $data['Winner']) {
                    $winner_candidate =  $row['user_id'];
                    $a += 1;
                }
            }
            $query_org = "SELECT `famous_name`, `official_name`,`party`, `address_publish_photo` FROM `candidate` WHERE `active_org_id`= $blong_user AND `active_id` = $winner_candidate";
            $insert = mysqli_query($dbcon, $query_org);
            $winner_candidate_data = $insert->fetch_assoc();
            // $sn = 1;
            //    die;

            if ($vote_results->num_rows > $a) {
        ?>
             <div class="container-fluid py-5">
                 <div class="row g-5">
                     <div class="col-lg-3"></div>
                     <div class="col-lg-6">
                         <div class="bg-primary rounded h-100 align-items-center p-5 wow zoomIn" data-wow-delay="0.3s">
                             <div class="row  g-5">
                                 <div class="col-lg-12 wow slideInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
                                     <div class=" team-item bg-light rounded overflow-hidden">
                                         <div class="  team-img position-relative overflow-hidden ">
                                             <img class=" text-center img-fluid w-100" src="../<?php echo  $winner_candidate_data['address_publish_photo'] ?>" alt="">

                                             <div class="text-center py-5">
                                                 <h4 class="text-primary"><?php echo  $winner_candidate_data['official_name'] ?></h4>
                                                 <p class="text-uppercase m-0">(<?php echo  $winner_candidate_data['famous_name'] ?>)</p>
                                                 <p class="text-uppercase m-0"><b>Party: <?php echo  $winner_candidate_data['party'] ?></b> </p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-3"></div>
                     </div>
                 </div>
                 <div class="container-fluid facts py-5 pt-lg-0">
                     <div class="container py-5 pt-lg-0">
                         <div class="row gx-0">
                             <div class="col-lg-4 wow zoomIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                                 <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                                     <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                                         <i class="fa fa-users text-primary"></i>
                                     </div>
                                     <div class="ps-4">
                                         <h5 class="text-white mb-0">Total Voters</h5>
                                         <h1 class="text-white mb-0" data-toggle="counter-up"><?php echo $total_voter ?></h1>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                                 <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                                     <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                                         <i class="fa fa-check text-white"></i>
                                     </div>
                                     <div class="ps-4">
                                         <h5 class="text-primary mb-0">Gain Votes</h5>
                                         <h1 class="mb-0" data-toggle="counter-up"><?php echo $data['Winner'] ?></h1>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-4 wow zoomIn" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                                 <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                                     <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                                         <i class="fa fa-award text-primary"></i>
                                     </div>
                                     <div class="ps-4">
                                         <h5 class="text-white mb-0">NOTA votes</h5>
                                         <h1 class="text-white mb-0" data-toggle="counter-up"><?php echo $nota['total_get_votes'] ?></h1>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         <?php }if ($vote_results->num_rows == $a){ ?>
             <div class="col-lg-12 text-center text-danger position-relative p-3 my-2 mx-auto">
                 <h1 class=" text-center text-danger "> Result is not clear</h1>
             </div>
         <?php }
        } else if ($start_close_results_status->num_rows <= 0) { ?>
         <div class="col-lg-12 text-center text-danger position-relative p-3 my-2 mx-auto">
             <h1 class=" text-center text-danger "> You can not access</h1>
         </div>
     <?php } ?>
     <!-- Quote End -->

     <!-- Footer & JavaScript Libraries start  -->
     <?php include('../navbar_footer/footer.php') ?>
     <!-- Footer & JavaScript Libraries End  -->
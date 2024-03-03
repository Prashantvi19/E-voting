<?php
session_start();
include("./database.php");

// start code start
if (isset($_GET["vstzyx"])) {

    $user_belong = $_SESSION["user_belong"];
    // $unic_id = $_GET["lop"];

    // print_r($_SESSION);
    // die($unic_id);
    // check email is exist or not

    // INSERT INTO `voters_vote`(`id`, `org_id`, `user_id`, `start_close_vote`, `results_show_hide`, `created_at`, `updated_at`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')

    // SELECT `id`, `active_id`, `active_org_id`, `official_name`, `famous_name`, `address_publish_photo`, `party`, `post`, `slogan`, `doc_type_party_or_id_proof`, `address_party_or_id_proof`, `address_motive_latter`, `address_poster`, `address_logo`, `address_speech_video`, `address_appeal`, `accepted_by_ID`, `created_at`, `updated_at` FROM `candidate` WHERE 

    $ad_org_votes_data_check = "SELECT * FROM `voters_vote` WHERE `org_id`= $user_belong";
    $org_candidates_check = mysqli_query($dbcon, $ad_org_votes_data_check);
    // print_r($org_candidates_check);
    // die;
    $msg = "Searching Error ";
    if ($org_candidates_check->num_rows > 0) {
        $ad_org_votes_data_Start = "UPDATE `voters_vote` SET `results_show_hide`= 0,`start_close_vote`= 1 WHERE start_close_vote = 0 AND `org_id`= $user_belong";
        $org_candidates_Start = mysqli_query($dbcon, $ad_org_votes_data_Start);
        $msg = ($org_candidates_Start) ? "Successfully" : "something went wrong ";
    } else if ($org_candidates_check->num_rows <= 0) {

        $org_candidates_query = "SELECT `active_id`, `active_org_id` FROM `candidate`WHERE `active_org_id`= $user_belong";
        $org_candidates = mysqli_query($dbcon, $org_candidates_query);

        $msg = "candidate Data not found ";
        // start 1st time run this code

        if ($org_candidates->num_rows > 0) {
            // for nota data 
            $ad_org_votes_data = "INSERT INTO `voters_vote`(`org_id`, `user_id`,`start_close_vote`,`results_show_hide`) VALUES ('$user_belong','$user_belong',1,0)";
            $insert = mysqli_query($dbcon, $ad_org_votes_data);
            // for nota data 

            // $data = $org_candidates->fetch_assoc();
            foreach ($org_candidates as $row) {

                $active_id = $row['active_id'];
                $active_org_id = $row['active_org_id'];
                //     print_r($k ."->".$value . '<br>');

                $ad_org_votes_data = "INSERT INTO `voters_vote`(`org_id`, `user_id`,`start_close_vote`,`results_show_hide`) VALUES ('$active_org_id','$active_id',1,0)";

                $insert = mysqli_query($dbcon, $ad_org_votes_data);
            }

            $msg = ($insert) ? "Successfully" : "something went wrong 1";
        } else {

            $msg = "something is went wrong ";
        }
        //end 1st time run this code

    }

    header("location:../admin/ovs_admin/voting_start.php?msg=$msg");
}
// start code end


// close code is start
if (isset($_GET["vEnzyx"])) {
    $user_belong = $_SESSION["user_belong"];


    $ad_org_votes_data_check = "SELECT * FROM `voters_vote` WHERE `org_id`= $user_belong";
    $org_candidates_check = mysqli_query($dbcon, $ad_org_votes_data_check);
    // print_r($org_candidates_check);
    // die;
    $msg = "Searching Error ";
    if ($org_candidates_check->num_rows > 0) {
        $ad_org_votes_data_End = "UPDATE `voters_vote` SET `start_close_vote`= 0 WHERE `start_close_vote` = 1 AND `org_id`= $user_belong";
        $org_candidates_End = mysqli_query($dbcon, $ad_org_votes_data_End);
        $msg = ($org_candidates_End) ? "Successfully" : "something went wrong ";
    } else if ($org_candidates_check->num_rows <= 0) {

        // start 1st time run this code

        $org_candidates_query = "SELECT `active_id`, `active_org_id` FROM `candidate`WHERE `active_org_id`= $user_belong";
        $org_candidates = mysqli_query($dbcon, $org_candidates_query);
        $msg = "candidate Data not found ";

        if ($org_candidates->num_rows > 0) {
            // $data = $org_candidates->fetch_assoc();
            // for nota data 
            $ad_org_votes_data = "INSERT INTO `voters_vote`(`org_id`, `user_id`,`start_close_vote`) VALUES ('$user_belong','$user_belong',0)";
            $insert = mysqli_query($dbcon, $ad_org_votes_data);
            // for nota data 

            foreach ($org_candidates as $row) {
                $active_id = $row['active_id'];
                $active_org_id = $row['active_org_id'];
                //     print_r($k ."->".$value . '<br>');

                $ad_org_votes_data ="INSERT INTO `voters_vote`(`org_id`,`user_id`,`start_close_vote`) VALUES ('$active_org_id','$active_id',0)";

                $insert = mysqli_query($dbcon, $ad_org_votes_data);
            }

            $msg = ($insert) ? "Successfully" : "something went wrong 1";
        } else {

            $msg = "something is went wrong ";
        }
        //end 1st time run this code

    }

    header("location:../admin/ovs_admin/voting_start.php?msg=$msg");
}
// close code is end
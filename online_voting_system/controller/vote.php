<?php
// nota code start 
// nota ad org vote account 
session_start();

include("./database.php");
// die($_SESSION["user_type"]);

if (isset($_POST['nota'])) {

    $user_belong = $_SESSION["user_belong"];
    $id = $_SESSION["id"];


    $query = "SELECT * FROM `login_data` WHERE `user_type`= 2 AND `user_belong` = '$user_belong'";
    $user_verification = mysqli_query($dbcon, $query);


    if ($user_verification->num_rows > 0) {


        // find total nota
        $query = "SELECT `total_get_votes`   FROM `voters_vote` WHERE `org_id`= $user_belong AND `user_id`=' $user_belong '";
        $user_verificationVote = mysqli_query($dbcon, $query);
        // print_r($user_verificationVote);
        // die;

        $data = $user_verificationVote->fetch_assoc();
        $data = $data['total_get_votes'];
        $vote = $data + 1;


        if ($user_verificationVote && $vote >  $data) {
            // find total nota 
            $query = " UPDATE `voters_vote` SET `total_get_votes`= $vote  WHERE `org_id`=$user_belong AND `user_id`= '$user_belong'";
            $user_verification = mysqli_query($dbcon, $query);


            // update voting status to the voter table
            $query = "UPDATE `org_participate_voter` SET `vote_status`= 1 WHERE  `active_org_id`= $user_belong AND `voter_id`= '$id'";
            $user_verification = mysqli_query($dbcon, $query);


            if ($user_verification) {
                $msg = "vote Succesfully Submit";
            } else {

                $msg = "Somthing went wrong";
            }
        } else {
            $msg = "vote didn't Submit";
        }

        if ($_SESSION['user_type'] == true || $_SESSION['user_type'] == 2 || $_SESSION['user_type'] == 3) {
            header("location:../admin/ovs_admin/index.php?msg=$msg");
        }
    } else {
        $msg = "Orgranization didn't found";
    }
    header("location:../user/public/index.php?msg=$msg");
}
// nota code end

//vote to code  for candidate start
if (isset($_POST['submit_vote'])) {

    $user_belong = $_SESSION["user_belong"];
    $id = $_SESSION["id"];
    $user_id = $_POST['candidate_id'];



    $query = "SELECT * FROM `login_data` WHERE `user_belong` = '$user_belong' AND `user_id` = $user_id";
    $user_verification = mysqli_query($dbcon, $query);
    // $data = $user_verification->fetch_assoc();

    if ($user_verification->num_rows > 0) {

        // find total nota
        $query = "SELECT `total_get_votes`   FROM `voters_vote` WHERE `org_id`= $user_belong AND `user_id`= $user_id";
        $user_verification_vote = mysqli_query($dbcon, $query);
        $dataLast = $user_verification_vote->fetch_assoc();
        $data = $dataLast['total_get_votes'];
        // die($data);
        $vote = $data + 1;
        // find total nota 
        if ($user_verification_vote && $vote > $data) {
            $query = "UPDATE `voters_vote` SET `total_get_votes`= $vote  WHERE `org_id`= $user_belong AND `user_id`= $user_id";
            $user_verification = mysqli_query($dbcon, $query);

            // update voting status to the voter table
            $query = "UPDATE `org_participate_voter` SET `vote_status`= 1 WHERE  `active_org_id`= $user_belong AND `voter_id`= $id";
            $user_verification = mysqli_query($dbcon, $query);

            if ($user_verification) {
                $msg = "vote Succesfully Submit";
            } else {

                $msg = "Somthing went wrong";
            }
        } else {
            $msg = "vote did not submit";
        }
    } else {
        $msg = "Orgranization didn't found";
    }
    header("location:../user/public/index.php?msg=" . $msg);
}
//vote to code  for candidate end
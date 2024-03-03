<?php
include("../controller/database.php");
session_start();
// print_r($_GET['azyx']);
if (isset($_GET['carazyx'])) {

    $user_belong = $_SESSION["user_belong"];
    $unic_id = $_SESSION["unic_id"];
    $voter_id = $_GET["caop"];


    // INSERT INTO `candidate`(`id`, `active_id`, `active_org_id`, `official_name`, `famous_name`, `address_publish_photo`, `party`, `post`, `slogan`, `doc_type_party_or_id_proof`, `address_party_or_id_proof`, `address_motive_latter`, `address_poster`, `address_logo`, `address_speech_video`, `address_appeal`, `accepted_by_ID`, `created_at`, `updated_at`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]','[value-15]','[value-16]','[value-17]','[value-18]','[value-19]')

    // Update in logib data table and org admin datable user status 1 is acceted request adn 0 pending

    $query = "UPDATE `candidate` SET `accepted_by_ID`= '$unic_id' WHERE `active_id`= '$voter_id' AND `active_org_id` = $user_belong ";
    $candidate = mysqli_query($dbcon, $query);



    $query = "UPDATE `login_data` SET `user_status`= 1 WHERE `unic_id` = ? AND `user_belong` = $user_belong";
    $stmt = mysqli_prepare($dbcon, $query);
    mysqli_stmt_bind_param($stmt, "s", $unic_id);
    $login_data = mysqli_stmt_execute($stmt);


    if ($login_data && $candidate) {

        $msg = "Successfully accepted user Request";
    } elseif ($login_data) {
        $msg = "login_data only updated";
    } elseif ($candidate) {
        $msg = "org_participate_voter only updated";
    } else {
        $msg = "somthing went wrong";
    }
    header("location:../admin/ovs_admin/candidate_request.php?msg=$msg");
    // admin\ovs_admin\aplication_confirm.php
}

if (isset($_GET['carrxyz'])) {
    $user_belong = $_SESSION["user_belong"];
    $unic_id = $_SESSION["unic_id"];
    $voter_id = $_GET["caop"];




    // Update in logib data table and org admin datable user status 1 is acceted request adn 0 pending

    $query = "DELETE FROM `candidate` WHERE `active_id`= '$voter_id' AND `active_org_id` = $user_belong";
    $candidate = mysqli_query($dbcon, $query);


    // Update in login data table and org admin datable user status 1 is acceted request adn 0 pending
    if ($candidate) {

        $msg = "Successfully accepted user Request";
    } else {
        $msg = "somthing went wrong";
    }
    header("location:../admin/ovs_admin/candidate_request.php?msg=$msg");
}

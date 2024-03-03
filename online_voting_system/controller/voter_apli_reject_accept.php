<?php
include("../controller/database.php");
session_start();
// print_r($_GET['azyx']);
if (isset($_GET['varazyx'])) {

    $user_belong = $_SESSION["user_belong"];
    $unic_id = $_SESSION["unic_id"];
    $voter_id = $_GET["apop"];


    // INSERT INTO `org_participate_voter`(`id`, `active_org_id`, `voter_id`, `first_name`, `middle_name`, `last_name`, `dob`, `mobile_number`, `email`, `profile_photo`, `gender`, `country`, `state`, `district`, `tahsil`, `city`, `pin_code`, `type_address_proof`, `doc_address_proof`, `type_id_proof`, `id_proof`, `literate_status`, `accepted_by_ID`, `vote_status`, `create_at`, `updated_at`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]','[value-15]','[value-16]','[value-17]','[value-18]','[value-19]','[value-20]','[value-21]','[value-22]','[value-23]','[value-24]','[value-25]','[value-26]')

    // Update in logib data table and org admin datable user status 1 is acceted request adn 0 pending

    $query = "UPDATE `org_participate_voter` SET `accepted_by_ID`= '$unic_id' WHERE `voter_id`= '$voter_id' AND `active_org_id` = $user_belong";
    $org_participate_voter = mysqli_query($dbcon, $query);

    $query = "UPDATE `org_participate` SET `Voter_application_status`= '$unic_id' WHERE `id`= '$voter_id' AND `user_belong` = $user_belong";
    $org_participate_voter = mysqli_query($dbcon, $query);

    if ($org_participate_voter) {

        $query = "UPDATE `login_data` SET `user_status`= 1 WHERE `unic_id` = ? AND `user_belong` = $user_belong";
        $stmt = mysqli_prepare($dbcon, $query);
        mysqli_stmt_bind_param($stmt, "s", $unic_id);
        $login_data = mysqli_stmt_execute($stmt);
    }

    if ($login_data && $org_participate_voter) {

        $msg = "Successfully accepted user Request";
    } elseif ($login_data) {
        $msg = "login_data only updated";
    } elseif ($org_participate_voter) {
        $msg = "org_participate_voter only updated";
    } else {
        $msg = "somthing went wrong";
    }
    header("location:../admin/ovs_admin/aplication_confirm.php?msg=$msg");
    // admin\ovs_admin\aplication_confirm.php
}

if (isset($_GET['varrxyz'])) {
    $user_belong = $_SESSION["user_belong"];
    $unic_id = $_SESSION["unic_id"];

    $voter_id = $_GET["apop"];




    // Update in logib data table and org admin datable user status 1 is acceted request adn 0 pending

    $query = "DELETE FROM `org_participate_voter` WHERE `voter_id`= '$voter_id' AND `active_org_id` = $user_belong";
    $org_participate_voter = mysqli_query($dbcon, $query);

    //UPDATE `org_participate` SET `id`='[value-1]',`user_belong`='[value-2]',`unic_id`='[value-3]',`org_email_id`='[value-4]',`org_mobile_number`='[value-5]',`first_name`='[value-6]',`middle_name`='[value-7]',`last_name`='[value-8]',`email_by_voter`='[value-9]',`mobile_number_by_voter`='[value-10]',`Voter_application_status`='[value-11]',`password`='[value-12]',`created_at`='[value-13]',`updated_at`='[value-14]' WHERE 1
    if ($org_participate_voter) {
        $query = "UPDATE `org_participate` SET `Voter_application_status`= 'notAccept' WHERE `unic_id`= '$voter_id' AND `user_belong` = $user_belong";
        $org_participate_voter = mysqli_query($dbcon, $query);
    }



    // Update in login data table and org admin datable user status 1 is acceted request adn 0 pending
    if ($org_participate_voter) {

        $msg = "Successfully accepted user Request";
    } else {
        $msg = "somthing went wrong";
    }
    header("location:../admin/ovs_admin/aplication_confirm.php?msg=$msg");
}

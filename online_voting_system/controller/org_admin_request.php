<?php
include("../controller/database.php");
session_start();
// print_r($_GET['azyx']);
if (isset($_GET['azyx'])) {

    $unic_id = $_GET["lop"];
    $ovs_accepted_by_id = $_SESSION["unic_id"];
    // echo $ovs_accepted_by_id;
    // die;


    // Update in logib data table and org admin datable user status 1 is acceted request adn 0 pending

    $query = "UPDATE `org_admin` SET `ovs_accepted_by_id` = '$ovs_accepted_by_id' , `user_status` = 1 WHERE `unic_id`= '$unic_id'";
    // print_r($query);die;
    $org_admin = mysqli_query($dbcon, $query);



    $query = "UPDATE `login_data` SET `user_status`= 1 WHERE `unic_id` = ?";
    $stmt = mysqli_prepare($dbcon, $query);
    mysqli_stmt_bind_param($stmt, "s", $unic_id);
    $login_data = mysqli_stmt_execute($stmt);


    if ($login_data && $org_admin) {

        $msg = "Successfully accepted user Request";
    } elseif ($login_data) {
        $msg = "login_data only updated";
    } elseif ($org_admin) {
        $msg = "org_admin only updated";
    } else {
        $msg = "somthing went wrong";
    }
    header("location:../admin/ovs_admin/org_admin_request.php?msg=$msg");
}

if (isset($_GET['rxyz'])) {

    $unic_id = $_GET["lop"];




    // Update in logib data table and org admin datable user status 1 is acceted request adn 0 pending

    $query = "DELETE FROM `org_admin` WHERE `unic_id`= '$unic_id'";
    $org_admin = mysqli_query($dbcon, $query);



    $query = "DELETE FROM `login_data` WHERE  `unic_id` = ?";
    $stmt = mysqli_prepare($dbcon, $query);
    mysqli_stmt_bind_param($stmt, "s", $unic_id);
    $login_data = mysqli_stmt_execute($stmt);

    // Update in login data table and org admin datable user status 1 is acceted request adn 0 pending
    if ($login_data && $org_admin) {

        $msg = "Successfully accepted user Request";
    } elseif ($login_data) {
        $msg = "login_data only updated";
    } elseif ($org_admin) {
        $msg = "org_admin only updated";
    } else {
        $msg = "somthing went wrong";
    }
    header("location:../admin/ovs_admin/org_admin_request.php?msg=$msg");
}

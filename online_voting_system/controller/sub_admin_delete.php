<?php
session_start();
include("./database.php");
if (isset($_GET["subddzyx"])) {

    $user_belong = $_SESSION["user_belong"];
    $unic_id = $_GET["lop"];

    // print_r($_SESSION);
    // die($unic_id);
    // check email is exist or not
    $user_verification_query = "SELECT * FROM `login_data` WHERE `unic_id` = '$unic_id' AND `user_belong`= $user_belong ";
    $user_verification = mysqli_query($dbcon, $user_verification_query);


    if ($user_verification->num_rows > 0) {
        $login_insert = "DELETE FROM `login_data` WHERE `unic_id` = '$unic_id' AND `user_belong`= $user_belong ";

        $insert = mysqli_query($dbcon, $login_insert);

        $msg = ($insert) ? "Successfully" : "something went wrong ";
    } else {

        $msg = "User Doesn't exist ";
    }
    header("location:../admin/ovs_admin/subadmin_list.php?msg=$msg");
}
